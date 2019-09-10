<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo "E-Member Pusat Karir"; ?></title>
  </head>

  <body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>

  <section class="login-content">
    <div class="logo">
      <h1><?php echo "E-Member Pusat Karir"; ?></h1>
    </div>

    <div class="col-md-4">
      <div class="tile"><br>
        <center><h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Register</h3></center><br>
        <div class="tile-body">
      <form class="login-form" method="post" action="<?php echo base_url('auth/aksi_tambah'); ?>">
        
        <div class="form-group">
          <label class="control-label">Nama</label>
          <input class="form-control" type="text" required name="nama" placeholder="Nama Lengkap" autofocus>
        </div>

        <div class="form-group">
          <label class="control-label">E-Mail</label>
          <input class="form-control" type="text" required name="email" placeholder="E-Mail" autofocus>
        </div>

        <div class="form-group">
          <label class="control-label">Asal Kampus</label>
          <input class="form-control" type="text" required name="kampus" placeholder="Asal Kampus" autofocus>
        </div>

        <div class="form-group">
          <label class="control-label">Bidang/Program Study</label>
          <input class="form-control" type="text" required name="prodi"  placeholder="Bidang/Program Study" autofocus>
        </div>

        <div class="form-group">
          <label class="control-label">Tahun Lulus</label>
          <input class="form-control" type="number" min="1900" required name="tahun_lulus" placeholder="Tahun Lulus" autofocus>
        </div>

        <div class="form-group">
          <label class="control-label">Password</label>
          <input class="form-control" type="password" required name="password" placeholder="Password" autofocus>
        </div>

        <br>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Register</button> 

          <a class="btn btn-secondary btn-block" href="<?php echo base_url(''); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Halaman Login</a>
        </div>
      </form>
    </div>

  </section>

  <script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/main.js"); ?>"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url("assets/js/plugins/pace.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    </script>
  </body>
</html>




<?php
if ($this->input->get('error') == 1) {
  ?>
  <script type="text/javascript">
    alert('E-Mail Yang Diinputkan Sudah Digunakan Oleh Akun Lain !!');
  </script>
  <?php
}
?>