<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Adminmodel');
    }
    

    public function index()
    {
        
    }

    public function validation()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data = array(
                "email" => $this->input->post('email'),
                "password" => sha1($this->input->post('password'))
            );

            $data = $this->Adminmodel->login($data);
            $result = array();

            if($data->num_rows()==1){
                $result['success'] = true;
                $result['message'] = 'Login Success';
                $result['data'] = $data->row_array();
            }else{
                $result['success'] = false;
                $result['message'] = 'Data not found';
            }
            echo json_encode($result);
        }else{
            $result = array();
            $result['success'] = false;
            $result['message'] = 'Wrong Method';

            echo json_encode($result);
        }
    }

    public function login()
    {
        $result = array();

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $session = array(
                'email' => $this->input->post('email'),
                'nama' => $this->input->post('nama'),
                'id_admin' => $this->input->post('id_admin'),
                'photo' => $this->input->post('photo')
            );
            $this->input->set_cookie('id_admin', base64_encode($session['id_admin']), 3600*24*7);
            $this->input->set_cookie('nama', base64_encode($session['nama']), 3600*24*7);
            $this->input->set_cookie('email', base64_encode($session['email']), 3600*24*7);
            $this->input->set_cookie('photo', base64_encode($session['photo']), 3600*24*7);
            
            $this->session->set_userdata( $session );
            
            $result['success'] = true;
            $result['message'] = 'Session has been set';

            echo json_encode($result);
        }else{
            $result['success'] = false;
            $result['message'] = 'Wrong Method';

            echo json_encode($result);
        }
    }

}

/* End of file Users.php */
?>