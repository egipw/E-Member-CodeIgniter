  <script type="text/javascript">
var table = $('.datatable').DataTable( {
    "processing": true,
});


$('#tanggal_dari').datetimepicker({
  lang:'en',
  timepicker:false,
  format:'Y-m-d',
  closeOnDateSelect:true
});
$('#tanggal_sampai').datetimepicker({
  lang:'en',
  timepicker:false,
  format:'Y-m-d',
  closeOnDateSelect:true
});


$('#form').submit(function()
{

    var TanggalDari = $('#tanggal_dari').val();
    var TanggalSampai = $('#tanggal_sampai').val();

    if ((TanggalDari) === "" || (TanggalSampai) === "") {
        alert('Tanggal Tidak Boleh Kosong !!!');
    return false;
    }
    //     else
    // {
    //   var URL = "<?php //echo base_url('data_harian/laporan'); ?>/" + TanggalDari + "/" + TanggalSampai;
    //   $('#result').load(URL);
    // }
});


</script>


<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/"; ?>laporan/jquery.datetimepicker.css">
<script type="text/javascript" language="javascript" src="<?php echo base_url() . "assets/"; ?>laporan/jquery.datetimepicker.js"></script>



