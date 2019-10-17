<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Documents extends CI_Controller {
    
        public function index()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'   => 'documents'
                );
                view('backend/documents', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_create()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'       => 'documents-add'
                );
                view('backend/documents_create', $data);
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
                if($_FILES['document']['error'] === UPLOAD_ERR_OK){
                    $config['upload_path']          = './media/files/';
                    $config['allowed_types']        = '*';
                    $config['overwrite']            = true;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ( ! $this->upload->do_upload('document')){
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }else{
                        $upload = array('upload_data' => $this->upload->data());

                        print_r($upload);
                        
                        // $data = array(
                        //     "nama_file"         => $upload['upload_data']['file_name'],
                        //     "size"              => $upload['upload_data']['file_size'],
                        //     "total_download"    => 0,
                        //     "id_user"           => $this->session->userdata('id_user')
                        // );

                        // $this->SongModel->create($data);

                        // redirect('admin/song.html','refresh');
                    }
                }
            }
         }
    }
    
    /* End of file Documents.php */
    
?>