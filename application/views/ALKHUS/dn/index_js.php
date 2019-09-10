   <script type="text/javascript">
var table = $('.datatable').DataTable( {
    "processing": true,
});

$('#simpan_ubah').click(function(){
  $("#submit_ubah").click();
});

$('#simpan').click(function(){
  $("#submit").click();
});

function konfirmasi(id) {
  if (confirm("Yakin hapus data?")) {
    window.location = "<?php echo base_url('dn/aksi_hapus/'); ?>" + id;
  }
}
</script>

<script type="text/javascript">

$('#simpan_reset_pass').click(function(){
  $("#submit_reset_pass").click();
});


</script>
