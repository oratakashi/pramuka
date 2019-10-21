<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class ArticleModel extends CI_Model {
    
        public function read()
        {
            # code...
        }

        public function create($data)
        {
            # code...
        }

        public function read_id($id)
        {
            # code...
        }

        public function update($data, $id)
        {
            # code...
        }

        public function change_status($id, $status)
        {
            # code...
        }

        public function getID()
        {
            $no = 1;
            $id = "";
            while(true){
                if($no < 10){
                    $id = date('ym').'0000'.$no;
                    if($this->cekID($id)){
                        break;
                    }
                }elseif($no < 100){
                    $id = date('ym').'000'.$no;
                    if($this->cekID($id)){
                        break;
                    }
                }elseif($no < 1000){
                    $id = date('ym').'00'.$no;
                    if($this->cekID($id)){
                        break;
                    }
                }elseif($no < 10000){
                    $id = date('ym').'0'.$no;
                    if($this->cekID($id)){
                        break;
                    }
                }elseif($no < 100000){
                    $id = date('ym').$no;
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
            $this->db->where('id_artikel', $id);
            $id = $this->db->get('tb_artikel');
            $row = $id->num_rows();
            
            return $row < 1;
        }

        public function create_category($data)
        {
            # code...
        }
        
        public function read_category()
        {
            # code...
        }

        public function delete_category($id)
        {
            # code...
        }
    }
    
    /* End of file ArticleModel.php */
    
?>