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
    <h1><i class="fa fa-recycle"></i> Reset Password</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Reset Password</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <form name="form" id="form" role="form" method="post" action="<?php echo base_url('admin/user_member/aksi_reset_password'); ?>" >
          <div class="box-body">

            <div class="alert alert-dismissible alert-warning">
                <button class="close" type="button" data-dismiss="alert">×</button>
                <h4>Warning!</h4>
                <p>Password akan direset menjadi password default yaitu <b>polinela123</b>.<br> Lakukan login dengan password default dan ganti dengan password baru demi keamanan akun anda.</p>
            </div>

          <input type="hidden" name="id_user" value="<?php echo $data->id_user;?>">

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
            <button id="simpan_ubah" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Reset Password</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('admin/user_member'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
