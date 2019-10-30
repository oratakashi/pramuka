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

    public function read_id($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->get('tb_user');
    }

    public function cekID($id_user)
    {
        $this->db->where('id_user', $id_user);
        $id = $this->db->get('tb_user');
        $row = $id->num_rows();
        
        return $row < 1;
    }

    public function create($data)
    {
        return $this->db->insert('tb_user', $data);
    }

    public function update($data)
    {
        $this->db->where('id_user', $data['id_user']);
        unset($data['id_user']);
        return $this->db->update('tb_user', $data);
    }

    public function delete($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->delete('tb_user');
    }

    public function hitung_pengurus()
    {
        $this->db->where('lev_user', "Pengurus");
        $this->db->select('count(*) as jml');
        return $this->db->get('tb_user');
    }
}

/* End of file AdminModel.php */
?>