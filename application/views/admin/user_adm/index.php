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
    <h1><i class="fa fa-user"></i> User Admin</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">User Admin</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data User Admin</h3>
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('admin/user_adm/tambah'); ?>"><i class="fa fa-plus"></i>User Admin</a></p>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>E-Mail</th>
              <th>Last Login</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
            <?php
             $i=1;
              foreach ($items as $item) {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item->nama; ?></td>
                <td><?php echo $item->email; ?></td>
                <td><?php echo "Last Login"; ?></td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('admin/user_adm/ubah/' . $item->id_user); ?>" data-toggle="tooltip" title="Ubah"><i class="fa fa-edit"></i></a>
                   
                    <a class="btn btn-primary" href="#" onclick="hapus('<?php echo $item->id_user; ?>')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                  </div>
                </td>
              </tr>
            <?php
            $i++;
        }
        ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php
if ($this->input->get('error') == 1) {
  ?>
  <script type="text/javascript">
    alert('Program Studi Yang Dirubah Sudah Ada !!');
    </script>
  <?php
}
?>