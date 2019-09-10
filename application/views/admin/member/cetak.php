<div class="app-title">
  <div>
    <h1><i class="fa fa-print"></i> Cetak Kartu</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Cetak Kartu</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        
        <div class="box-body">

            <?php
            if (file_exists('uploads/userimage/' . $data->id_user)) {
              $userimage = 'uploads/userimage/' . $data->id_user;
            } else {
              $userimage = 'assets/user.png';
            }
            ?>
          
        <input type="hidden" name="id_user" value="<?php echo $data->id_user;?>">

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
          <a class="btn btn-primary" href="<?php echo base_url('admin/member/export_kartu/' . $data->id_user); ?>"><i class="fa fa-fw fa-lg fa-print"></i>Cetak Kartu</a> <input type="submit" id="submit_tambah" style="visibility: hidden;">
          <a class="btn btn-secondary" href="<?php echo base_url('admin/member'); ?>"><i class="fa fa-fw fa-lg fa-times-circle">
          </i>Batal</a> <input type="submit" id="submit_tambah" style="visibility: hidden;">
        </div>

      </div>
    </div>
  </div>
</div>
