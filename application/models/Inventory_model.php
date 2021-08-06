<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model {


    public function select(){
        $this->db->select('*');
        $this->db->from('produk');
        $result = $this->db->get();

        return $result->result_array();
    }

    public function selectById($id_barang){
        $this->db->from('produk');
        $this->db->where('Id', $id_barang);
        $result = $this->db->get();

        return $result->result_array();
    }

    public function selectByNama($nama_barang){
        $this->db->from('produk');
        $this->db->where('Nama_barang', $nama_barang);
        $result = $this->db->get();

        return $result->result_array();
    }

    public function add($data){
        $query = $this->db->insert('produk', $data);

        if($query){
            return true;
        }else{
            return false;
        }
    }  

    public function update($id_barang,$data){
        $this->db->where('Id', $id_barang);
        $query = $this->db->update('produk', $data);

        if($query){
            return true;
        }else{
            return false;
        }
    }  
}
