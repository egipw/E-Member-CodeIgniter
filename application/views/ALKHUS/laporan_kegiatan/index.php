 <div class="app-title">
  <div>
    <h1><i class="fa fa-files-o"></i> Data Laporan Kegiatan</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Data Laporan Kegiatan</li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Export Data Berdasarkan Tanggal</h3>
          
        </div>
<form name="form" id="form" role="form" method="post" action="<?php echo base_url('laporan_kegiatan/tanggal_dari_sampai'); ?>">

      <div class="row">


    <div class='col-sm-3'>
    <div class="form-group">
      <label class="control-label">Dari Tanggal</label>
            <input type='date' name='tanggal_dari' class='form-control' id='tanggal_dari' value="<?php echo date('Y-m-d'); ?>">      
    </div>  
    </div>

    <div class='col-sm-3'>
    <div class="form-group">
      <label class="control-label">Sampai Tanggal</label>
            <input type='date' name='tanggal_sampai' class='form-control' id='tanggal_sampai' value="<?php echo date('Y-m-d'); ?>">    
    </div>  
    </div>

    <div class='col-sm-3'>
    <div class="form-group">
    <label for="id_kategori">Kategori</label>
            <select type="text" name="id_kategori" class="form-control select2" id="id_kategori">
              <option value="%">Semua</option>
              <option value="ktg01">Gangguan</option>
              <option value="ktg02">Pelurusan Migrasi</option>
              <option value="ktg03">Lain-lain</option>
          </select>   
    </div>  
    </div>
     
    <div class='col-sm-3'>
    <div class="form-group">
            
            <br><p></p>
            <button type="submit" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa fa-search"></i>Tampilkan</button>  &nbsp;&nbsp;&nbsp;
    </div> 
    </div> 
   




      </div>  



    </form>
      </div>
    </div>
  </div>

  </div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Laporan Kegiatan</h3>



          <p><a class="btn btn-danger" href="<?php echo base_url("laporan_kegiatan/export_full_pdf"); ?>"><i class="fa fa-fw fa-lg fa fa-file-pdf-o"></i>Export Full PDF</a>
            &nbsp;&nbsp;&nbsp;
          <a class="btn btn-success" href="<?php echo base_url("laporan_kegiatan/export_full_excel"); ?>"><i class="fa fa-fw fa-lg fa fa-file-excel-o"></i>Export Full EXCEL</a></p>

        </div>
<table class="table table-hover table-bordered datatable">
            <thead>
            
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
        <?php
        $i=1;
        foreach ($laporan_kegiatan as $item) {
          ?>
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
