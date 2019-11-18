<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class PengurusModel extends CI_Model {
    
        public function create($data)
        {
            return $this->db->insert('tb_pengurus', $data);
        }
        
        public function read()
        {
            return $this->db->get('tb_pengurus');
        }

        public function read_id($id_pengurus)
        {
            $this->db->where('id_pengurus', $id_pengurus);
            return $this->db->get('tb_pengurus');
        }

        public function delete($id_pengurus)
        {
            $this->db->where('id_pengurus', $id_pengurus);
            return $this->db->delete('tb_pengurus');            
        }

        public function update($data)
        {
            $this->db->where('id_pengurus', $data['id_pengurus']);
            unset($data['id_pengurus']);
            return $this->db->update('tb_pengurus', $data);
        }
    }
    
    /* End of file PengurusModel.php */
    
?>