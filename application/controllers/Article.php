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

                $data_article = null;
                $data = array(
                    'content'   => 'article',
                    'data'      => $data_article
                );

                view('backend/article', $data);
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

                $data_article = null;
                $data = array(
                    'content'   => 'article-pending',
                    'data'      => $data_article
                );

                view('backend/article_preview', $data);
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function view_create()
        {
            if(!empty($this->session->userdata('id_user'))){
                $data = array(
                    'content'   => 'article-add'
                );

                view('backend/article_create', $data);
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

                $data_article = null;
                $data = array(
                    'content'   => 'article',
                    'data'      => $data_article,
                    'id'        => $id_article
                );

                view('backend/article_edit', $data);
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

                $data_article = null;
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

                $data_category = null;
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

                $id_article = $this->ArticleModel->getID();

                # code ...
                
                redirect('admin/article.html','refresh');
                
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
                    $id_article = $this->uri->segment(3);
                    
                    if ($this->uri->segment(4)=='activated.aspx') {
                        $status = 1;
                    } else {
                        $status = 0;
                    }

                    # code ...
                    
                    redirect('admin/article.html','refresh');
                }
            }else{
                redirect('admin/login.html','refresh');
            }
        }

        public function delete_category()
        {
            if(!empty($this->session->userdata('id_user'))){
                if(!empty($this->uri->segment(5))){
                    $id_kategori = $this->uri->segment(4);

                    # code ...
                    
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

                redirect('admin/article/categories.html','refresh');
            }else{
                redirect('admin/login.html','refresh');
            }
        }
    }
    
    /* End of file Article.php */
    
?>