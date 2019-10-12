<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class KecamatanModel extends CI_Model {
    
        public function read()
        {
            return $this->db->get('tb_kecamatan');
        }
    
    }
    
    /* End of file KecamatanModel.php */
    
?>