<div class="app-title">
  <div>
    <h1><i class="fa fa-user-circle-o"></i> Profil</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Profil</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Profil</h3>
         
        </div>
        <form id="form_ubah" method="post" action="<?php echo base_url('profil/aksi_ubah_admin'); ?>" enctype="multipart/form-data">
          
          <input type="hidden" name="where[id_user]" value="<?php echo $data['tbl_user']->id_user; ?>">

          <div class="form-group">
            <label class="control-label">Nama</label>
            <input class="form-control" required type="text" placeholder="Masukan Nama" name="data[nama]" value="<?php echo $data['tbl_user']->nama; ?>">
          </div>

          <div class="form-group">
            <label class="control-label">E-Mail</label>
            <input class="form-control" required readonly type="text" placeholder="Masukan E-Mail" name="data[email]" value="<?php echo $data['tbl_user']->email; ?>">
          </div>

          <?php
                switch ($data['tbl_user']->level) {
                  case 1:
                    $level = "Administrator";
                    break;

                  default:
                    redirect(base_url(''));
                    break;
                }
          ?>

          <div class="form-group">
            <label class="control-label">Level</label>
            <input class="form-control" required readonly type="text" placeholder="Masukan Level" value="<?php echo $level; ?>">
          </div>


          <div class="form-group">
            <label class="control-label">Foto</label>
            <input class="form-control" type="file" name="foto">
          </div>

          
          <div class="tile-footer">
            <button id="simpan_ubah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
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
          <h3 class="title">Ubah Password</h3>
        </div>
        <form id="form_ubah_password" method="post" action="<?php echo base_url('profil/aksi_ubah_password_admin'); ?>">
          
          <input type="hidden" name="where[id_user]" value="<?php echo $data['tbl_user']->id_user; ?>">

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
            <a class="btn btn-secondary" href="<?php echo base_url(''); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah_password" style="visibility: hidden;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>