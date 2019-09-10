   <script type="text/javascript">
var table = $('.datatable').DataTable( {
    "processing": true,
});
	$('#simpan').click(function(){
  $("#submit").click();
});

$(function() {
    $("#id_kategori").change(function() {
      if ($("#id_kategori").val() == 'ktg01' || $("#id_kategori").val() == 'ktg02') {
        $("#dn").prop('disabled', false); 
        $("#id_perangkat").prop('disabled', false);
        $("#eqn_tid").prop('disabled', false);
        
      } else if ($("#id_kategori").val() == 'ktg03'){
        $("#dn").prop('readonly', true); $("#dn").val('-');
        $("#id_perangkat").prop('readonly', true); $("#id_perangkat").val('-');
        $("#eqn_tid").prop('readonly', true); $("#eqn_tid").val('-');
      }
    });
});

</script>