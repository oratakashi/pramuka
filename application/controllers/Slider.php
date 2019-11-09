<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Slider extends CI_Controller {
        
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('SliderModel');
        }
        

        public function index()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data_slider = $this->SliderModel->read()->result_array();
                $data = array(
                    'content'   => 'slider',
                    'data'      => $data_slider
                );
                view('backend/slider', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_create()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'   => 'slider'
                );
                view('backend/slider_create', $data);
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
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    if($_FILES['photo']['error'] === UPLOAD_ERR_OK){
                        
                        $config['upload_path']          = './media/slider/';
                        $config['allowed_types']        = 'gif|jpg|png';
                        $config['overwrite']            = true;
                        
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        if ( ! $this->upload->do_upload('photo')){
                            $error = array('error' => $this->upload->display_errors());
                            print_r($error);
                        } else{
                            $upload = array('upload_data' => $this->upload->data());
                            $data = array(
                                "image"     => $upload['upload_data']['file_name'],
                                "title"     => $this->input->post('judul')                                
                            );

                            $this->SliderModel->create($data);

                            redirect('admin/slider.html','refresh');
                        }
                    }else{
                        redirect('admin/slider.html','refresh');
                    }
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function delete()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id_slider = $this->uri->segment(3);

                    $data_slider = $this->SliderModel->read_id($id_slider)->row_array();

                    if(file_exists("media/slider/".$data_slider['image'])){
                        unlink("media/slider/".$data_slider['image']);
                    }

                    $this->SliderModel->delete($id_slider);

                    redirect('admin/slider.html','refresh');                    
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }
    }
    
    /* End of file Slider.php */
    
?>