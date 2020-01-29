<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class MisiModel extends CI_Model {
    
        public function create($data)
        {
            return $this->db->insert('tb_misi', $data);
        }

        public function read()
        {
            $this->db->join('tb_user', 'tb_misi.id_user = tb_user.id_user');
            $this->db->order_by('tb_misi.date_created', 'desc');
            return $this->db->get('tb_misi');
        }

        public function read_aktif()
        {
            $this->db->where('tb_misi.status', 1);
            $this->db->join('tb_user', 'tb_misi.id_user = tb_user.id_user');
            $this->db->order_by('tb_misi.date_created', 'desc');
            return $this->db->get('tb_misi');
        }

        public function read_id($id)
        {
            $this->db->join('tb_user', 'tb_misi.id_user = tb_user.id_user');
            $this->db->order_by('tb_misi.date_created', 'desc');
            $this->db->where('tb_misi.id_misi', $id);
            return $this->db->get('tb_misi');
        }

        public function change_status($id, $data)
        {
            $this->db->where('id_misi', $id);
            return $this->db->update('tb_misi', $data);
        }

        public function delete($id)
        {
            $this->db->where('id_misi', $id);
            return $this->db->delete('tb_misi');
        }

        public function update($id, $data)
        {
            $this->db->where('id_misi', $id);
            return $this->db->update('tb_misi', $data);
        }
    }
    
    /* End of file MisiModel.php */
    
?>