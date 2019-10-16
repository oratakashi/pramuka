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
    }
    
    /* End of file SongModel.php */
    
?>