   <div class="app-title">
  <div>
    <h1><i class="fa fa-address-book-o"></i> DN</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">DN</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Ubah DN</h3>
          
        </div>
  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('dn/aksi_ubah'); ?>" >
    <div class="box-body">

    <div class="form-group">
      <label for="dn">DN</label>
          <input type="tel" class="form-control" id="dn" placeholder="Isi DN" name="dn" readonly required maxlength="10" minlength="8" value="<?php echo $data->dn;?>">          
    </div>

    <div class="form-group">
      <label for="nama_pelanggan">Nama Pelanggan</label>
          <input type="text" class="form-control" id="nama_pelanggan" placeholder="Isi Nama Pelanggan" name="nama_pelanggan" required value="<?php echo $data->nama_pelanggan;?>">          
    </div>

    <div class="form-group">
      <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" placeholder="Isi Alamat" name="alamat" required " value="<?php echo $data->alamat;?>">          
    </div>

    <div class="form-group">
      <label for="eqn_tid">EQN/TID</label>
          <input type="text" class="form-control" id="eqn_tid" placeholder="Isi EQN/TID" name="eqn_tid" required " value="<?php echo $data->eqn_tid;?>">          
    </div>

    <div class="form-group">
    <label for="id_sentral">Sentral</label>
          <select class="form-control" required name="id_sentral" id="id_sentral">
                              
            <?php foreach($get_sentral as $row) { ?>
                <option <?php echo $row->id_sentral == $id_sentral ? 'selected' : null; ?> value="<?php echo $row->id_sentral;?>"><?php echo $row->lokasi;?></option>
            <?php } ?>
        </select>   
    </div>


    <div class="form-group">
    <label for="id_perangkat">Perangkat</label>
          <select class="form-control" required name="id_perangkat" id="id_perangkat">
                              
            <?php foreach($get_perangkat as $row) { ?>
                <option <?php echo $row->id_perangkat == $id_perangkat ? 'selected' : null; ?> value="<?php echo $row->id_perangkat;?>"><?php echo $row->perangkat;?></option>
            <?php } ?>
        </select>   
    </div>


    </div><!-- /.box-body -->

          <div class="tile-footer">
            <button id="simpan_ubah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('dn'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
          </div>
  </form>
      </div>
    </div>
  </div>
</div>
