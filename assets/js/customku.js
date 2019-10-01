$(document).ready(function() {
    $('#datatable').DataTable();

    $(".select2").select2({
        placeholder: "- Pilih -"
    });

	$('#denda').on('mouseenter', function(){
		$('#alert-denda').fadeIn();

		$('#denda').on('mouseleave', function(){
	    	$('#alert-denda').hide();
		});
	});

    /**
     * Proses pengembalian
     **/
    $(document).on('click', '#btn-modal', function() {
    	let id 		= $(this).data('id_pinjam');
    	let rfid 	= $(this).data('rfid');
    	let kode 	= $(this).data('kode');
    	let judul 	= $(this).data('judul');
    	let jumlah 	= $(this).data('jumlah');
    	let tempo 	= $(this).data('tempo');
    	let tanggal = $('#tanggal').val();
    	$('#id_pinjam').val(id);
    	$('#rfid').val(rfid);
    	$('#kode').val(kode);
    	$('#judul').val(judul);
    	$('#jumlah').val(jumlah);
    	$('#tempo').val(tempo);

	    $('#btn-kembalikan').on('click', function() {
	    	let denda = $('#denda').val()
	    	location.reload();

	    	$.ajax({
	            method  : "GET",
	            url     : "Pengembalian",
	            data    : 'id=' + id + '&rfid=' + rfid + '&kode=' + kode + '&judul=' + judul + '&jumlah=' + jumlah + '&tanggal=' + tanggal + '&denda=' + denda,
	            success:function(data) {
	                alert(data)
	            }
	        })
	    })
    })
});