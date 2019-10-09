<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        if(empty($this->session->userdata('id_user'))){
            if($this->uri->segment(2)!='login.html'){
                redirect('admin/login.html');
            }else{
                $data = [
                    'title' => "Login - Pramuka Lumajang Tangguh"
                ];
                view('backend/login', $data);
            }
        }else{
            if($this->uri->segment(2)!='index.html'){
                redirect('admin/index.html');
            }else{
                view('backend/dashboard');
            }
        }        
    }

}

/* End of file Dashboard.php */
?>