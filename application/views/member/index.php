<?php
switch ($this->session->level) {
  case 2:
    $level = "Member";
    break;
  
  default:
    redirect(base_url(''));
    break;
}
?>
<div class="app-title">
  <div>
    <h1><i class="fa fa-user-circle-o"></i> Profil</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Profil</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        
        <div class="box-body">

          <div class="alert alert-dismissible alert-info">
            <?php
              switch ($this->session->status) {
              case 1:
                $this->load->view('member/pesan_data'); 
                break;
              
              case 2:
                $this->load->view('member/pesan_bayar'); 
                break;
              
              default:
                redirect(base_url(''));
                break;
              }
            ?>
                
          </div>


            <?php
            if (file_exists('uploads/userimage/' . $this->session->id_user)) {
              $userimage = 'uploads/userimage/' . $this->session->id_user;
            } else {
              $userimage = 'assets/user.png';
            }
            ?>

            <input type="hidden" name="id_user" value="<?php echo $data->id_user;?>">

            <table>
              <tr>
                <th>
                  <img  src="<?php echo base_url($userimage) ?>">
                </th>
                <th></th><th></th><th></th>
                <th>
                  Nama<br>
                  Kampus<br>
                  Prodi<br>
                  Tahun Lulus<br>
                </th>
                <th></th><th></th><th></th>
                <th>
                  : <br>
                  : <br> 
                  : <br> 
                  : <br> 
                </th>
                <th></th><th></th><th></th>
                <th>
                  <?php echo $data->nama;?><br>
                  <?php echo $data->kampus;?><br>
                  <?php echo $data->prodi;?><br>
                  <?php echo $data->tahun_lulus;?><br>
                </th>
              </tr>
            </table>  

          </div>

          <div class="tile-footer">
            <a class="btn btn-primary" href="<?php echo base_url('profil/ubah_member'); ?>"><i class="fa fa-fw fa-lg fa-cogs"></i>Ubah Data</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">

            <a class="btn btn-danger" href="<?php echo base_url('member/bayar/upload/' . $data->id_user); ?>"><i class="fa fa-fw fa-lg fa-recycle"></i>Upload Pembayaran</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">

            <?php if($this->session->status == 1) { ?>
            <a class="btn btn-success" href="<?php echo base_url('member/member/export_kartu/' . $data->id_user); ?>"><i class="fa fa-fw fa-lg fa-print"></i>Cetak Kartu</a> <input type="submit" id="submit_ubah" style="visibility: hidden;">
            <?php } ?>

          </div>
      </div>
    </div>
  </div>
</div>
