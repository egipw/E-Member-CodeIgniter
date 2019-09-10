<?php
if ($this->input->get('valid') == '0') {
  ?>
    <script type="text/javascript">
      alert("Username atau Password Salah");
    </script>
  <?php
}
?>



<?php
$now = date('YmdHis');
?>
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
    <title>Aplikasi Laporan Kegiatan Harian OM-Switching Telkom Karitini</title>

    <!-- Favicon -->
     <?php
    if (file_exists('uploads/favicon')) {
      $favicon = 'uploads/favicon';
    } else {
      $favicon = 'assets/favicon.png';
    }
    ?>
    <link rel="shortcut icon" href="<?php echo base_url($favicon) . '?time=' . $now; ?>"/>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">

      <div class="logo" align="center">
        <p><h1>SIPKN</h1></p>
      </div>
      <div class="login-box">
        <form class="login-form" method="post" action="<?php echo base_url('login'); ?>">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" required name="username" id="username" placeholder="Username" autofocus maxlength="6">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" required name="password" id="password" placeholder="Password">
          </div>
          <br>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
      </div>
      <br><br><br>
      <br><br><br>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/popper.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/main.js"); ?>"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url("assets/js/plugins/pace.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/sweetalert2.all.min.js"></script>

  </body>
</html>
