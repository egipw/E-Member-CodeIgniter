<div class="app-title">
  <div>
    <h1><i class="fa fa-user-circle-o"></i> Upload</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Upload</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Upload</h3>
         
        </div>

        <div class="alert alert-dismissible alert-danger">
          <p>Upload photo member <b><?php echo $data->nama;?></b>. Photo tidak berukuran lebih dari 2 MB </p>
        </div>

        <form id="form_ubah" method="post" action="<?php echo base_url('admin/member/aksi_upload'); ?>" enctype="multipart/form-data">
          
        <input type="hidden" name="id_user" value="<?php echo $data->id_user;?>">

          <div class="form-group">
            <label class="control-label">Foto</label>
            <input class="form-control" type="file" name="foto">
          </div>

          
          <div class="tile-footer">
            <button id="simpan_ubah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('admin/member'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
