<table>
  <tr>
    <th>

      <img  src="<?php echo base_url('assets/logo.png'); ?>">

      <img src="assets/logo.jpg">
    </th>
    <th><b>
      KARTU MEMBER PUSAT KARIR<br>
      POLITEKNIK NEGERI LAMPUNG
    </th>
    <th>
    </th>
  </tr>
</table>


<?php
  if (file_exists('uploads/userimage/' . $data->id_user)) {
    $userimage = 'uploads/userimage/' . $data->id_user;
  } else {
    $userimage = 'assets/user.png';
  }
?>

<div id="data">
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

<style type="text/css">
  #header {
    text-align: center;
  }

  #data {
    text-align: left;    
  }
</style>