   
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
          <h3 class="title">Data Sentral</h3>
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('sentral/tambah'); ?>"><i class="fa fa-plus"></i>Sentral</a></p>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>

              <th>No</th>
              <th>Id Lokasi</th>
              <th>Keterangan Lokasi</th>
              <th>Alamat</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $i=1;
              $this->db->where('id_sentral !=', '-');
              foreach ($this->db->get('sentral')->result() as $item) {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item->lokasi; ?></td>
                <td><?php echo $item->keterangan; ?></td>
                <td><?php echo $item->alamat; ?></td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('sentral/ubah/' . $item->id_sentral); ?>" data-toggle="tooltip" title="Ubah"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-warning"  href="<?php echo base_url('sentral/aksi_hapus/' . $item->id_sentral); ?>"  data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
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