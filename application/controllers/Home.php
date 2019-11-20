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
        $this->load->model('ProductModel');
        $this->load->model('SongModel');
        $this->load->model('InstagramModel');  
        
        $this->load->library('pagination');
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

    public function song()
    {
        $data_song = $this->SongModel->read()->result_array();
        $data_kategori = $this->ArticleModel->read_category()->result_array();
        $data = array(
            "kategori"      => $data_kategori,
            "song"          => $data_song,
            "size"          => $this->hitung_size($data_song)
        );
        view('frontend/song', $data);
    }

    public function store()
    {   
        if(empty($this->uri->segment(2))){
            if($this->uri->segment(1) == 'stores'){
                redirect('stores.html','refresh');
            }
        }
        $data_kategori = $this->ArticleModel->read_category()->result_array();

        $data = array(
            "kategori"      => $data_kategori
        );

        //konfigurasi pagination
        $config['base_url'] = site_url('stores'); //site url
        $config['total_rows'] = $this->db->count_all('tb_product'); //total row
        $config['per_page'] = 6;  //show record per halaman
        $config["uri_segment"] = 2;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['next_link']        = '<li>Next &raquo;</li>';
        $config['prev_link']        = '<li>&laquo; Previous</li>';
        $config['full_tag_open']    = '<div class="pagination-container"><ul class="pagination" role="menubar" aria-label="Pagination">';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li class="">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="current"><a href="#">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li class="">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;   
        
        $data['product'] = $this->ProductModel->read_limit($config['per_page'], $data['page'])->result_array();
         
        $data['pagination'] = $this->pagination->create_links();
        
        view('frontend/store', $data);
    }

    /**
     * Action Section
     */

    public function download_doc()
    {
        if(!empty($this->uri->segment(3))){
            $id_document = $this->uri->segment(2);

            $data_documents = $this->DocumenModel->read_id($id_document)->row_array();
            
            $this->DocumenModel->download($id_document);

            
            redirect('media/files/'.$data_documents['nama_file'],'refresh');
            
        }else{
            redirect('documents.html','refresh');
        }
    }

    public function download_song()
    {
        if(!empty($this->uri->segment(3))){
            $id_lagu = $this->uri->segment(2);

            $data_song = $this->SongModel->read_id($id_lagu)->row_array();
            
            $this->SongModel->download($id_lagu);

            
            redirect('media/music/'.$data_song['nama_file'],'refresh');
            
        }else{
            redirect('song.html','refresh');
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
}

/* End of file Home.php */
 ?>