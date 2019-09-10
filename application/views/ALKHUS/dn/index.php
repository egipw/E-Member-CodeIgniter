    
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
          <h3 class="title">Data DN</h3>
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('dn/tambah'); ?>"><i class="fa fa-plus"></i>DN</a></p>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>

              <th>No</th>
              <th>DN</th>
              <th>Nama Pelanggan</th>
              <th>Alamat</th>
              <th>EQN/TID</th>
              <th>Sentral</th>
              <th>Perangkat</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $i=1;
              $this->db->where('dn !=', '-');
              foreach ($this->db->get('v_dn')->result() as $item) {
              ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item->dn; ?></td>
                <td><?php echo $item->nama_pelanggan; ?></td>
                <td><?php echo $item->alamat; ?></td>
                <td><?php echo $item->eqn_tid; ?></td>
                <td><?php echo $item->sentral; ?></td>
                <td><?php echo $item->perangkat; ?></td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('dn/ubah/' . $item->dn); ?>" data-toggle="tooltip" title="Ubah"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-warning"  href="<?php echo base_url('dn/aksi_hapus/' . $item->dn); ?>"  data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
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
    alert('DN Yang Diinputkan Sudah Ada !!');
    </script>
  <?php
}
?>