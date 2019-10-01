<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin/home') ?>">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Update Klasifikasi Buku</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Update Klasifikasi Buku</h1>
    </div>
  </div><!--/.row-->

  <div class="row">
    <div class="col-md-12">
      <div class="alert bg-info" role="alert">
        <em class="fa fa-lg fa-warning">&nbsp;</em> Inputan yang ditandai (*) harus diisi.<a href="#" class="pull-right"></a>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
          <a href="<?= base_url('admin/klasifikasi_buku') ?>" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>

        <div class="panel-body">
          <div class="col-md-6 col-md-offset-3">
            <form action="<?= base_url('admin/klasifikasi_buku/update') ?>" method="POST">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <input type="hidden" name="id_klas" id="id_klas" value="<?= $klasifikasi['id_klas'] ?>">
              <div class="form-group">
                <label for="kode_klas">Kode Klasifikasi</label>
                <input name="kode_klas" id="kode_klas" type="text" class="form-control" readonly="" value="<?= $klasifikasi['kode_klas'] ?>">
              </div>
              <div class="form-group <?= form_error('nama_klas') ? 'has-error' : null ?>">
                <label for="nama_klas">Nama Klasifikasi <span class="text-danger">*</span></label>
                <input name="nama_klas" id="nama_klas" type="text" class="form-control" autofocus="" value="<?= $klasifikasi['nama_klas'] ?>">
                <small class="text-success"><?= form_error('nama_klas') ?></small>
              </div>
              <div class="form-group text-center">
                <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-reply"></i> Reset</button>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Simpan</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div><!--/.row-->
