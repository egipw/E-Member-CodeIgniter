<div class="app-title">
  <div>
    <h1><i class="fa fa-pencil-square-o"></i>Edit Laporan Kegiatan</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Edit Laporan Kegiatan</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Edit Laporan Kegiatan</h3>
          
        </div>
          <form name="form" id="form" role="form" method="post" action="<?php echo base_url('k_laporan_kegiatan/aksi_ubah'); ?>">
    <div class="box-body">

       <input type="hidden" name="id_laporan_kegiatan" id="id_laporan_kegiatan" value="<?php echo $data->id_laporan_kegiatan; ?>">
            
    <div class='row'>

    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">Tanggal</label>
            <input class="form-control" readonly type="text" required placeholder=" Nama" name="tanggal" value="<?php echo $data->tanggal; ?>">       
    </div>  
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
    <label for="j_masalah">Masalah</label>
            <select type="text" name="id_kategori" class="form-control select2" id="id_kategori" required> 
            <?php foreach($get_kategori as $row) { ?>
                <option <?php echo $row->id_kategori == $id_kategori ? 'selected' : null; ?> value="<?php echo $row->id_kategori;?>"><?php echo $row->kategori;?></option>
            <?php } ?>
          </select>
    </div>
    </div>
    
    <div class='col-sm-6'>
    <div class="form-group">
      <label class="control-label">Uraian Kegiatan</label>
            <input class="form-control" type="text" required placeholder=" Uraian Kegiatan" name="uraian_kegiatan" id="uraian_kegiatan" value="<?php echo $data->uraian_kegiatan; ?>">          
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">DN</label>
            <input class="form-control" type="text" required placeholder=" DN" name="dn" id="dn" maxlength="10" value="<?php echo $data->dn; ?>">          
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
    <label for="sentral">Sentral</label>
          <select class="form-control" required name="sentral" id="sentral">
                              
            <?php foreach($get_sentral as $row) { ?>
                <option <?php echo $row->id_sentral == $sentral ? 'selected' : null; ?> value="<?php echo $row->id_sentral;?>"><?php echo $row->lokasi;?></option>
            <?php } ?>
        </select>   
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
    <label for="perangkat">Perangkat</label>
          <select class="form-control" required name="perangkat" id="perangkat">
                              
            <?php foreach($get_perangkat as $row) { ?>
                <option <?php echo $row->id_perangkat == $perangkat ? 'selected' : null; ?> value="<?php echo $row->id_perangkat;?>"><?php echo $row->perangkat;?></option>
            <?php } ?>
        </select>   
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">EQN/TID</label>
            <input class="form-control" type="text" required placeholder=" EQN/TID" name="eqn_tid" id="eqn_tid" value="<?php echo $data->eqn_tid; ?>">          
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">Jam Mulai</label>
            <input class="form-control" type="text" required placeholder=" Jam Mulai" name="jam_mulai" id="jam_mulai" value="<?php echo $data->jam_mulai; ?>">    
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">Jam Selsai</label>
            <input class="form-control" type="text" required placeholder=" Jam Selesai" name="jam_selesai" id="jam_selesai" value="<?php echo $data->jam_selesai; ?>">
    </div>
    </div>

        <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">Keterangan</label>
            <input class="form-control" type="text" required placeholder=" Keterangan" name="keterangan" id="keterangan" value="<?php echo $data->keterangan; ?>">         
    </div>
    </div>

    </div>
    </div><!-- /.box-body -->

          <div class="tile-footer">
            <button id="simpan" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('k_laporan_kegiatan'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit" style="visibility: hidden;">
          </div>
  </form>
      </div>
    </div>
  </div>

  </div>

<!-- BATES -->

