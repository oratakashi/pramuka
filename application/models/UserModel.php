<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function login($data)
    {
        return $this->db->get_where('tb_user', $data);
    }

}

/* End of file AdminModel.php */
?>