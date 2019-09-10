<?php
switch ($this->session->level) {
  case 1:
    $level = "Admin";
    break;
  
  default:
    redirect(base_url(''));
    break;
}
?>
<div class="app-title">
  <div>
    <h1><i class="fa fa-folder"></i> Verifikasi Member</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Verifikasi Member</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h4 class="title">Verfikasi Member</h4>
        </div>
        <form name="form" id="form" role="form" method="post" action="<?php echo base_url('admin/member_baru/aksi_verifikasi'); ?>" >
          <div class="box-body">
            <input type="hidden" name="id" value="<?php echo $data->id;?>">
            <table>
              <tr>
                <th>Nama</th>
                <th> : </th>
                <th> <?php echo $data->nama;?></th>
              </tr>
              <tr>
                <th>E-Mail</th>
                <th> : </th>
                <th> <?php echo $data->email;?></th>
              </tr>
              <tr>
                <th>Asal Kampus</th>
                <th> : </th>
                <th> <?php echo $data->kampus;?></th>
              </tr>
              <tr>
                <th>Program Studi</th>
                <th> : </th>
                <th> <?php echo $data->prodi;?></th>
              </tr>
              <tr>
                <th>Tahun Lulus</th>
                <th> : </th>
                <th> <?php echo $data->tahun_lulus;?></th>
              </tr>
            </table>  
          </div>


          <div class="tile-footer">
            <button id="simpan_ubah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Verifikasi</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('admin/member_baru'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
if ($this->input->get('error') == 2) {
  ?>
  <script type="text/javascript">
    alert('Desa Yang Diinputkan Sudah Ada !!');
    </script>
  <?php
}
?>