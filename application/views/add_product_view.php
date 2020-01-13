<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Add New Product</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container">
      <h1><center>Add New Product</center></h1>
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('product/save');?>" method="post">
          <div class="form-group">
            <label>Id Pemasok</label><br>
            <select name="id_pemasok" id="">
              <option value="1">Unilever</option>
              <option value="2">Indofood</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
          </div>
          <div class="form-group">
            <label>Harga Barang</label>
            <input type="text" class="form-control" name="harga_barang" placeholder="Harga">
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="stok_barang" placeholder="Stok Barang">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>