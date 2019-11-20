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
    }
    
    /* End of file SongModel.php */
    
?>