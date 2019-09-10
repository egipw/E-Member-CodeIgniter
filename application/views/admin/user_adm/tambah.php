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

<?php $flashdata = $this->session->flashdata('data'); ?>

<div class="app-title">
  <div>
    <h1><i class="fa fa-user"></i>Tambah User Admin</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Tambah User Admin</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Tambah User Admin</h3>
          
        </div>
        <form name="form" id="form" role="form" method="post" action="<?php echo base_url('admin/user_adm/aksi_tambah'); ?>" >
        <div class="box-body">

        <div class="form-group">
          <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" placeholder="Isi Nama" name="nama"  required>
        </div>

        <div class="form-group">
          <label for="email">E-Mail</label>
              <input type="E-Mail" class="form-control" id="email" placeholder="Isi E-Mail" name="email" required>         
        </div>

        <div class="form-group">
          <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Isi Password" name="password" required>          
        </div>

          <div class="form-group">
            <label class="control-label">Level</label>
            <select class="form-control select2" required name="level">
              <option value="1">Administrator</option>
            </select>
          </div>

        </div>

        <div class="tile-footer">
          <button id="simpan_tambah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
          &nbsp;&nbsp;&nbsp;
          <a class="btn btn-secondary" href="<?php echo base_url('admin/user_adm'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_tambah" style="visibility: hidden;">
        </div>
    </form>
      </div>
    </div>
  </div>
</div>

<?php
if ($this->input->get('error') == 1) {
  ?>
  <script type="text/javascript">
    alert('E-Mail Yang Diinputkan Sudah Terdaftar Dengan Akun Lain !!');
  </script>
  <?php
}
?>