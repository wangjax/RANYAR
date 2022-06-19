<?php 

class Model_kategori extends CI_Model{
    public function data_crewneck(){
       return $this->db->get_where("tb_barang",array('kategori' => 'crewneck'));
    }

    public function data_kaus(){
        return $this->db->get_where("tb_barang",array('kategori' => 'kaus'));
     }
}