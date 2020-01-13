<?php
class Product_model extends CI_Model{
 
  function get_product(){
    $result = $this->db->get('barang');
    return $result;
  }

  function save($id_pemasok,$nama_barang,$harga_barang,$stok_barang){
    $data = array(
      'id_pemasok' => $id_pemasok,
      'nama_barang' => $nama_barang,
      'harga_barang' => $harga_barang,
      'stok_barang' => $stok_barang
    );
    $this->db->insert('barang',$data);
  }

  function delete($kode_barang){
    $this->db->where('kode_barang', $kode_barang);
    $this->db->delete('barang');
  }

  function get_product_id($kode_barang){
    $query = $this->db->get_where('barang', array('kode_barang' => $kode_barang));
    return $query;
  }

  function update($kode_barang,$nama_barang,$harga_barang,$stok_barang){
    $data = array(
      'nama_barang' => $nama_barang,
      'harga_barang' => $harga_barang,
      'stok_barang' => $stok_barang
    );
    $this->db->where('kode_barang', $kode_barang);
    $this->db->update('barang', $data);
}
   
}