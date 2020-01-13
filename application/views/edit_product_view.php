<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Product</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container">
      <h1><center>Edit Product</center></h1>
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('product/update');?>" method="post">
          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang;?>" placeholder="Nama Barang">
          </div>
          <div class="form-group">
            <label>Harga Barang</label>
            <input type="text" class="form-control" name="harga_barang" value="<?php echo $harga_barang;?>" placeholder="Harga">
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="stok_barang" value="<?php echo $stok_barang;?>" placeholder="Stok Barang">
          </div>
          <input type="hidden" name="kode_barang" value="<?php echo $kode_barang?>">
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>