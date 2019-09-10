<?php
switch ($this->session->level) {
  case 1:
    $level = "Administrator";
    break;
  
  default:
    redirect(base_url(''));
    break;
}
?>
<div class="app-title">
  <div>
    <h1><i class="fa fa-user"></i>Ubah User AdminI</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Ubah User Admin</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Ubah User Admin</h3> 
        </div>
        <form name="form" id="form" role="form" method="post" action="<?php echo base_url('admin/user_adm/aksi_ubah'); ?>" >
          <div class="box-body">

          <input type="hidden" name="id_user" value="<?php echo $data->id_user;?>">

          <div class="form-group">
            <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Isi nama" name="nama" value="<?php echo $data->nama;?>" reqired>          
          </div>

          <div class="form-group">
            <label for="email">E-Mail</label>
                <input type="text" class="form-control" id="email" placeholder="Isi E-Mail" name="email" value="<?php echo $data->email;?>" required>         
          </div>

          <div class="form-group">
          <label for="level">Level</label>
                  <select type="text" name="level" class="form-control select2">
                    <option <?php echo  $data->level == 1 ? 'selected' : null; ?> value="1">Administrator</option>
                </select>
          </div>

          </div>
          <div class="tile-footer">
            <button id="simpan_ubah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('admin/user_adm'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Reset Password</h3>
        </div>
        <form id="form_ubah_password" method="post" action="<?php echo base_url('admin/user_adm/aksi_ubah_password'); ?>">


          <input type="hidden" name="where[id_user]" value="<?php echo $data->id_user; ?>">

          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" id="password" required type="password" placeholder="Masukan Password" name="data[password]">
          </div>

          <div class="form-group">
            <label class="control-label">Ulangi Password</label>
            <input class="form-control" id="password2" required type="password" placeholder="Ulangi Password">
          </div>

          <div class="tile-footer">
            <button id="simpan_ubah_password" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('admin/user_adm_n_up2ai'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah_password" style="visibility: hidden;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>