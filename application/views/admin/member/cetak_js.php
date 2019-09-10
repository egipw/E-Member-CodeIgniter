<script type="text/javascript">
var table = $('.datatable').DataTable( {
    "processing": true,
    "scrollX": true,
    "autoWidth": false,
});

function hapus(id_user) {
    swal({
        title: 'Apakah anda yakin?',
        text: "Data akan dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus!'
    }).then(function(result) {
        if (result.value) {
            $.get("<?php echo base_url('admin/user_kaprodi/aksi_hapus/') ?>" + id_user, 
            	function(data, status)
            	{
                location.reload();
            	});
        }
    });
};
</script>