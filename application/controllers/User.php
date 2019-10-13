<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('KecamatanModel');
    }
    
    /**
     * UI Method
     */

    public function index()
    {
        if(!empty($this->session->userdata('id_user'))){
            $data_user = $this->UserModel->read()->result_array();
            $data = array(
                'content'   => 'user',
                'data_user' => $data_user
            );
            view('backend/user', $data);
        }else{
            redirect('admin/login.html','refresh');
        }
    }

    public function read()
    {
        if(!empty($this->session->userdata('id_user'))){
            $url = explode('.', $this->uri->segment(3));
            $id_user = $url[0];
    
            $data_user = $this->UserModel->read_id($id_user)->row_array();
    
            $data = array(
                'content'   => 'user',
                'data_user' => $data_user
            );
            view('backend/user_detail', $data);
        }else{
            redirect('admin/login.html','refresh');
        }
    }

    public function view_create()
    {
        if(!empty($this->session->userdata('id_user'))){
            $data_kec = $this->KecamatanModel->read()->result_array();
            $data = array(
                "content"   => 'user',
                "data_kec"  =>  $data_kec
            );

            view('backend/user_create', $data);
        }else{
            redirect('admin/login.html','refresh');
        }
    }

    public function view_update()
    {
        if(!empty($this->session->userdata('id_user'))){
            $url = explode('.', $this->uri->segment(3));
            $id_user = $url[0];
            $id_kecamatan = "";
    
            $data_user = $this->UserModel->read_id($id_user)->row_array();
            $data_kec = $this->KecamatanModel->read()->result_array();
            if($data_user['lev_user']=='Pengurus'){
                $id_kecamatan = substr($data_user['id_user'], 0, 6);
            }
            $data = array(
                "content"       => 'user',
                "data_kec"      =>  $data_kec,
                "user"          => $data_user,
                "id_kecamatan"  => $id_kecamatan
            );

            view('backend/user_edit', $data);
        }else{
            redirect('admin/login.html','refresh');
        }
    }

    /**
     * Action Method
     */

    public function validation()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data = array(
                "email" => $this->input->post('email'),
                "password" => sha1($this->input->post('password'))
            );

            $data = $this->UserModel->login($data);
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
                'id_user' => $this->input->post('id_user'),
                'photo' => $this->input->post('photo'),
                'lev_user' => $this->input->post('lev_user')
            );
            $this->input->set_cookie('id_user', base64_encode($session['id_user']), 3600*24*7);
            $this->input->set_cookie('nama', base64_encode($session['nama']), 3600*24*7);
            $this->input->set_cookie('email', base64_encode($session['email']), 3600*24*7);
            $this->input->set_cookie('photo', base64_encode($session['photo']), 3600*24*7);
            $this->input->set_cookie('lev_user', base64_encode($session['lev_user']), 3600*24*7);
            
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

    public function logout()
    {
        delete_cookie('id_user');
        delete_cookie('nama');
        delete_cookie('email');
        delete_cookie('photo');
        delete_cookie('lev_user');

        $this->session->sess_destroy();
        
        
        redirect('admin/login.html','refresh');
        
    }

    public function getID()
    {
        $result = array();

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $id_user = "";
            $type = $this->input->post('type');
            if($type == 'admin'){
                $no = 1;
                while(true){
                    if($no < 10){
                        $id_user = "ID".date('Ymd').'0'.$no;
                        if($this->UserModel->cekID($id_user)){
                            break;
                        }
                    }elseif($no < 100){
                        $id_user = "ID".date('Ymd').$no;
                        if($this->UserModel->cekID($id_user)){
                            break;
                        }
                    }else{
                        break;
                    }
                    $no++;
                }
                $data_user = array(
                    "id_user" => $id_user
                );
                $result['data'] = $data_user;
                $result['success'] = true;
                $result['message'] = 'Success';
                echo json_encode($result);
            }else{
                $id_kecamatan = $this->input->post('id_kecamatan');
                $no = 1;
                
                while(true){
                    if($no<10){
                        $id_user = $id_kecamatan."00000".$no;
                        if($this->UserModel->cekID($id_user)){
                            break;
                        }
                    }elseif($no < 100){
                        $id_user = $id_kecamatan."0000".$no;
                        if($this->UserModel->cekID($id_user)){
                            break;
                        }
                    }elseif($no < 1000){
                        $id_user = $id_kecamatan."000".$no;
                        if($this->UserModel->cekID($id_user)){
                            break;
                        }
                    }elseif($no < 10000){
                        $id_user = $id_kecamatan."00".$no;
                        if($this->UserModel->cekID($id_user)){
                            break;
                        }
                    }elseif($no < 100000){
                        $id_user = $id_kecamatan."0".$no;
                        if($this->UserModel->cekID($id_user)){
                            break;
                        }
                    }elseif($no < 1000000){
                        $id_user = $id_kecamatan.$no;
                        if($this->UserModel->cekID($id_user)){
                            break;
                        }
                    }
                    $no++;
                }
                $data_user = array(
                    "id_user" => $id_user
                );
                $result['data'] = $data_user;
                $result['success'] = true;
                $result['message'] = 'Success';
                echo json_encode($result);
            }
        }else{
            $result['success'] = false;
            $result['message'] = 'Wrong Method';

            echo json_encode($result);
        }
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $photo = "";
            if($_FILES['photo']['error'] === UPLOAD_ERR_OK){
                $photo = $this->input->post('id_user');
                
                $config['upload_path']          = './media/photo_user/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['overwrite']            = true;
                $config['file_name']            = $photo;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('photo')){
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }
                else{
                    $upload = array('upload_data' => $this->upload->data());
                    $photo = $upload['upload_data']['file_name'];
                }
            }else{
                $photo = "no-pict.png";
            }

            $data = array(
                "id_user" => $this->input->post('id_user'),
                "nama" => $this->input->post('nama'),
                "email" => $this->input->post('email'),
                "password" => sha1($this->input->post('password')),
                "lev_user" => $this->input->post('lev_user'),
                "alamat" => $this->input->post('alamat'),
                "no_hp" => $this->input->post('no_hp'),
                "photo" => $photo
            );

            $this->UserModel->create($data);
            redirect('admin/user.html','refresh');
        }
    }

    public function update()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $photo = "";
            $id_user = $this->input->post('id_user');
            $password = $this->input->post('password');
            $data_user = $this->UserModel->read_id($id_user)->row_array();

            if($password != $data_user['password']){
                $password = sha1($password);
            }

            if($_FILES['photo']['error'] === UPLOAD_ERR_OK){
                $photo = $this->input->post('id_user');
                
                $config['upload_path']          = './media/photo_user/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['overwrite']            = true;
                $config['file_name']            = $photo;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('photo')){
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                }
                else{
                    $upload = array('upload_data' => $this->upload->data());
                    $photo = $upload['upload_data']['file_name'];
                }
            }else{
                $photo = $data_user['photo'];
            }
            $data = array(
                "id_user" => $this->input->post('id_user'),
                "nama" => $this->input->post('nama'),
                "email" => $this->input->post('email'),
                "password" => $password,
                "lev_user" => $data_user['lev_user'],
                "alamat" => $this->input->post('alamat'),
                "no_hp" => $this->input->post('no_hp'),
                "photo" => $photo
            );

            $this->UserModel->update($data);
            redirect('admin/user.html','refresh');
        }
    }

    public function delete()
    {
        if(!empty($this->session->userdata('id_user'))){
            if(!empty($this->uri->segment(4))){
                $url = explode('.', $this->uri->segment(4));
                $id_user = $url[0];

                $this->UserModel->delete($id_user);
                
                redirect('admin/user.html','refresh');
            }
        }
    }
}

/* End of file Users.php */
?>