<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Products extends CI_Controller {
    
        public function index()
        {
            if(!empty($this->session->userdata('id_user'))){
                // $data_dokumen = $this->DocumenModel->read()->result_array();
                $data = array(
                    'content'   => 'products'
                    // 'data'      => $data_dokumen
                );
                view('backend/products', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_create()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'   => 'products-add'
                    // 'data'      => $data_dokumen
                );
                view('backend/products_create', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }
    
    }
    
    /* End of file Products.php */
    
?>