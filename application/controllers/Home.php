<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SliderModel');
        $this->load->model('ArticleModel');
        $this->load->model('UserModel');
        $this->load->model('InstagramModel');        
    }
    

    public function index()
    {   
        $data_slider = $this->SliderModel->read()->result_array();
        $data_kategori = $this->ArticleModel->read_category()->result_array();
        $data_pengurus = $this->UserModel->read_pengurus()->result_array();
        $data_instagram = $this->InstagramModel->read();
        $data_profile_ig = $this->InstagramModel->read_profile();
        $data = array(
            "slider"        => $data_slider,
            "kategori"      => $data_kategori,
            "pengurus"      => $data_pengurus,
            "instagram"     => $data_instagram['data'],
            "profile_ig"       => $data_profile_ig['data']
        );
        view('frontend/home', $data);
    }

}

/* End of file Home.php */
 ?>