 <div class="app-title">
  <div>
    <h1><i class="fa fa-files-o"></i> Data Karyawan</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Data Karyawan</li>
  </ul>
</div>


<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Karyawan</h3>
          
        </div>
<table class="table table-hover table-bordered datatable">
          <thead>
            
        <tr>
                    <th>NO</th>
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>NO HP</th>
                    <th>EMAIL</th>
                    <th>LIHAT</th>
                    
        </tr>
      </thead>

      <tbody>
        <?php
        $i=1;
        foreach ($data_karyawan as $item) {
          ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $item->username; ?></td>
            <td><?php echo $item->nama; ?></td>
            <td><?php echo $item->no_hp; ?></td>
            <td><?php echo $item->email; ?></td>  
            <td>
            <form name="form" id="form" role="form" method="post" action="<?php echo base_url('data_karyawan/lihat'); ?>">

                <input type='hidden' name='id' id='id' value="<?php echo $item->id; ?>">

               
                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa fa-search-plus"></i>Lihat Detail</button>

                </form>
            </td>  
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
 
