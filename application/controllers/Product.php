<?php
class Product extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('product_model');
  }

  function index(){
    $data['barang'] = $this->product_model->get_product();
    $this->load->view('product_view',$data);
  }

  function manager_view(){
    $data['barang'] = $this->product_model->get_product();
    $this->load->view('manager_view',$data);
  }

  function add_new(){
    $this->load->view('add_product_view');
  }
  function save(){
    $id_pemasok = $this->input->post('id_pemasok');
    $nama_barang = $this->input->post('nama_barang');
    $harga_barang = $this->input->post('harga_barang');
    $stok_barang = $this->input->post('stok_barang');
    $this->product_model->save($id_pemasok,$nama_barang,$harga_barang,$stok_barang);
    redirect('product');
  }

  function delete(){
    $kode_barang = $this->uri->segment(3);
    $this->product_model->delete($kode_barang);
    redirect('product');
  }

  function get_edit(){
    $kode_barang = $this->uri->segment(3);
    $result = $this->product_model->get_product_id($kode_barang);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'kode_barang'    => $i['kode_barang'],
            'id_pemasok'  => $i['id_pemasok'],
            'nama_barang'  => $i['nama_barang'],
            'harga_barang'     => $i['harga_barang'],
            'stok_barang'  => $i['stok_barang']
        );
        $this->load->view('edit_product_view',$data);
    }else{
        echo "Data Was Not Found";
    }
   }

   function update(){
    $kode_barang = $this->input->post('kode_barang');
    $nama_barang = $this->input->post('nama_barang');
    $harga_barang = $this->input->post('harga_barang');
    $stok_barang = $this->input->post('stok_barang');
    $this->product_model->update($kode_barang,$nama_barang,$harga_barang,$stok_barang);
    redirect('product');
   }

   //INI UNTUK LOGIN

}
