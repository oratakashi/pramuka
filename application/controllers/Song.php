<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Song extends CI_Controller {
    
        public function index()
        {
            if(!empty($this->session->userdata('id_user'))){
                // $data_user = $this->UserModel->read()->result_array();
                $data = array(
                    'content'   => 'song'
                );
                view('backend/song', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }
    
    }
    
    /* End of file Song.php */
    
?>