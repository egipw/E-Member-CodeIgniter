     
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
          <h3 class="title">Ganti Password</h3>
         
        </div>
         <form name="form_password" id="form_password" role="form" method="post" action="<?php echo base_url('profil/aksi_ubah_password'); ?>">
          
          <input type="hidden" name="where[id]" value="<?php echo $data['user']->id; ?>">

          <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control" id="password" required type="password" placeholder="Masukan Password" name="data[password]">
          </div>

          <div class="form-group">
            <label class="control-label">Ulangi Password</label>
            <input class="form-control" id="password2" required type="password" placeholder="Ulangi Password">
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