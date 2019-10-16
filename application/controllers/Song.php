<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Song extends CI_Controller {
        
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('SongModel');
        }
        

        public function index()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data_lagu = $this->SongModel->read()->result_array();
                $data = array(
                    'content'   => 'song',
                    'data_lagu'     => $data_lagu
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
                    'content'       => 'song-add'
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
                        
                        $data = array(
                            "nama_file"         => $upload['upload_data']['file_name'],
                            "size"              => $upload['upload_data']['file_size'],
                            "total_download"    => 0,
                            "id_user"           => $this->session->userdata('id_user')
                        );

                        $this->SongModel->create($data);

                        redirect('admin/song.html','refresh');
                    }
                }else{
                    redirect('admin/song.html','refresh');
                }
            }
        }

        public function delete()
        {
            echo "Comingsoon";
        }
    
    }
    
    /* End of file Song.php */
    
?>