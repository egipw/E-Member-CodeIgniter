<div class="box box-danger">
  <div class="box-header with-border">
    <h4><strong><font color=#1a2226>TAMBAH LAPORAN KARYAWAN</font></strong></h4>
  </div><!-- /.box-header -->

  <!-- form start -->
  <form name="form" id="form" role="form" method="post" action="<?php echo base_url('k_data_gangguan/aksi_tambah'); ?>">
    <div class="box-body">

      <input type="hidden" name="id_karyawan" value="<?php echo $data['id_karyawan']; ?>">
    
    <div class='row'>

    <div class='col-sm-2'>
    <div class="form-group">
      <label for="tanggal">Hari/Tanggal</label>
          <input type="text" class="form-control" id="tanggal" placeholder="" name="tanggal" value="<?php echo date('Y-m-d');?>">          
    </div>  
    </div>
    
    <div class='col-sm-2'>
    <div class="form-group">
      <label for="sentral">Sentral</label>
      <!--<textarea class="form-control" id="sentral" placeholder="Isi Uraian Kegiatan" name="sentral"></textarea>-->
          <input type="text" class="form-control" id="sentral" placeholder="Isi Sentral" name="sentral" required>          
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label for="dn">DN</label>
          <input type="text" class="form-control" id="dn" placeholder="Isi DN" name="dn" required>          
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label for="dari_sentral">Dari Sentral</label>
          <input type="text" class="form-control" id="dari_sentral" placeholder="Isi Dari Sentral" name="dari_sentral" required>  
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label for="dari_eqn_tid">Dari EQN/TID</label>
          <input type="text" class="form-control" id="dari_eqn_tid" placeholder="Isi Dari EQN/TID" name="dari_eqn_tid" required>  
    </div>
    </div>

    <div class='col-sm-2'>
    <div class="form-group">
      <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control" id="keterangan" placeholder="Isi Keterangan" name="keterangan" required>          
    </div>
    </div>

    </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
      <input class="btn btn-success" name="proses" type="submit" value="Simpan Data" />
      <a href="<?php echo base_url('k_data_gangguan'); ?>" class="btn btn-info">Batal</a>
    </div>
  </form>
</div>

<!-- <script type="text/javascript">

$('#form').submit(function() 
{
    if ($.trim($("#keterangan").val()) === "") {
        alert('Data masih kosong !!!');
    return false;
    }
});
</script> -->

<!--BATESSSSSSSSSSSSSSSS-->


<script type="text/javascript" language="javascript" >
  var dTable;
  $(document).ready(function() {
    dTable = $('#lookup').DataTable({
      responsive: true
    });
  });
</script>


<div class="box box-danger">
  <div class="box-header with-border">
    <h4><strong><font color=#1a2226>Data Gangguan</font></strong></h4>
  </div><!-- /.box-header -->

    <div class="box-body">



    <table id="lookup" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
                    <th>NO</th>
                    <th>TANGGAL</th>
                    <th>SENTRAL</th>
                    <th>DN</th>
                    <th>DARI SENTRAL</th>
                    <th>DARI EQN/TID</th>
                    <th>KETERANGAN</th>
                    <th>EDIT</th>
                    <th>HAPUS</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $i=1;
        foreach ($data['data_gangguan'] as $item) {
          ?>
          <tr>
            <th><?php echo $i; ?></th>
            <th><?php echo $item->tanggal; ?></th>
            <th><?php echo $item->sentral; ?></th>
            <th><?php echo $item->dn; ?></th>
            <th><?php echo $item->dari_sentral; ?></th>
            <th><?php echo $item->dari_eqn_tid; ?></th>
            <th><?php echo $item->keterangan; ?></th>  
            <th><a class="btn btn-primary" href="<?php echo base_url('k_data_gangguan/ubah_tambah/'.$item->id) ?>">EDIT</a></th>
            <th><a class="btn btn-danger" onclick="konfirmasi(<?php echo $item->id; ?>)">Hapus</a></th>
          </tr>
          <?php
          $i++;
        }
        ?>
      </tbody>
      
    </table>
  </div><!-- /.boxbody -->
</div><!-- /.box -->



<script type="text/javascript">
function konfirmasi(id) {
  if (confirm("Yakin hapus ?")) {
    window.location = "<?php echo base_url('k_data_gangguan/aksi_hapus_tambah/'); ?>" + id;
  }
}
</script>