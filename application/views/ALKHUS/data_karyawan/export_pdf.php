  
<strong><center>LAPORAN KEGIATAN HARIAN<br>SWITCHING ARNET WITEL LAMPUNG</center></strong><br><br>



<br><br>

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
    <th class="tg-2thk">TANGGAL</th>
    <th class="tg-2thk">KATEGORI</th>
    <th class="tg-2thk">URAIAN KEGIATAN</th>
    <th class="tg-2thk">DN</th>
    <th class="tg-2thk">PELANGGAN</th>
    <th class="tg-2thk">ALAMAT</th>
    <th class="tg-2thk">SENTRAL</th>
    <th class="tg-2thk">PERANGKAT</th>
    <th class="tg-2thk">EQN/TID</th>
    <th class="tg-2thk">JAM MULAI</th>
    <th class="tg-2thk">JAM SELESAI</th>
    <th class="tg-2thk">PETUGAS</th>
    <th class="tg-2thk">KETERANGAN</th>
  </tr>
  <?php
  $i=1;
  foreach ($data as $item) {
    ?>
  <tr>
    <td class="tg-yw4l"><?php echo $i; ?>.<br></td>
    <td class="tg-031e"><?php echo $item->tanggal; ?></td>
    <td class="tg-031e"><?php echo $item->kategori; ?></td>
    <td class="tg-031e"><?php echo $item->uraian_kegiatan; ?></td>
    <td class="tg-031e"><?php echo $item->dn; ?></td>
    <td class="tg-031e"><?php echo $item->nama_pelanggan; ?></td>
    <td class="tg-031e"><?php echo $item->alamat_pelanggan; ?></td>
    <td class="tg-031e"><?php echo $item->lokasi; ?></td>
    <td class="tg-031e"><?php echo $item->perangkat; ?></td>
    <td class="tg-031e"><?php echo $item->eqn_tid; ?></td>
    <td class="tg-031e"><?php echo $item->jam_mulai; ?></td>
    <td class="tg-031e"><?php echo $item->jam_selesai; ?></td>
    <td class="tg-031e"><?php echo $item->nama; ?></td>
    <td class="tg-031e"><?php echo $item->keterangan; ?></td>
  </tr>
  <?php
  $i++;
  }
  ?>

</table>
<br>
<br>