<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Pengurus extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ArticleModel');
            $this->load->model('UserModel');       
            $this->load->model('DocumenModel'); 
            $this->load->model('SongModel');
            $this->load->model('PengurusModel');            
            $this->load->model('SliderModel');
            
        }

        public function index()
        {
            if(empty($this->session->userdata('id_user'))){
                if($this->uri->segment(2)!='login.html'){
                    redirect('pengurus/login.html');
                }else{
                    $data = [
                        'title' => "Login - Pramuka Lumajang Tangguh"
                    ];
                    view('backend/pengurus/login', $data);
                }
            }else{
                if($this->uri->segment(2)!='index.html'){
                    redirect('pengurus/index.html');
                }else{
                    $data_rank = $this->ArticleModel->rank_dashboard()->result_array();
                    $data_user = $this->UserModel->hitung_pengurus()->row_array();
                    $data_artikel = $this->ArticleModel->hitung_pending()->row_array();
                    $data_document = $this->DocumenModel->read()->result_array();
                    $data_lagu = $this->SongModel->read()->result_array();
                    $data_slider = $this->SliderModel->read()->result_array();
                    $jml_article = $this->ArticleModel->hitung_jml($this->session->userdata('id_user'))->row_array();
                    $data = array(
                        "slider"        => $data_slider,
                        'content'   => 'dashboard',
                        'rank'      => $data_rank,
                        'user'      => $data_user['jml'],
                        'pending'   => $data_artikel['jml'],
                        'jml_post'      => $jml_article['jml'],
                        'size_doc'  => $this->hitung_size($data_document),
                        'size_song' => $this->hitung_size($data_lagu)
                    );
                    view('backend/dashboard', $data);
                }
            }    
        }

        public function read()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data_pengurus = $this->PengurusModel->read()->result_array();
                $data = array(
                    'content'   => 'pengurus',
                    'pengurus'  => $data_pengurus
                );
                view('backend/pengurus', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_create()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'   => 'pengurus'
                );
                view('backend/pengurus_create', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_update()
        {
            if(!empty($this->session->userdata('id_user'))){
                $id_pengurus = $this->uri->segment(3);                
                $data_pengurus = $this->PengurusModel->read_id($id_pengurus)->row_array();
                $data = array(
                    'content'   => 'pengurus',
                    'pengurus'  => $data_pengurus
                );
                view('backend/pengurus_edit', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        /**
         * Action Section
         */
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

        public function create()
        {
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $photo = "";
                if($_FILES['photo']['error'] === UPLOAD_ERR_OK){
                    
                    $config['upload_path']          = './media/pengurus/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
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
                    $photo = "no-pict.png";
                }

                $data = array(
                    "nama"      => $this->input->post('nama'),
                    "jabatan"   => $this->input->post('jabatan'),
                    "photo"     => $photo
                );

                $this->PengurusModel->create($data);

                redirect('admin/pengurus.html','refresh');                
            }
        }

        public function delete()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id_pengurus = $this->uri->segment(3);

                    $data_pengurus = $this->PengurusModel->read_id($id_pengurus)->row_array();
                    if($data_pengurus['photo']!='no-pict.png'){
                        if(file_exists("media/pengurus/".$data_pengurus['photo'])){
                            unlink("media/pengurus/".$data_pengurus['photo']);
                        }
                    }

                    $this->PengurusModel->delete($id_pengurus);

                    
                    redirect('admin/pengurus.html','refresh');
                    
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function update()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $photo = "";

                        $id_pengurus = $this->uri->segment(3);

                        $data_pengurus = $this->PengurusModel->read_id($id_pengurus)->row_array();

                        if($_FILES['photo']['error'] === UPLOAD_ERR_OK){
                            $config['upload_path']          = './media/pengurus/';
                            $config['allowed_types']        = 'gif|jpg|png|jpeg';
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

                                if(file_exists("media/pengurus/".$data_pengurus['photo'])){
                                    unlink("media/pengurus/".$data_pengurus['photo']);
                                }
                            }
                        }else{
                            $photo = $data_pengurus['photo'];
                        }

                        $data = array(
                            "nama"          => $this->input->post('nama'),
                            "jabatan"       => $this->input->post('jabatan'),
                            "photo"         => $photo,
                            "id_pengurus"   => $id_pengurus
                        );

                        $this->PengurusModel->update($data);

                        redirect('admin/pengurus.html','refresh');
                        
                    }
                }
            }
        }
    }
    
    /* End of file Pengurus.php */
    
?>