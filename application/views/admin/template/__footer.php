<div class="col-sm-12">
  <p class="back-link"></p>
</div>

</div>

<script src="<?= base_url('assets') ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/autocomplete/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets') ?>/js/chart.min.js"></script>
<script src="<?= base_url('assets') ?>/js/chart-data.js"></script>
<script src="<?= base_url('assets') ?>/js/easypiechart.js"></script>
<script src="<?= base_url('assets') ?>/js/easypiechart-data.js"></script>
<script src="<?= base_url('assets') ?>/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url('assets') ?>/js/custom.js"></script>
<script src="<?= base_url('assets') ?>/js/customku.js"></script>

<!-- dataTables -->
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?= base_url('assets') ?>/vendors/datatables/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

<!-- Select2 -->
<script src="<?= base_url('assets') ?>/vendors/select2/dist/js/select2.min.js"></script>
<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
	};
</script>

<script type="text/javascript">
    $(document).ready( function () {
        // Add
        var count = 1;
        $('#addTabel').click(function() {
            count = count + 1;
            var html_baris = `<tr id="baris` + count + `">`;
            html_baris += `<td width="20%"></td>`;
            html_baris += `<td width="10%"></td>`;
            html_baris += `<td width="10%"></td>`;
			html_baris += `<td width="10%">
							<input type="number" name="jumlah" id="jumlah" value="1" class="form-control">
						   </td>`;
	        html_baris += `<td width="40%">
	                        <select name="buku[]" id="buku`+ count +`" class='form-control buku' data-row='baris` + count + `' required="">
                                <option value="">- Pilih -</option>
                                <?php foreach($buku as $value): ?>
	                                <?php if ($value['jumlah'] > 1) : ?>
	                                  <option value="<?= $value['id_buku'] ?>"><?= ucwords($value['judul']) ?></option>
	                            	<?php endif ?>
                                <?php endforeach ?>
                            </select>
	                       </td>`;
	        html_baris += `<td class="text-center" width="20%">
					        <button type="button" name="remove" data-row="baris` + count + `" class="btn btn-danger remove"><i class="fa fa-trash"></i></button>
	        			   </td>`;
	        html_baris += "</tr>";
	        $('#table-pinjam').append(html_baris);
        });

        // Remove
        $(document).on('click', '.remove', function() {
	        var delete_row = $(this).data("row");
	        $('#' + delete_row).remove();
	    });

	    // Save
	    $('#saveTabel').on('click',function(){
	        var kode        = $('#kode_pinjam').val()
	        var rfid       	= $('#rfid').val()
	        var tanggal     = $('#tanggal').val()
	        var jam       	= $('#jam').val()
	        var tempo       = $('#tempo').val()
	        var jumlah      = $('#jumlah').val()
	        var buku 		= [];

	        $('.buku').each(function(){
	            buku.push($(this).val());
	        });

	        $.ajax({
	            method  : "GET",
	            url     : "<?= base_url('admin/transaksi/insertPinjam') ?>",
	            data    : { kode:kode, rfid:rfid, tanggal:tanggal, jam:jam, tempo:tempo, jumlah:jumlah, buku:buku },
	            success:function(data) {
	                alert(data);
	                window.location.replace('<?= base_url('admin/transaksi/data_pinjam') ?>')
	            }
	        });
	    });

    });
</script>

</body>
</html>