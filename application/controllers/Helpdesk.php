<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Helpdesk extends CI_Controller {
    
        public function index()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'   => 'helpdesk'
                );
                view('backend/helpdesk', $data);
            }else{
                if($this->uri->segment(1)=='admin'){
                    redirect('admin/login.html','refresh');
                }elseif($this->uri->segment(1)=='pengurus'){
                    redirect('pengurus/login.html','refresh');
                }
            }
        }
    
    }
    
    /* End of file Helpdesk.php */
    
?>