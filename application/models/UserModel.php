<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function login($data)
    {
        return $this->db->get_where('tb_user', $data);
    }

    public function read()
    {
        return $this->db->get('tb_user');
    }

}

/* End of file AdminModel.php */
?>