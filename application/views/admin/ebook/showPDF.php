<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $ebook['judul'] ?> | Sistem Perpustakaan</title>
</head>
<body>

	<embed class="media" href="<?= base_url('assets/file/ebook/' . $ebook['file_ebook']) ?>"></embed>
	<script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.media.js') ?>"></script>
	<script type="text/javascript">
        $(function () {
            $('.media').media({
            	width: 1350,
            	height:630
            });
        });
    </script>
</body>
</html>