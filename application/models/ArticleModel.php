<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class ArticleModel extends CI_Model {
    
        public function __call($name, $arguments)
        {
            if($name === 'read_limit'){
                if(count($arguments)===2){
                    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_artikel.id_kategori', 'left');
                    $this->db->join('tb_user', 'tb_user.id_user = tb_artikel.id_user', 'left');
                    $this->db->order_by('tb_artikel.tgl_post', 'desc');
                    $this->db->where('tb_artikel.status != 2');
                    
                    
                    $this->db->select('tb_artikel.*, tb_kategori.nm_kategori, tb_user.*, tb_kategori.slug as slug_kategori');
                    return $this->db->get('tb_artikel', $arguments[0], $arguments[1]);
                }elseif(count($arguments)===3){
                    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_artikel.id_kategori', 'left');
                    $this->db->join('tb_user', 'tb_user.id_user = tb_artikel.id_user', 'left');
                    $this->db->order_by('tb_artikel.tgl_post', 'desc');
                    $this->db->like('tb_artikel.judul', $arguments[2]);
                    $this->db->select('tb_artikel.*, tb_kategori.nm_kategori, tb_user.*, tb_kategori.slug as slug_kategori');
                    $this->db->where('tb_artikel.status != 2');
                    return $this->db->get('tb_artikel', $arguments[0], $arguments[1]);
                }
            }elseif($name === 'read_category_limit'){
                $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_artikel.id_kategori', 'left');
                $this->db->join('tb_user', 'tb_user.id_user = tb_artikel.id_user', 'left');
                $this->db->order_by('tb_artikel.tgl_post', 'desc');
                $this->db->select('tb_artikel.*, tb_kategori.nm_kategori, tb_user.*, tb_kategori.slug as slug_kategori');
                $this->db->where('tb_artikel.id_kategori', $arguments[2]);
                $this->db->where('tb_artikel.status != 2');
                
                return $this->db->get('tb_artikel', $arguments[0], $arguments[1]);
            }elseif($name === 'read'){
                if(count($arguments) === 0){
                    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_artikel.id_kategori');
                    $this->db->join('tb_user', 'tb_user.id_user = tb_artikel.id_user');
                    $this->db->order_by('tb_artikel.tgl_post', 'asc');
                    return $this->db->get_where('tb_artikel', array('status !=' => 2));
                }elseif(count($arguments)===1){
                    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_artikel.id_kategori');
                    $this->db->join('tb_user', 'tb_user.id_user = tb_artikel.id_user');
                    $this->db->order_by('tb_artikel.tgl_post', 'asc');
                    $this->db->where('tb_artikel.id_user', $arguments[0]);
                    
                    return $this->db->get_where('tb_artikel', array('status !=' => 2));
                }
            }
        }

        public function read_pending()
        {
            $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_artikel.id_kategori');
            $this->db->join('tb_user', 'tb_user.id_user = tb_artikel.id_user');
            return $this->db->get_where('tb_artikel', array('status' => 2));
        }

        public function create($data)
        {
            return $this->db->insert('tb_artikel', $data);
        }
        public function delete($id_article)
        {
            $this->db->where('id_artikel', $id_article);
            return $this->db->delete('tb_artikel');
        }

        public function read_id($id)
        {  
            $this->db->where('id_artikel', $id);
            return $this->db->get('tb_artikel');
        } 

        public function read_user($id)
        {
            $this->db->where('tb_artikel.id_user', $id);
            $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_artikel.id_kategori', 'left');
            return $this->db->get('tb_artikel');
        }

        public function update($data, $id)
        { 
            $this->db->where('id_artikel', $data['id_artikel']);
            unset($data['id_artikel']);
            return $this->db->update('tb_artikel', $data);
        }

        public function change_status($id, $data)
        { 
            $this->db->where('id_artikel', $id);
            return $this->db->update('tb_artikel', $data);
        }

        public function getID()
        {
            $no = 1;
            $id = "";
            while(true){
                if($no < 10){
                    $id = date('ym').'000'.$no;
                    if($this->cekID($id)){
                        break;
                    }
                }elseif($no < 100){
                    $id = date('ym').'00'.$no;
                    if($this->cekID($id)){
                        break;
                    }
                }elseif($no < 1000){
                    $id = date('ym').'0'.$no;
                    if($this->cekID($id)){
                        break;
                    }
                }elseif($no < 10000){
                    $id = date('ym').'0'.$no;
                    if($this->cekID($id)){
                        break;
                    }
                }else{
                    break;
                }
                $no++;
            }
            return $id;
        }

        public function cekID($id)
        {
            $this->db->where('id_artikel', $id);
            $id = $this->db->get('tb_artikel');
            $row = $id->num_rows();
            
            return $row < 1;
        }

        public function create_category($data)
        { 
            return $this->db->insert('tb_kategori', $data);
        }
        
        public function read_category()
        { 
            return $this->db->get('tb_kategori');
        }

        public function delete_category($id_kategori)
        { 
            $this->db->where('id_kategori', $id_kategori);
            return $this->db->delete('tb_kategori');
        } 

        public function hitung_jml($id)
        {
            $this->db->where('id_user', $id);
            $this->db->select('count(*) as jml');
            return $this->db->get('tb_artikel');
        }

        public function rank_dashboard()
        {
            $this->db->where('lev_user', "Pengurus");
            $this->db->select('*, (SELECT count(*) from tb_artikel where tb_artikel.id_user=tb_user.id_user and tb_artikel.status = 1) as jml');
            $this->db->order_by('jml', 'desc');
            
            return $this->db->get('tb_user');     
        }

        public function hitung_pending()
        {
            $this->db->where('status', 2);
            $this->db->select('count(*) as jml');
            return $this->db->get('tb_artikel');
        }

        public function rank_periodic($data)
        {
            $this->db->where('tb_user.lev_user', "Pengurus");
            $this->db->select("tb_user.nama, concat((SELECT count(*) from tb_artikel where tb_artikel.id_user=tb_user.id_user and tb_artikel.tgl_post between '".$data['start']."' and '".$data['end']."'), ' Artikel') as jml");
            $this->db->order_by('jml', 'desc');
            
            return $this->db->get('tb_user');
        }

        public function rank_month($bulan)
        {
            $year = date('Y');
            $this->db->where('tb_user.lev_user', "Pengurus");
            $this->db->select("tb_user.nama, concat((SELECT count(*) from tb_artikel where tb_artikel.id_user=tb_user.id_user and MONTH(tb_artikel.tgl_post) = $bulan and YEAR(tb_artikel.tgl_post) = $year), ' Artikel') as jml");
            $this->db->order_by('jml', 'desc');
            
            return $this->db->get('tb_user');
        }

        public function rank_year($tahun)
        {
            $this->db->where('tb_user.lev_user', "Pengurus");
            $this->db->select("tb_user.nama, concat((SELECT count(*) from tb_artikel where tb_artikel.id_user=tb_user.id_user and YEAR(tb_artikel.tgl_post) = $tahun), ' Artikel') as jml");
            $this->db->order_by('jml', 'desc');
            
            return $this->db->get('tb_user');
        }

        public function detail($id_article, $slug)
        {
            $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_artikel.id_kategori', 'left');
            $this->db->join('tb_user', 'tb_user.id_user = tb_artikel.id_user', 'left');
            $this->db->where('tb_artikel.id_artikel', $id_article);
            $this->db->where('tb_artikel.slug', $slug);
            $this->db->select('tb_artikel.*, tb_kategori.nm_kategori, tb_user.*');
            return $this->db->get('tb_artikel');
            
        }
    }
    
    /* End of file ArticleModel.php */
    
?>