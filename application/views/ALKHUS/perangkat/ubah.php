   <div class="app-title">
  <div>
    <h1><i class="fa fa-hdd-o"></i> Perangkat</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Perangkat</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Ubah Perangkat</h3>
          
        </div>
  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('perangkat/aksi_ubah'); ?>" >
    <div class="box-body">

    <input type="hidden" name="id_perangkat" value="<?php echo $data->id_perangkat;?>">

    <div class="form-group">
      <label for="perangkat">Perangkat</label>
          <input type="text" class="form-control" id="perangkat" placeholder="Isi Perangkat" name="perangkat" required value="<?php echo $data->perangkat;?>">          
    </div>


    </div><!-- /.box-body -->

          <div class="tile-footer">
            <button id="simpan_ubah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('perangkat'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
          </div>
  </form>
      </div>
    </div>
  </div>
</div>
