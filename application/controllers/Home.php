<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SliderModel');
        $this->load->model('ArticleModel');
        $this->load->model('UserModel');
        $this->load->model('PengurusModel');
        $this->load->model('DocumenModel');
        $this->load->model('InstagramModel');        
    }
    

    public function index()
    {   
        $data_slider = $this->SliderModel->read()->result_array();
        $data_kategori = $this->ArticleModel->read_category()->result_array();
        $data_pengurus = $this->PengurusModel->read()->result_array();
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

    public function pengurus()
    {
        $data_pengurus = $this->PengurusModel->read()->result_array();
        $data_kategori = $this->ArticleModel->read_category()->result_array();
        $data = array(
            "kategori"      => $data_kategori,
            "pengurus"      => $data_pengurus
        );
        view('frontend/pengurus', $data);
    }

    public function documents()
    {
        $data_documents = $this->DocumenModel->read()->result_array();
        $data_kategori = $this->ArticleModel->read_category()->result_array();
        $data = array(
            "kategori"      => $data_kategori,
            "dokumen"      => $data_documents,
            "size"          => $this->hitung_size($data_documents)
        );
        view('frontend/documents', $data);
    }

    public function hitung_size($data)
    {
        $total_size = 0;
        $ext = "";
        foreach($data as $row){
            $total_size += $row['size'] / 1024;
        }
        $total_size = round($total_size, 2);

        if($total_size < 1024){
            $ext = "Mb";
        }elseif($total_size < 1048576){
            $ext = "Gb";
        }else{
            $ext = "Tb";
        }

        return $total_size." ".$ext;
    }
}

/* End of file Home.php */
 ?>