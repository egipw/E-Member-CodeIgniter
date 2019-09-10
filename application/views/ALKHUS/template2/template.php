<?php
$now = date('YmdHis');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
  <body class="app sidebar-mini rtl">
    <div class="wrapper">

      <!-- Main Header -->
          <header class="app-header"><a class="app-header__logo" href="<?php echo base_url(); ?>"><?php echo "SIPKN" ?></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->

      <!-- Disini 1-->

    </header>

   
      
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <?php
      if (file_exists('uploads/userimage/' . $this->session->id)) {
        $userimage = 'uploads/userimage/' . $this->session->id;
      } else {
        $userimage = 'assets/user.png';
      }
      ?>
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo base_url($userimage) . '?time=' . $now; ?>" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $this->session->nama; ?></p>
           <p class="app-sidebar__user-designation"><?php echo $this->session->username; ?></p>
          <?php
                // switch ($this->session->level) {
                //   case 1:
                //     $level = "Manajer";
                //     break;

                //   case 2:
                //     $level = "Karyawan";
                //     break;

                //   case 4:
                //     $level = "Admin";
                //     break;
                  
                //   default:
                //     redirect(base_url(''));
                //     break;
                // }
                ?>
          <p class="app-sidebar__user-name">[<?php //echo $level; ?>]</p>

         
        </div>
      </div>

      <ul class="app-menu">
      
    <?php
    
    // switch ($this->session->level) {
    //   case '1':
    //     $this->load->view('template/menu_manajer');
    //     break;
      
    //   case '2':
    //     $this->load->view('template/menu_karyawan');
    //     break;
      
    //   case '4':
    //     $this->load->view('template/menu_admin');
    //     break;
      
    //   default:
    //     redirect(base_url('logout'));
    //     break;
    // }

    ?>
      
  </ul>
    </aside>

   </aside>
    <main class="app-content">
        <?php isset($data) ?  $this->load->view($isi,$data) : $this->load->view($isi); ?>
    </main>

<!-- Start JS -->
    <script src="<?php echo base_url('assets/'); ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/jquery.vmap.sampledata.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() . "assets/"; ?>timepicker/js/jquery.ui.timepicker.js?v=0.3.3"></script>
    <!-- End JS -->

    <!-- JS Manual -->
    <?php isset($js) ?  $this->load->view($js) : null; ?>

  </body>
</html>