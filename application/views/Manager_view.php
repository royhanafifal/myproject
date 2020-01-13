<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Product List</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
        <h1><center>Product List</center></h1>
      <table class="table table-striped">
        <thead>
          <tr>
          <th scope="col">No</th>
            <th scope="col">Kode Produk</th>
            <th scope="col">Id Pemasok</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($barang->result() as $row) :
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->kode_barang;?></td>
            <td><?php echo $row->id_pemasok;?></td>
            <td><?php echo $row->nama_barang;?></td>
            <td><?php echo number_format($row->harga_barang);?></td>
            <td><?php echo $row->stok_barang;?></td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
    </div>
    <a href="<?php echo site_url('login/logout');?>" class="btn btn-sm btn-danger">Logout</a>

    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
