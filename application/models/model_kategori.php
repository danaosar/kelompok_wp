<?php

class Model_Kategori extends CI_Model{
  public function data_shockbreaker(){
      return $this->db->get_where("tb_barang", array('kategori' => 'shockbreaker'));
    }

    public function data_velg(){
      return $this->db->get_where("tb_barang", array('kategori' => 'velg'));
    }

    public function data_mesin(){
      return $this->db->get_where("tb_barang", array('kategori' => 'mesin'));
    }

    public function data_aksesoris(){
      return $this->db->get_where("tb_barang", array('kategori' => 'aksesoris'));
    }
}