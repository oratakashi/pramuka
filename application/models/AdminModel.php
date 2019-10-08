<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function login($data)
    {
        return $this->db->get_where('tb_admin', $data);
    }

}

/* End of file AdminModel.php */
?>