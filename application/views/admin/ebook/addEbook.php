<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin/home') ?>">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Tambah Data Ebook</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Tambah Data Ebook</h1>
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
          <a href="<?= base_url('admin/data_ebook') ?>" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>

        <div class="panel-body">
          <div class="col-md-6 col-md-offset-3">
            <form action="<?= base_url('admin/data_ebook/tambah') ?>" enctype="multipart/form-data" method="POST">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <input type="hidden" name="id_ebook" id="id_ebook" value="<?= $uuid ?>">
              <div class="form-group">
                <label for="kode_ebook">Kode Ebook</label>
                <input name="kode_ebook" id="kode_ebook" type="text" class="form-control" readonly="" value="<?= $kodebuku ?>">
              </div>
              <div class="form-group <?= form_error('judul') ? 'has-error' : null ?>">
                <label for="judul">Judul Ebook <span class="text-danger">*</span></label>
                <input name="judul" id="judul" type="text" class="form-control" autofocus="" value="<?= set_value('judul') ?>">
                <small class="text-success"><?= form_error('judul') ?></small>
              </div>
              <div class="form-group <?= form_error('id_jenis') ? 'has-error' : null ?>">
                <label for="id_jenis">Jenis Bacaan <span class="text-danger">*</span></label>
                <select name="id_jenis" id="id_jenis" class="form-control select2">
                  <option value=""></option>
                  <?php foreach($jenis as $value): ?>
                    <option value="<?= $value['id_jenis'] ?>" <?= set_select('id_jenis', $value['id_jenis']) ?>><?= ucfirst($value['nama_jenis']) ?></option>
                  <?php endforeach ?>
                </select>
                <small class="text-success"><?= form_error('id_jenis') ?></small>
              </div>
              <div class="form-group <?= form_error('id_klas') ? 'has-error' : null ?>">
                <label for="id_klas">Klasifikasi Ebook <span class="text-danger">*</span></label>
                <select name="id_klas" id="id_klas" class="form-control select2">
                  <option value=""></option>
                  <?php foreach($klasifikasi as $value): ?>
                    <option value="<?= $value['id_klas'] ?>" <?= set_select('id_klas', $value['id_klas']) ?>><?= ucwords($value['nama_klas']) ?></option>
                  <?php endforeach ?>
                </select>
                <small class="text-success"><?= form_error('id_klas') ?></small>
              </div>
              <div class="form-group">
                <label for="penulis">Penulis Ebook</label>
                <input name="penulis" id="penulis" type="text" class="form-control" value="<?= set_value('penulis') ?>">
              </div>
              <div class="form-group">
                <label for="file_ebook">File Ebook <span class="text-danger">*</span></label>
                <input type="file" name="file_ebook" id="file_ebook" class="form-control">
                <small class="text-success"><?= form_error('file_ebook') ?></small>
              </div>
              <div class="form-group <?= form_error('keterangan') ? 'has-error' : null ?>">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" style="resize: none"><?= set_value('keterangan') ?></textarea>
                <small class="text-success"><?= form_error('keterangan') ?></small>
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
