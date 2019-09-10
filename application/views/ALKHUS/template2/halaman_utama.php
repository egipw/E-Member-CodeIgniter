<?php
$now = date('YmdHis');
?>
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Dashboard</li>
  </ul>
</div>
<div class="row">

  <div class="col-md-12 col-lg-4">
    <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
      <div class="info">
        <h4>Jumlah Karyawan</h4>
        <p><b>
          <?php echo $jml_karyawan->num_rows(); ?>
        </b></p>
      </div>
    </div>
        <?php
                switch ($this->session->level) {
                  case 1:
                    $level = "Manajer";
                    break;

                  case 2:
                    $level = "Karyawan";
                    break;

                  case 4:
                    $level = "Admin";
                    break;
                  
                  default:
                    redirect(base_url(''));
                    break;
                }
                ?>
    <h4>Selamat Datang, <font color="red">- <?php echo $level; ?> - </font><?php echo $this->session->nama; ?> !!!</h4>
  </div>
  
  <div class="col-md-12 col-lg-4" >
    <div class="widget-small warning coloured-icon"><i class="icon fa fa-calendar fa-3x"></i>
      <div class="info">
        <h4>Tanggal</h4>
        <p><b><?php echo $this->pustaka->tanggal_indo_string(date('Y-m-d')); ?></b></p>
      </div>
    </div>

  </div>


    <div class="col-md-12 col-lg-4">
    <div>
      <div class="info">
        <img align="right" src="<?php echo base_url("assets/gambar/login.png"); ?>" alt="login" width="80%" height="165px">
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-8">
    <div class="tile">
      <h3 class="tile-title">Grafik Data</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
      </div>
    </div>
  </div>

    <div class="col-md-4">
    <div class="tile">
      <h3 class="tile-title">Profil</h3>
      <div class="">
        <div class="tile-footer">

      <?php
      if (file_exists('uploads/userimage/' . $this->session->id)) {
        $userimage = 'uploads/userimage/' . $this->session->id;
      } else {
        $userimage = 'assets/user.png';
      }
      ?>
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo base_url($userimage) . '?time=' . $now; ?>" alt="User Image">
        <div>
          
          <p class="app-sidebar__user-name">
            <i class="fa fa-user" style="color:red"><font color="#000000"><strong>
              <?php echo $user->nama; ?></strong></font>
            </i>
          </p>

          <p class="app-sidebar__user-name">
            <i class="fa fa-user" style="color:red"><font color="#000000"><strong>
              <?php echo $user->username; ?></strong></font>
            </i>
          </p>

          <p class="app-sidebar__user-name">
            <i class="fa fa-user" style="color:red"><font color="#000000"><strong>
              <?php
                switch ($user->level) {
                  case 1:
                    $level = "Manajer";
                    break;

                  case 2:
                    $level = "Karyawan";
                    break;

                  case 4:
                    $level = "Admin";
                    break;
                  
                  default:
                    redirect(base_url('logout'));
                    break;
                }
                ?>
              <?php echo $level; ?></strong></font>
            </i>
          </p>

          <p class="app-sidebar__user-name">
            <i class="fa fa-phone" style="color:red"><font color="#000000"><strong>
              <?php echo $user->no_hp; ?></strong></font>
            </i>
          </p>

          <p class="app-sidebar__user-name">
            <i class="fa fa-envelope" style="color:red"><font color="#000000"><strong>
              <?php echo $user->email; ?></strong></font>
            </i>
          </p>

  </div>

</div>
          <div class="tile-footer">
            <a href="<?php echo base_url('profil/profil_u'); ?>" class="btn btn-primary"><i class="fa fa-fw fa-lg fa fa-edit"></i>Edit Profil</a>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-primary" href="<?php echo base_url('profil/password_u'); ?>"><i class="fa fa-fw fa-lg fa fa-key"></i>Ganti Password</a>
          </div>
  </div>
</div>
</div>
</div>
      