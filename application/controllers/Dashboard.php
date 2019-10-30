<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ArticleModel');
        $this->load->model('UserModel');        
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
                $data = array(
                    'content'   => 'dashboard',
                    'rank'      => $data_rank,
                    'user'      => $data_user['jml']
                );
                view('backend/dashboard', $data);
            }
        }        
    }

}

/* End of file Dashboard.php */
?>