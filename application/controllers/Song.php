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

        public function view_create()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'   => 'song-add'
                );
                view('backend/song_create', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        /**
         * Action Section
         */

        public function create()
        {
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $filename = "";
                if($_FILES['song']['error'] === UPLOAD_ERR_OK){
                    $config['upload_path']          = './media/music/';
                    $config['allowed_types']        = 'mp3|mp4';
                    $config['overwrite']            = true;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ( ! $this->upload->do_upload('song')){
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }else{
                        $upload = array('upload_data' => $this->upload->data());
                        print_r($upload);
                    }
                }else{
                    redirect('admin/song.html','refresh');
                }
            }
        }
    
    }
    
    /* End of file Song.php */
    
?>