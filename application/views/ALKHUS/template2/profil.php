     
<div class="app-title">
  <div>
    <h1><i class="fa fa-users"></i> Profil</h1>
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
        <form id="form_ubah" method="post" action="<?php echo base_url('profil/aksi_ubah'); ?>" enctype="multipart/form-data">
          
          <input type="hidden" name="where[id]" value="<?php echo $data['user']->id; ?>">

          <div class="form-group">
            <label class="control-label">Nama</label>
            <input class="form-control" required type="text" placeholder="Masukan Nama" name="data[nama]" value="<?php echo $data['user']->nama; ?>">
          </div>

          <div class="form-group">
            <label class="control-label">Username</label>
            <input class="form-control" required readonly type="text" placeholder="Masukan Username" name="data[username]" value="<?php echo $data['user']->username; ?>">
          </div>

          <div class="form-group">
            <label class="control-label">No HP</label>
            <input class="form-control" type="text" placeholder="Masukan No HP" name="data[no_hp]" value="<?php echo $data['user']->no_hp; ?>">
          </div>

          <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" type="text" placeholder="Masukan Email" name="data[email]" value="<?php echo $data['user']->email; ?>">
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
          <h3 class="title">Reset Password</h3>
         
        </div>
         <form name="form_password" id="form_password" role="form" method="post" action="<?php echo base_url('profil/aksi_ubah_password'); ?>">
          
          <input type="hidden" name="where[id]" value="<?php echo $data['user']->id; ?>">


            <input type="hidden" name="data[password]" value="<?php echo $data['user']->username; ?>">


            <input type="hidden" name="data[password]" value="<?php echo $data['user']->username; ?>">


          
          <div class="tile-footer">
            <button id="simpan_ubah_pass" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Reset</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url(); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah_pass" style="visibility: hidden;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>