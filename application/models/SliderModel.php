<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class SliderModel extends CI_Model {
    
        public function read()
        {
            return $this->db->get('tb_slider');
        }

        public function read_id($id)
        {
            $this->db->where('id_slider', $id);
            return $this->db->get('tb_slider');
        }

        public function create($data)
        {
            return $this->db->insert('tb_slider', $data);
        }

        public function delete($id)
        {
            $this->db->where('id_slider', $id);
            return $this->db->delete('tb_slider');
        }
    }
    
    /* End of file SliderModel.php */
    
?>