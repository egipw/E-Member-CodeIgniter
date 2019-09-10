<div class="app-title">
  <div>
    <h1><i class="fa fa-pencil-square-o"></i> Input Laporan Kegiatan</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Input Laporan Kegiatan</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Input Laporan Kegiatan</h3>
          
        </div>
          <form name="form" id="form" role="form" method="post" action="<?php echo base_url('k_laporan_kegiatan/aksi_tambah'); ?>">
    <div class="box-body">
       <input type="hidden" name="id_user" id="id_user" value="<?php echo $this->session->id; ?>">
            
    <div class='row'>

    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">Tanggal</label>
            <input class="form-control" type="text" readonly required name="tanggal" value="<?php echo date('Y-m-d');?>">       
    </div>  
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
    <label for="id_kategori">Kategori</label>
            <select type="text" name="id_kategori" required class="form-control select2" id="id_kategori">
                     
            <?php foreach($get_kategori as $row) { ?>
                <option value="<?php echo $row->id_kategori;?>"><?php echo $row->kategori;?></option>
            <?php } ?>
        </select> 
    </div>
    </div>
    
    <div class='col-sm-6'>
    <div class="form-group">
      <label class="control-label">Uraian Kegiatan</label>
            <input class="form-control" type="text" required name="uraian_kegiatan" id="uraian_kegiatan">          
    </div>
    </div>
  
    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">DN</label>
            <input class="form-control" type="tel" required name="dn" id="dn" min="1" maxlength="10" minlength="8">          
    </div>
    </div>   

    <div class='col-sm-2'>
    <div class="form-group">
    <label for="id_sentral">Sentral</label>
          <select class="form-control" required name="sentral" id="sentral">
                              
            <?php foreach($get_sentral as $row) { ?>
                <option value="<?php echo $row->id_sentral;?>"><?php echo $row->lokasi;?></option>
            <?php } ?>
        </select>   
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
    <label for="id_perangkat">Perangkat</label>
          <select class="form-control" required name="perangkat" id="perangkat">
                                   
            <?php foreach($get_perangkat as $row) { ?>
                <option value="<?php echo $row->id_perangkat;?>"><?php echo $row->perangkat;?></option>
            <?php } ?>
        </select>  
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">EQN/TID</label>
            <input class="form-control" type="text" name="eqn_tid" id="eqn_tid" required>          
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">Jam Mulai</label>
            <input class="form-control" type="text" required name="jam_mulai" id="jam_mulai">    
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">Jam Selesai</label>
            <input class="form-control" type="text" required  name="jam_selesai" id="jam_selesai">
    </div>
    </div>   

    <div class='col-sm-2'>
    <div class="form-group">
      <label class="control-label">Keterangan</label>
            <input class="form-control" type="text" required name="keterangan" id="keterangan">         
    </div>
    </div>

    </div>
    </div><!-- /.box-body -->

          <div class="tile-footer">
            <button id="simpan" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
           <input type="submit" id="submit" style="visibility: hidden;">
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
          <h3 class="title">Laporan Kegiatan</h3>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            
        <tr>
                    <th>NO</th>
                    <th>TANGGAL</th>
                    <th>KATEGORI</th>
                    <th>URAIAN KEGIATAN</th>
                    <th>DN</th>
                    <th>SENTRAL</th>
                    <th>PERANGKAT</th>
                    <th>EQN</th>
                    <th>JAM_MULAI</th>
                    <th>JAM_SELESAI</th>
                    <th>KETERANGAN</th>
                    <th>PROSES</th>
        </tr>
      </thead>

<tbody>
        <?php
        $i=1;
        foreach ($laporan_kegiatan as $item) {
          ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $item->tanggal; ?></td>
            <td><?php echo $item->kategori; ?></td>
            <td><?php echo $item->uraian_kegiatan; ?></td>
            <td><?php echo $item->dn; ?></td>
            <td><?php echo $item->lokasi; ?></td>
            <td><?php echo $item->perangkat; ?></td>
            <td><?php echo $item->eqn_tid; ?></td>
            <td><?php echo $item->jam_mulai; ?></td>
            <td><?php echo $item->jam_selesai; ?></td>
            <td><?php echo $item->keterangan; ?></td>  
            <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('k_laporan_kegiatan/ubah/'.$item->id_laporan_kegiatan) ?>" data-toggle="tooltip" title="Ubah"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-warning" href="<?php echo base_url('k_laporan_kegiatan/aksi_hapus/'.$item->id_laporan_kegiatan) ?>" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                  </div>
            </td>  
          <?php
          $i++;
        }
        ?>
          </tbody> 
        </table>
      </div>
    </div>
  </div>

  </div>


<?php
if ($this->input->get('error') == 1) {
  ?>
  <script type="text/javascript">
    alert('DATA YANG DI INPUTKAN TIDAK VALID !!!');
  </script>
  <?php
}
?>

<?php
if ($this->input->get('error') == 2) {
  ?>
  <script type="text/javascript">
    alert('GAGAL ATAU DATA YANG DI EDIT TIDAK VALID !!!');
  </script>
  <?php
}
?>

