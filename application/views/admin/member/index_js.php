<script type="text/javascript">
var table = $('.datatable').DataTable( {
    "processing": true,
    "scrollX": true,
    "autoWidth": false,
});

function hapus(id_desa) {
    swal({
        title: 'Apakah anda yakin?',
        text: "Data akan dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus!'
    }).then(function(result) {
        if (result.value) {
            $.get("<?php echo base_url('admin/desa/aksi_hapus/') ?>" + id_desa, 
            	function(data, status)
            	{
                location.reload();
            	});
        }
    });
};
</script>