<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class ProductModel extends CI_Model {

        public function read()
        {
            $this->db->join('tb_user', 'tb_user.id_user = tb_product.id_user', 'left');
            return $this->db->get('tb_product');
        }

        public function __call($name, $arguments)
        {
            if($name === 'read_limit'){
                if(count($arguments) === 2){
                    return $this->db->get('tb_product', $arguments[0], $arguments[1]);
                }elseif(count($arguments) === 3){
                    $this->db->like('nm_product', $arguments[2]);
                    return $this->db->get('tb_product', $arguments[0], $arguments[1]);
                }
            }
        }

        // public function read_limit($limit, $start)
        // {
        //     return $this->db->get('tb_product', $limit, $start);
        // }

        public function read_id($id)
        {
            $this->db->where('id_product', $id);
            return $this->db->get('tb_product');
        }

        public function read_slug($id_product, $slug)
        {
            $this->db->where('slug', $slug);
            $this->db->where('id_product', $id_product);
            return $this->db->get('tb_product');
        }
        
        public function getID()
        {
            $no = 1;
            $id = "";
            while(true){
                if($no < 10){
                    $id = date('Ymd')."000".$no;
                    if($this->cekID($id)){
                        break;
                    }
                }elseif($no < 100){
                    $id = date('Ymd')."00".$no;
                    if($this->cekID($id)){
                        break;
                    }
                }elseif($no < 1000){
                    $id = date('Ymd')."0".$no;
                    if($this->cekID($id)){
                        break;
                    }
                }elseif($no < 10000){
                    $id = date('Ymd').$no;
                    if($this->cekID($id)){
                        break;
                    }
                }else{
                    break;
                }
                $no++;
            }
            return $id;
        }

        public function cekID($id)
        {
            $this->db->where('id_product', $id);
            $id = $this->db->get('tb_product');
            $row = $id->num_rows();

            return $row < 1;
        }
        
        public function create($data)
        {
            return $this->db->insert('tb_product', $data);
        }

        public function delete($id)
        {
            $this->db->where('id_product', $id);
            return $this->db->delete('tb_product');
        }

        public function update($data)
        {
            $this->db->where('id_product', $data['id_product']);
            unset($data['id_product']);
            return $this->db->update('tb_product', $data);
        }
    }
    
    /* End of file ProductModel.php */
    
?>