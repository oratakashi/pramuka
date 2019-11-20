<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class DocumenModel extends CI_Model {

        public function read()
        {
            $this->db->join('tb_user', 'tb_user.id_user = tb_dokumen.id_user', 'left');
            
            return $this->db->get('tb_dokumen');
        }
    
        public function create($data)
        {
            return $this->db->insert('tb_dokumen', $data);
        }

        public function delete($id_dokumen)
        {
            $this->db->where('id_dokumen', $id_dokumen);
            return $this->db->delete('tb_dokumen');
        }

        public function read_id($id_dokumen)
        {
            $this->db->where('id_dokumen', $id_dokumen);
            return $this->db->get('tb_dokumen');            
        }
        
        public function download($id_dokumen)
        {
            return $this->db->query("UPDATE tb_dokumen set total_download = total_download+1 where id_dokumen = '$id_dokumen'");
        }
    }
    
    /* End of file DocumenModel.php */
    
?>