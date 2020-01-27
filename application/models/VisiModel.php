<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class VisiModel extends CI_Model {
    
        public function create($data)
        {
            return $this->db->insert('tb_visi', $data);
        }

        public function read()
        {
            $this->db->join('tb_user', 'tb_visi.id_user = tb_user.id_user');
            $this->db->order_by('tb_visi.date_created', 'desc');
            return $this->db->get('tb_visi');
        }

        public function read_id($id)
        {
            $this->db->join('tb_user', 'tb_visi.id_user = tb_user.id_user');
            $this->db->order_by('tb_visi.date_created', 'desc');
            $this->db->where('tb_visi.id_visi', $id);
            return $this->db->get('tb_visi');
        }

        public function change_status($id, $data)
        {
            $this->db->where('id_visi', $id);
            return $this->db->update('tb_visi', $data);
        }

        public function delete($id)
        {
            $this->db->where('id_visi', $id);
            return $this->db->delete('tb_visi');
        }

        public function update($id, $data)
        {
            $this->db->where('id_visi', $id);
            return $this->db->update('tb_visi', $data);
        }
    }
    
    /* End of file VisiModel.php */
    
?>