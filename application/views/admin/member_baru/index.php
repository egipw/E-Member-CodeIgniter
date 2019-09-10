<?php
switch ($this->session->level) {
  case 1:
    $level = "Admin";
    break;
  
  default:
    redirect(base_url(''));
    break;
}
?>
<div class="app-title">
  <div>
    <h1><i class="fa fa-address-book-o"></i> Data Member Baru</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Data Member Baru</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Member Baru</h3>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Nama</th>
              <th>E-Mail</th>
              <th>Kampus</th>
              <th>Prodi</th>
              <th>Tahun Lulus</th>
              <th>Pembayaran</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
          <?php
              foreach ($items as $item) {
              ?>

              <?php
            if (file_exists('uploads/buktibayar/temp/' . $item->id_user)) {
              $userimage = 'uploads/buktibayar/temp/' . $item->id_user;
            } else {
              $userimage = 'assets/user.png';
            }
            ?>

              <tr>
                <td><?php echo $item->nama; ?></td>
                <td><?php echo $item->email; ?></td>
                <td><?php echo $item->kampus; ?></td>
                <td><?php echo $item->prodi; ?></td>
                <td><?php echo $item->tahun_lulus; ?></td>
                <td>
                  <img  src="<?php echo base_url($userimage) ?>" width="64">    
                </td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('admin/member_baru/verifikasi/' . $item->id_user); ?>" data-toggle="tooltip" title="Verifikasi"><i class="fa fa-edit"></i></a>
                  </div>
                </td>
              </tr>
          <?php
          }
        ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php
if ($this->input->get('error') == 2) {
  ?>
  <script type="text/javascript">
    alert('Program Studi Yang Diinputkan Sudah Ada !!');
    </script>
  <?php
}
?>