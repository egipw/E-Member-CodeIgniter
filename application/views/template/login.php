 <?php $flashdata = $this->session->flashdata('data'); ?>
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
    <title><?php echo "Sistem Informasi Praktek Kerja Nyata"; ?></title>

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
    <div class="logo">
      <h1><?php echo "E-Member Pusat Karir"; ?></h1>
    </div>

    <div class="col-md-4">
      <div class="tile"><br>
        <center><h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3></center><br>
        <div class="tile-body">
      <form class="login-form" method="post" action="<?php echo base_url('welcome/login'); ?>">
        <div class="form-group">
          <label class="control-label">E-Mail</label>
          <input class="form-control" type="text" required name="email" value="<?php echo $flashdata['email']; ?>" placeholder="E-Mail" autofocus>
        </div>
        <div class="form-group">
          <label class="control-label">Password</label>
          <input class="form-control" type="password" required name="password" placeholder="Password">
        </div>
        <br>
        <div class="form-group btn-container">
          <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button> 

          <a class="btn btn-success btn-block" href="<?php echo base_url('auth/register'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Register</a>

          <a class="btn btn-warning btn-block" href="<?php echo base_url('auth/lupa_password'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Lupa Password</a>
        </div>
      </form>
    </div>

  </section>

    <!-- Essential javascripts for application to work-->
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
if ($flashdata != null) {
  $this->pustaka->swal3($flashdata['header'], $flashdata['pesan'], $flashdata['status']);
}
?>

<script type="text/javascript">
$('form').submit(function(e) {
  e.preventDefault();
  
  $.ajax({
    url: "<?php echo base_url('welcome/login'); ?>",
    type: 'post',
    data: $('form').serialize(),
    success: function(respone){ 
      respon = JSON.parse(respone);

      if (respon.login == true) {
        window.location = "<?php echo base_url(); ?>";
      } else {
        swal(respon.header, respon.pesan, respon.status);
      }
    },
    error: function(respone){
      console.log(respone);
    }
  });
});
</script>