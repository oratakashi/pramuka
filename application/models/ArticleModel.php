<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class ArticleModel extends CI_Model {
    
        public function read()
        {
            $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_artikel.id_kategori');
            $this->db->join('tb_user', 'tb_user.id_user = tb_artikel.id_user');
            return $this->db->get_where('tb_artikel', array('status !=' => 2));
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
    }
    
    /* End of file ArticleModel.php */
    
?>