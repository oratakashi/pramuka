<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Article extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ArticleModel');
        }
        
        /**
         * UI Section
         */

        public function index()
        {
            if(!empty($this->session->userdata('id_user'))){
                /**
                 * Juguk Data ne soko model
                 * terus di lebok e ng variabel data_article
                 * 
                 * Data ne mung status e 1 karo 0, status 2 ora d tampilke
                 */
                if($this->session->userdata('lev_user')=='Administrator'){
                    $data_article = $this->ArticleModel->read()->result_array();
                }else{
                    $data_article = $this->ArticleModel->read($this->session->userdata('id_user'))->result_array();
                }
                $data = array(
                    'content'   => 'article',
                    'data'      => $data_article
                );
                if($this->session->userdata('lev_user') == 'Administrator'){
                    view('backend/article', $data);
                }elseif($this->session->userdata('lev_user') == 'Pengurus'){
                    view('backend/pengurus/article', $data);
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function preview()
        {
            if(!empty($this->session->userdata('id_user'))){
                /**
                 * Juguk Data ne soko model
                 * terus di lebok e ng variabel data_article
                 */
 
                $url = explode('.', $this->uri->segment(3));
                $id_artikel = $url[0];
        
                $data_article = $this->ArticleModel->read_id($id_artikel)->row_array();
                
                $data = array(
                    'content'   => 'article-pending',
                    'data_article'      => $data_article
                );

                view('backend/article_preview', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_create()
        {
            if(!empty($this->session->userdata('id_user'))){ 
                $data_kategori = $this->ArticleModel->read_category()->result_array();
                $data = array(
                    "content"   => 'article-add',
                    "data_kat" => $data_kategori
                ); 
                if($this->session->userdata('lev_user') == 'Administrator'){
                    view('backend/article_create', $data);
                }elseif($this->session->userdata('lev_user') == 'Pengurus'){
                    view('backend/pengurus/article_create', $data);
                }
            }else{
                redirect('admin/login.html','refresh');
            }

        }

        public function view_update()
        {
            if(!empty($this->session->userdata('id_user'))){
                /**
                 * Juguk Data ne soko model
                 * terus di lebok e ng variabel data_article
                 */

                $url = explode('.', $this->uri->segment(3));
                $id_article = $url[0];

                $data_article = $this->ArticleModel->read_id($id_article)->row_array();
                $data_kategori = $this->ArticleModel->read_category()->result_array();

                $data = array(
                    'content'   => 'article',
                    'artikel'   => $data_article,
                    'kategori'  => $data_kategori,
                    'id'        => $id_article
                ); 
                
                if($this->session->userdata('lev_user')=='Administrator'){
                    view('backend/article_edit', $data);
                }elseif($this->session->userdata('lev_user') == 'Pengurus'){
                    view('backend/pengurus/article_edit', $data);
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_pending()
        {
            if(!empty($this->session->userdata('id_user'))){
                /**
                 * Juguk Data ne soko model
                 * terus di lebok e ng variabel data_article
                 * 
                 * Data ne mung status 2 (pending) seng d tampilke
                 */


                $data_article = $this->ArticleModel->read_pending()->result_array();
                $data = array(
                    'content'   => 'article-pending',
                    'data'      => $data_article
                );

                view('backend/article_pending', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function categories()
        {
            if(!empty($this->session->userdata('id_user'))){
                /**
                 * Juguk Data ne soko model
                 * terus di lebok e ng variabel data_category
                 * 
                 * Data ne mung status 2 (pending) seng d tampilke
                 */

                $data_category = $this->ArticleModel->read_category()->result_array();

                // $data_category = null;
                $data = array(
                    'content'   => 'categories',
                    'data'      => $data_category
                );

                view('backend/article_categories', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_category_create()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'   => 'categories'
                );

                view('backend/article_categories_create', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        /**
         * Action Section
         */

        public function create()
        {
            if(!empty($this->session->userdata('id_user'))){
                
                /**
                 * Di kei if , 
                 * nek sesion lev_user e Administrator : status e langsung 1 (aktif)
                 * nek sesion lev_user e Pengurus      : status e 2 (Pending) 
                 */

                $lev_user = $this->session->userdata('lev_user'); 
                if($lev_user == "Administrator"){
                    $status_artikel = 1;
                }elseif($lev_user == "Pengurus") {
                    $status_artikel = 2;
                }
                $id_article = $this->ArticleModel->getID();  
                # code ...
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $photo = "";
                    if($_FILES['photo']['error'] === UPLOAD_ERR_OK){
                        $photo = $this->input->post('id_artikel');
                        
                        $config['upload_path']          = './media/article/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['overwrite']            = true;
                        $config['file_name']            = time();
                        
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
                        $photo = "no-image.jpg";
                    }
        
                    $data = array(
                        "id_artikel" => $id_article,
                        "id_user" => $this->session->userdata('id_user'),
                        "id_kategori" => $this->input->post('kategori'),
                        "judul" => $this->input->post('judul'),
                        "artikel" => $this->input->post('isi_artikel'), 
                        "tgl_post" => date('Y-m-d H:i:s'),
                        "status" => $status_artikel,
                        "slug" => slug($this->input->post('judul')),
                        "foto_header" => $photo
                    );
                    // var_dump($data);die;
         
                    $this->ArticleModel->create($data);
                    if($this->session->userdata('lev_user') == 'Administrator'){
                        redirect('admin/article.html','refresh');
                    }elseif($this->session->userdata('lev_user') == 'Pengurus'){
                        redirect('pengurus/article.html','refresh');
                    }
                    
                    
                } 
            }else{
                redirect('admin/login.html','refresh');
            }
            
        }

        public function update()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id_article = $this->uri->segment(3);

                    # code ... 
                    $data_artikel = $this->ArticleModel->read_id($id_article)->row_array();
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        $photo = "";
                        if($_FILES['photo']['error'] === UPLOAD_ERR_OK){ 
                            
                            $config['upload_path']          = './media/article/';
                            $config['allowed_types']        = 'gif|jpg|png|jpeg';
                            $config['overwrite']            = true;
                            $config['file_name']            = time();
                            
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
                            $photo = $data_artikel['foto_header'];
                        }
            
                        $data = array(
                            "id_artikel" => $id_article,
                            "id_user" => $this->session->userdata('id_user'),
                            "id_kategori" => $this->input->post('kategori'),
                            "judul" => $this->input->post('judul'),
                            "artikel" => $this->input->post('isi_artikel'), 
                            "slug" => slug($this->input->post('judul')),
                            "foto_header" => $photo
                        ); 

                        $this->ArticleModel->update($data, $id_article);

                        if($this->session->userdata('lev_user') == 'Administrator'){
                            redirect('admin/article.html','refresh');
                        }elseif($this->session->userdata('lev_user') == 'Pengurus'){
                            redirect('pengurus/article.html','refresh');
                        }
                        
                    } 
                    
                    redirect('admin/article.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function delete()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(4))){
                    $id_article = $this->uri->segment(3);

                    # code ... 

                    $this->ArticleModel->delete($id_article); 
                    redirect('admin/article.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }
        
        public function status()
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
                     
                    $this->ArticleModel->change_status($id, $data);

                    if($this->session->userdata('lev_user') == 'Administrator'){
                        redirect('admin/article.html','refresh');
                    }elseif($this->session->userdata('lev_user') == 'Pengurus'){
                        redirect('pengurus/article.html','refresh');
                    }
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function delete_category()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(5))){
                    // $id_kategori = $this->uri->segment(4);

                    # code ... 
                    $url = explode('.', $this->uri->segment(4));
                    $id_kategori = $url[0];
    
                    $this->ArticleModel->delete_category($id_kategori);
                    
                    redirect('admin/article/categories.html','refresh'); 
                 } 
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function create_category()
        {
            if(!empty($this->session->userdata('id_user'))){
                /**
                 * ID Kategori auto increment
                 */


                # code ...
                if($_SERVER['REQUEST_METHOD']=='POST'){ 
        
                    $data = array( 
                        "nm_kategori" => $this->input->post('nm_kategori',TRUE),
                        "slug" => $this->input->post('nm_kategori',TRUE) 
                    );
        
                    $this->ArticleModel->create_category($data);
                    redirect('admin/article/categories.html','refresh'); 
                }

                redirect('admin/article/categories.html','refresh');
            }else{
                redirect('admin/login.html','refresh');
            }
        }
    }
    
    /* End of file Article.php */
    
?>