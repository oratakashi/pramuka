<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SliderModel');
        $this->load->model('ArticleModel');
    }
    

    public function index()
    {   
        $data_slider = $this->SliderModel->read()->result_array();
        $data_kategori = $this->ArticleModel->read_category()->result_array();
        $data = array(
            "slider"        => $data_slider,
            "kategori"      => $data_kategori
        );
        view('frontend/home', $data);
    }

}

/* End of file Home.php */
 ?>