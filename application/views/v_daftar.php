<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?php echo base_url().'login/simpan_user_baru'?>" method="post">
            <h2 class="form-signin-heading">Mendaftar Akun Baru</h2>
            <?php echo $this->session->flashdata('msg');?>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <label for="alamat" class="sr-only">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" required><br>
            <label for="akses" class="sr-only">Jabatan</label>
            <select name="akses">
              <option value="1">Karyawan</option>
              <option value="2">Manager</option>
            </select>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
          </form><br>
        </div>
    </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
