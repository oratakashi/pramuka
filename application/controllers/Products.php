<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Products extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ProductModel');
        }
        
    
        public function index()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data_product = $this->ProductModel->read()->result_array();
                $data = array(
                    'content'   => 'products',
                    'data'      => $data_product
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

        public function view_update()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data_product = $this->ProductModel->read()->row_array();
                $data = array(
                    'content'   => 'products',
                    'data'      => $data_product
                );
                view('backend/products_update', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }
        
        /**
         * Action Section
         */

         public function create()
         {
            if(!empty($this->session->userdata('id_user'))){
                $photo = "";
                $id_product = $this->ProductModel->getID();
                if($_FILES['photo']['error'] === UPLOAD_ERR_OK){
                    $photo = $id_product;
                
                    $config['upload_path']          = './media/product/';
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
                    $photo = "no-image.jpg";
                }
                $slug = str_replace(" ", "-", strtolower($this->input->post('nama')));
                $data = array(
                    "id_product" => $id_product,
                    "nm_product" => $this->input->post('nama'),
                    "slug"       => $slug,
                    "harga"      => $this->input->post('harga'),
                    "id_user"    => $this->session->userdata('id_user'),    
                    "foto"       => $photo,
                    "deskripsi"      => $this->input->post('deskripsi')
                );

                $this->ProductModel->create($data);

                redirect('admin/products.html','refresh');
            }else{
                redirect('admin/login.html','refresh');
            }
         }

         public function delete()
         {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id_product = $this->uri->segment(3);
                    $data_product = $this->ProductModel->read_id($id_product)->row_array();
                    if($data_product['foto'] != 'no-image.jpg'){
                        if(file_exists("media/product/".$data_product['foto'])){
                            unlink("media/product/".$data_product['foto']);
                        }
                    }

                    $this->ProductModel->delete($id_product);

                    redirect('admin/products.html','refresh');                    
                }
            }else{
                redirect('admin/login.html','refresh');
            }
         }

         public function update()
         {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $photo = "";
                    $id_product = $this->uri->segment(3);
                    $data_product = $this->ProductModel->read_id($id_product)->row_array();

                    if($_FILES['photo']['error'] === UPLOAD_ERR_OK){
                        $photo = $id_product;
                    
                        $config['upload_path']          = './media/product/';
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
                        $photo = "no-image.jpg";
                    }
                }
            }
         }
    }
    
    /* End of file Products.php */
    
?>