<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class KecamatanModel extends CI_Model {
    
        public function __call($name, $arguments)
        {
            if($name === 'read'){
                if(count($arguments)===0){
                    $this->db->order_by('id_kecamatan', 'asc');
                    return $this->db->get('tb_kecamatan');
                }elseif(count($arguments)===3){
                    $this->db->like('nama_kecamatan', $arguments[2]);
                    return $this->db->get('tb_kecamatan', $arguments[0], $arguments[1]);
                }elseif(count($arguments)===1){
                    $this->db->where('id_kecamatan', $arguments[0]);
                    return $this->db->get('tb_kecamatan');
                }
            }
        }

        public function update($id, $data)
        {
            $this->db->where('id_kecamatan', $id);
            return $this->db->update('tb_kecamatan', $data);
        }
    }
    
    /* End of file KecamatanModel.php */
    
?>