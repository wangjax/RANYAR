<?php

class Model_user extends CI_Model{

    public function tampil_data(){
        return $this->db->get('tb_user');
      }

      public function hapus_user ($where, $table){

        $this->db->where($where);
        $this->db->delete($table);
      }

}