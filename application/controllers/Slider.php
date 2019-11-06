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
                $data = array(
                    'content'   => 'slider'
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
            echo "Fungsi belum tersedia";
        }
    }
    
    /* End of file Slider.php */
    
?>