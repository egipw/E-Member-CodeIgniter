    
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
          <h3 class="title">Data Perangkat</h3>
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('perangkat/tambah'); ?>"><i class="fa fa-plus"></i>Perangkat</a></p>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>

              <th>No</th>
              <th>Id Perangkat</th>
              <th>Nama Perangkat</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $i=1;
              $this->db->where('id_perangkat !=', '-');
              foreach ($this->db->get('perangkat')->result() as $item) {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item->id_perangkat; ?></td>
                <td><?php echo $item->perangkat; ?></td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('perangkat/ubah/' . $item->id_perangkat); ?>" data-toggle="tooltip" title="Ubah"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-warning"  href="<?php echo base_url('perangkat/aksi_hapus/' . $item->id_perangkat); ?>"  data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                  </div>
                </td>
              </tr>
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
if ($this->input->get('error') == 2) {
  ?>
  <script type="text/javascript">
    alert('NIP Yang Diinputkan Sudah Ada !!');
    </script>
  <?php
}
?>