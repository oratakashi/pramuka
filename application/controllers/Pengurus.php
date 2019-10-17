<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pengurus extends CI_Controller {
    
        public function index()
        {
            if(empty($this->session->userdata('id_user'))){
                if($this->uri->segment(2)!='login.html'){
                    redirect('pengurus/login.html');
                }else{
                    $data = [
                        'title' => "Login - Pramuka Lumajang Tangguh"
                    ];
                    view('backend/pengurus/login', $data);
                }
            }else{
                if($this->uri->segment(2)!='index.html'){
                    redirect('pengurus/index.html');
                }else{
                    $data = array(
                        'content' => 'dashboard'
                    );
                    view('backend/dashboard', $data);
                }
            }    
        }
    
    }
    
    /* End of file Pengurus.php */
    
?>