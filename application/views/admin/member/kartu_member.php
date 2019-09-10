 
<strong><center>Absen Mahasiswa PKN<br>Program Studi 
          <?php foreach($get_prodi_session as $row) { ?>
            <?php echo $row->prodi;?> 
          <?php } ?>
</center></strong><br><br>

<?php
$now = date('YmdHis');
?>
Tanggal : <?php echo $this->pustaka->tanggal_indo_string(date('Y-m-d')); ?>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-2thk{background-color:#c0c0c0;text-align:center}
.tg .tg-yw4l{text-align:center}
</style>

<table class="tg" width="100%">
  <tr>
    <th class="tg-2thk">No</th>
    <th class="tg-2thk">NPM</th>
    <th class="tg-2thk">Nama</th>
    <th class="tg-2thk">Tanda Tangan</th>
  </tr>
  <?php
  $i=1;
  foreach ($get_absen_mhs as $item) {
    ?>
  <tr>
    <td class="tg-yw4l"><?php echo $i; ?>.<br></td>
    <td class="tg-031e"><?php echo $item->npm; ?></td>
    <td class="tg-031e"><?php echo $item->nama; ?></td>
    <td class="tg-031e"></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
