<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku extends CI_Model {
    // models untuk mengambil data produk dari database
    public function tampil_data(){
        return $this->db->get('data_produk');
    }

    // models untuk mengambil data_user dari database
    public function insertData($tabel, $data){
        $datanich = $this->db->insert($tabel, $data);
        return $datanich;
    }

    public function getData_khusus($tabel, $where){
        $datanich = $this->db->get_where($tabel, $where);
        return $datanich->result_array();
    }

    // models untuk mengambil detail produk dari database
    public function detail_produk($id_produk){
        $result = $this->db->where('id_produk', $id_produk)->get('data_produk');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    // models untuk button tambah ke keranjang - mengambil data produk dari database 
    public function find($id_produk){
        $result = $this->db->where('id_produk', $id_produk)
                            ->limit(1)
                            ->get('data_produk');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    // models untuk menambahkan data alamat dan pembayaran ke dalam database
    public function tambahDataPembayaran($tabel, $data){
        $datapembayaran = $this->db->insert($tabel, $data);
        return $datapembayaran;
    }
}