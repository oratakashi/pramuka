<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Webservice extends CI_Controller {
        
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ArticleModel');
            $this->load->model('DocumenModel');
            $this->load->model('KecamatanModel');
            $this->load->model('ProductModel');
            $this->load->model('SongModel');
            $this->load->model('UserModel');
        }
        
        public function getArticlePeriodic()
        {
            $data = array(
                "start" => date('Y-m-d', strtotime($this->uri->segment(4))),
                "end" => date('Y-m-d', strtotime($this->uri->segment(5)))
            );

            $data = $this->ArticleModel->rank_periodic($data)->result_array();

            echo json_encode(array(
                "data"    => $data,
                "success"   => true,
                "status"    => 200
            ));
        }
        
        public function getArticleMonth()
        {
            $bulan = $this->uri->segment(4);

            $data = $this->ArticleModel->rank_month($bulan)->result_array();

            echo json_encode(array(
                "data"    => $data,
                "success"   => true,
                "status"    => 200
            ));
        }

        public function getArticleYear()
        {
            $tahun = $this->uri->segment(4);

            $data = $this->ArticleModel->rank_year($tahun)->result_array();

            echo json_encode(array(
                "data"    => $data,
                "success"   => true,
                "status"    => 200
            ));
        }
    }
    
    /* End of file Webservice.php */
    
?>