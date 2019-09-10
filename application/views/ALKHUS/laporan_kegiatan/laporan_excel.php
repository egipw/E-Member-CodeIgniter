 <?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>
<tr>
	<strong><center><h2>LAPORAN KEGIATAN HARIAN<br>SWITCHING ARNET WITEL LAMPUNG</h2></center></strong>
</tr>

<tr>
                    <th>NO</th>
                    <th>TANGGAL</th>
                    <th>KATEGORI</th>
                    <th>URAIAN KEGIATAN</th>
                    <th>DN</th>
                    <th>NAMA PELANGGAN</th>
                    <th>ALAMAT</th>
                    <th>SENTRAL</th>
                    <th>PERANGKAT</th>
                    <th>EQN</th>
                    <th>JAM_MULAI</th>
                    <th>JAM_SELESAI</th>
                    <th>PETUGAS</th>
                    <th>KETERANGAN</th>
 </tr>

</thead>

<tbody>

<?php $i=1; foreach($data as $item) { ?>

<tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $item->tanggal; ?></td>
            <td><?php echo $item->kategori; ?></td>
            <td><?php echo $item->uraian_kegiatan; ?></td>
            <td><?php echo $item->dn; ?></td>
            <td><?php echo $item->nama_pelanggan; ?></td>
            <td><?php echo $item->alamat_pelanggan; ?></td>
            <td><?php echo $item->lokasi; ?></td>
            <td><?php echo $item->perangkat; ?></td>
            <td><?php echo $item->eqn_tid; ?></td>
            <td><?php echo $item->jam_mulai; ?></td>
            <td><?php echo $item->jam_selesai; ?></td>
            <td><?php echo $item->nama; ?></td>
            <td><?php echo $item->keterangan; ?></td> 

 </tr>

<?php $i++; } ?>

</tbody>

</table>