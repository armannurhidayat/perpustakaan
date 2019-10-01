<?php
	$success = $this->session->flashdata('success');
	$warning = $this->session->flashdata('warning');
	$error   = $this->session->flashdata('error');

	if ($success) {
		$alert 	= 'bg-success';
		$status = 'Berhasil';
		$pesan	= $success;
	}

	if ($warning) {
		$alert 	= 'bg-warning';
		$status = 'Warning';
		$pesan	= $warning;
	}

	if ($error) {
		$alert 	= 'bg-danger';
		$status = 'Error';
		$pesan	= $error;
	}
?>

<?php if ($success || $warning || $error): ?>
  <div class="alert <?= $alert ?> alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    <strong><?= $status ?></strong> <?= $pesan ?>
  </div>
<?php endif ?>