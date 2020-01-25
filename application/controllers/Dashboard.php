<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ArticleModel');
        $this->load->model('UserModel');       
        $this->load->model('DocumenModel'); 
        $this->load->model('SongModel');
        $this->load->model('SliderModel');        
        $this->load->model('ProductModel');        
    }
    

    public function index()
    {
        if(empty($this->session->userdata('id_user'))){
            if($this->uri->segment(2)!='login.html'){
                redirect('admin/login.html');
            }else{
                $data = [
                    'title' => "Login - Pramuka Lumajang Tangguh"
                ];
                view('backend/login', $data);
            }
        }else{
            if($this->uri->segment(2)!='index.html'){
                redirect('admin/index.html');
            }else{
                $data_rank = $this->ArticleModel->rank_dashboard()->result_array();
                $data_user = $this->UserModel->hitung_pengurus()->row_array();
                $data_artikel = $this->ArticleModel->hitung_pending()->row_array();
                $data_document = $this->DocumenModel->read()->result_array();
                $data_lagu = $this->SongModel->read()->result_array();
                $data_slider = $this->SliderModel->read()->result_array();
                $data_product = $this->ProductModel->read_limit(0, 5)->result_array();
                $jml_article = $this->ArticleModel->hitung_jml($this->session->userdata('id_user'))->row_array();
                $data = array(
                    "slider"        => $data_slider,
                    'content'   => 'dashboard',
                    'rank'      => $data_rank,
                    'user'      => $data_user['jml'],
                    'pending'   => $data_artikel['jml'],
                    'jml_post'      => $jml_article['jml'],
                    'product'   => $data_product,
                    'size_doc'  => $this->hitung_size($data_document),
                    'size_song' => $this->hitung_size($data_lagu)
                );
                view('backend/dashboard', $data);
            }
        }
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

    public function view_summary()
    {
        if(!empty($this->session->userdata('id_user'))){
            if($this->session->userdata('lev_user') == 'Administrator'){
                $data_rank = $this->ArticleModel->rank_dashboard()->result_array();
                $data = array(
                    'rank'      => $data_rank,
                    "content"   => 'summary'
                ); 
                view('backend/summary', $data);
            }
        }else{
            redirect('admin/login.html','refresh');
        }
    }
}

/* End of file Dashboard.php */
?>