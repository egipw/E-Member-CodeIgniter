  <div class="app-title">
  <div>
    <h1><i class="fa fa-location-arrow"></i> Sentral</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Sentral</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Ubah Sentral</h3>
          
        </div>
  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('sentral/aksi_ubah'); ?>" >
    <div class="box-body">

    <input type="hidden" name="id_sentral" value="<?php echo $data->id_sentral;?>">

    <div class="form-group">
    <div class="form-group">
      <label for="lokasi">Lokasi</label>
          <input type="text" class="form-control" id="lokasi" placeholder="Isi Lokasi" name="lokasi" required value="<?php echo $data->lokasi;?>">          
    </div>

    <div class="form-group">
      <label for="keterangan_lokasi">Keterangan Lokasi</label>
          <input type="text" class="form-control" id="keterangan" placeholder="Isi Keterangan Lokasi" name="keterangan" required value="<?php echo $data->keterangan;?>">          
    </div>

    <div class="form-group">
      <label for="Alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" placeholder="Isi Alamat" name="alamat" required " value="<?php echo $data->alamat;?>">          
    </div>

    </div><!-- /.box-body -->

          <div class="tile-footer">
            <button id="simpan_ubah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('sentral'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
          </div>
  </form>
      </div>
    </div>
  </div>
</div>
