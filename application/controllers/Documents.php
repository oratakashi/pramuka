<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Documents extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('DocumenModel');
            
        }
        
    
        public function index()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data_dokumen = $this->DocumenModel->read()->result_array();
                $data = array(
                    'content'   => 'documents',
                    'data'      => $data_dokumen
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
                        
                        $data = array(
                            "nama_file"         => $upload['upload_data']['file_name'],
                            "size"              => $upload['upload_data']['file_size'],
                            "total_download"    => 0,
                            "date_created"      => date('Y-m-d H:i:s'),
                            "id_user"           => $this->session->userdata('id_user')
                        );

                        $this->DocumenModel->create($data);
                        // echo $this->db->last_query();
                        
                        redirect('admin/documents.html','refresh');
                    }
                }
            }
         }

         public function delete()
         {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id_dokumen = $this->uri->segment(3);
                    $data_dokumen = $this->DocumenModel->read_id($id_dokumen)->row_array();

                    if(file_exists("media/files/".$data_dokumen['nama_file'])){
                        unlink("media/files/".$data_dokumen['nama_file']);
                    }

                    $this->DocumenModel->delete($id_dokumen);

                    
                    redirect('admin/documents.html','refresh');
                    
                }
            }else{
                redirect('admin/login.html','refresh');
            }
         }
    }
    
    /* End of file Documents.php */
    
?>