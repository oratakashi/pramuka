<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Slider extends CI_Controller {
        
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('SliderModel');
            $this->load->model('VisiModel');
            $this->load->model('MisiModel');
        }
        

        public function index()
        {
            if(!empty($this->session->userdata('id_user'))){
                if($this->uri->segment(2) == "slider.html"){
                    redirect('admin/informasi.html','refresh');
                }
                $data_slider = $this->SliderModel->read()->result_array();
                $data_visi = $this->VisiModel->read()->result_array();
                $data_misi = $this->MisiModel->read()->result_array();
                $data = array(
                    'content'       => 'slider',
                    'data'          => $data_slider,
                    'data_visi'     => $data_visi,
                    'data_misi'     => $data_misi
                );
                view('backend/information', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_create_slider()
        {
            if(!empty($this->session->userdata('id_user'))){
                if($this->uri->segment(2) == "slider"){
                    redirect('admin/informasi/create.html','refresh');
                }
                $data = array(
                    'content'   => 'slider'
                );
                view('backend/slider_create', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_create_visi()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'   => 'slider'
                );
                view('backend/visi_create', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_update_visi()
        {
            if(!empty($this->session->userdata('id_user'))){
                $url = explode('.', $this->uri->segment(3));
                $id = $url[0];

                $data_visi = $this->VisiModel->read_id($id)->row_array();
                
                $data = array(
                    'content'       => 'slider',
                    'data'     => $data_visi
                );

                view('backend/visi_edit', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_create_misi()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'   => 'slider'
                );
                view('backend/misi_create', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_update_misi()
        {
            if(!empty($this->session->userdata('id_user'))){
                $url = explode('.', $this->uri->segment(3));
                $id = $url[0];

                $data_misi = $this->MisiModel->read_id($id)->row_array();
                
                $data = array(
                    'content'       => 'slider',
                    'data'     => $data_misi
                );

                view('backend/misi_edit', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }
        
        /**
         * Action Section
         */

        public function create_slider()
        {
            if(!empty($this->session->userdata('id_user'))){
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    if($_FILES['photo']['error'] === UPLOAD_ERR_OK){
                        
                        $config['upload_path']          = './media/slider/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
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

        public function delete_slider()
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

        public function create_visi()
        {
            /**
             * Jika Status 1 Maka Aktif Jika Status 0 Maka Tidak Aktif
             * Default jika buat baru otomatis aktif
             */
            if(!empty($this->session->userdata('id_user'))){
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $data = array(
                        "judul_visi" => $this->input->post('judul'),
                        "isi_visi" => $this->input->post('isi'),
                        "id_user" => $this->session->userdata('id_user'),
                        "status" => 1,
                    );
                    $this->VisiModel->create($data);
                    redirect('admin/informasi.html','refresh');
                }else{
                    redirect('admin/informasi.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function visi_status()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id = $this->uri->segment(3); 
                    if ($this->uri->segment(4)=='activated.aspx') {
                        // $status = 1;
                        $data = array(
                            "status" => '1'
                        );
                    } else {
                        // $status = 0;
                        $data = array(
                            "status" => '0'
                        );
                    }
                    $this->VisiModel->change_status($id, $data);
                    redirect('admin/informasi.html','refresh');
                }else{
                    redirect('admin/informasi.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function visi_delete()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id = $this->uri->segment(3);

                    $this->VisiModel->delete($id);

                    redirect('admin/informasi.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function visi_update()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id = $this->uri->segment(3);

                    $data = array(
                        "judul_visi" => $this->input->post('judul'),
                        "isi_visi" => $this->input->post('isi')
                    );

                    $this->VisiModel->update($id, $data);

                    redirect('admin/informasi.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function create_misi()
        {
            /**
             * Jika Status 1 Maka Aktif Jika Status 0 Maka Tidak Aktif
             * Default jika buat baru otomatis aktif
             */
            if(!empty($this->session->userdata('id_user'))){
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $data = array(
                        "judul_misi" => $this->input->post('judul'),
                        "isi_misi" => $this->input->post('isi'),
                        "id_user" => $this->session->userdata('id_user'),
                        "status" => 1,
                    );
                    $this->MisiModel->create($data);
                    redirect('admin/informasi.html','refresh');
                }else{
                    redirect('admin/informasi.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function misi_status()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id = $this->uri->segment(3); 
                    if ($this->uri->segment(4)=='activated.aspx') {
                        // $status = 1;
                        $data = array(
                            "status" => '1'
                        );
                    } else {
                        // $status = 0;
                        $data = array(
                            "status" => '0'
                        );
                    }
                    $this->MisiModel->change_status($id, $data);
                    redirect('admin/informasi.html','refresh');
                }else{
                    redirect('admin/informasi.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function misi_delete()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id = $this->uri->segment(3);

                    $this->MisiModel->delete($id);

                    redirect('admin/informasi.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function misi_update()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id = $this->uri->segment(3);

                    $data = array(
                        "judul_misi" => $this->input->post('judul'),
                        "isi_misi" => $this->input->post('isi')
                    );

                    $this->MisiModel->update($id, $data);

                    redirect('admin/informasi.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }
    }
    
    /* End of file Slider.php */
    
?>