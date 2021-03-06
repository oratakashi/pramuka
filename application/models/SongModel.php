<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class SongModel extends CI_Model {
    
        public function create($data)
        {
            return $this->db->insert('tb_lagu', $data);
        }
        
        public function read()
        {
            $this->db->join('tb_user', 'tb_lagu.id_user = tb_user.id_user', 'left');
            $this->db->order_by('tb_lagu.date_created', 'desc');
            return $this->db->get('tb_lagu');
        }

        public function read_id($id_lagu)
        {
            $this->db->where('id_lagu', $id_lagu);
            return $this->db->get('tb_lagu');
        }

        public function delete($id_lagu)
        {
            $this->db->where('id_lagu', $id_lagu);
            return $this->db->delete('tb_lagu');
        }

        public function download($id_lagu)
        {
            return $this->db->query("UPDATE tb_lagu set total_download = total_download+1 where id_lagu = '$id_lagu'");
        }

        public function search($limit, $start, $keyword)
        {
            $this->db->join('tb_user', 'tb_lagu.id_user = tb_user.id_user', 'left');
            $this->db->like('tb_lagu.nama_file', $keyword);
            $this->db->order_by('tb_lagu.date_created', 'asc');
            return $this->db->get('tb_lagu', $limit, $start);
        }
    }
    
    /* End of file SongModel.php */
    
?>