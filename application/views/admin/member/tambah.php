<?php
switch ($this->session->level) {
  case 1:
    $level = "Administrator";
    break;
  
  default:
    redirect(base_url(''));
    break;
}
?>
<div class="app-title">
  <div>
    <h1><i class="fa fa-address-card-o"></i> Data Member</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"> Tambah Data Member</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Tambah Data Member</h3>
        </div>
        <form name="form" id="form" role="form" method="post" action="<?php echo base_url('admin/member/aksi_tambah'); ?>" >
        <div class="box-body">

        <div class="form-group">
        <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>          
        </div>

        <div class="form-group">
        <label for="email">Email</label>
          <input type="text" class="form-control" id="email" placeholder="E-Mail" name="email" required>         
        </div>

        <div class="form-group">
        <label for="kampus">Kampus</label>
          <input type="text" class="form-control" id="kampu" placeholder="Asal Kampus" name="kampus" required>         
        </div>

        <div class="form-group">
        <label for="prodi">Prodi</label>
          <input type="text" class="form-control" id="prodi" placeholder="Program Studi / Bidang" name="prodi" required>        
        </div>

        <div class="form-group">
        <label for="tahun_lulus">Tahun Lulus</label>
          <input type="number" min="2000" class="form-control" id="tahun_lulus" placeholder="Tahun Lulus" name="tahun_lulus" required>         
        </div>

        </div>

        <div class="tile-footer">
          <button id="simpan_tambah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
          &nbsp;&nbsp;&nbsp;
          <a class="btn btn-secondary" href="<?php echo base_url('admin/member'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_tambah" style="visibility: hidden;">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
if ($this->input->get('error') == 1) {
  ?>
  <script type="text/javascript">
    alert('E-Mail Yang Diinputkan Sudah Digunakan Oleh Akun Lain !!');
  </script>
  <?php
}
?>