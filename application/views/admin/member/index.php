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
    <h1><i class="fa fa-address-card-o"></i> Data Member</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Data Member</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Member</h3>
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('admin/member/tambah'); ?>"><i class="fa fa-plus"></i>Member</a></p>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Nama</th>
              <th>E-Mail</th>
              <th>Kampus</th>
              <th>Prodi</th>
              <th>Tahun Lulus</th>
              <th>Photo</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
          <?php
              foreach ($items as $item) {
              ?>
              <tr>
                <td><?php echo $item->nama; ?></td>
                <td><?php echo $item->email; ?></td>
                <td><?php echo $item->kampus; ?></td>
                <td><?php echo $item->prodi; ?></td>
                <td><?php echo $item->tahun_lulus; ?></td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('admin/member/upload/' . $item->id_user); ?>" data-toggle="tooltip" title="Upload Photo"><i class="fa fa-upload"></i></a>
                  </div>
                </td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('admin/member/cetak/' . $item->id_user); ?>" data-toggle="tooltip" title="Cetak Kartu"><i class="fa fa-print"></i></a>
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
    alert('Email Sudah digunakan oleh akun lain, Silahkan Gunakan E-Mail berbeda !!');
    </script>
  <?php
}
?>