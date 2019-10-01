<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin/home') ?>">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Update Data Buku</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Update Data Buku</h1>
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
          <a href="<?= base_url('admin/data_buku') ?>" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>

        <div class="panel-body">
          <div class="col-md-6 col-md-offset-3">
            <form action="<?= base_url('admin/data_buku/update') ?>" method="POST">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <input type="hidden" name="id_buku" id="id_buku" value="<?= $buku['id_buku'] ?>">
              <div class="form-group">
                <label for="kode_buku">Kode Buku</label>
                <input name="kode_buku" id="kode_buku" type="text" class="form-control" readonly="" value="<?= $buku['kode_buku'] ?>">
              </div>
              <div class="form-group <?= form_error('judul') ? 'has-error' : null ?>">
                <label for="judul">Judul Buku <span class="text-danger">*</span></label>
                <input name="judul" id="judul" type="text" class="form-control" autofocus="" value="<?= $buku['judul'] ?>">
                <small class="text-success"><?= form_error('judul') ?></small>
              </div>
              <div class="form-group <?= form_error('id_jenis') ? 'has-error' : null ?>">
                <label for="id_jenis">Jenis Bacaan <span class="text-danger">*</span></label>
                <select name="id_jenis" id="id_jenis" class="form-control select2">
                  <?php foreach($jenis as $value): ?>
                    <option value="<?= $value['id_jenis'] ?>" <?= $value['id_jenis'] == $buku['id_jenis'] ? 'selected' : null ?> ><?= ucfirst($value['nama_jenis']) ?></option>
                  <?php endforeach ?>
                </select>
                <small class="text-success"><?= form_error('id_jenis') ?></small>
              </div>
              <div class="form-group <?= form_error('id_klas') ? 'has-error' : null ?>">
                <label for="id_klas">Klasifikasi Buku <span class="text-danger">*</span></label>
                <select name="id_klas" id="id_klas" class="form-control select2">
                  <?php foreach($klasifikasi as $value): ?>
                    <option value="<?= $value['id_klas'] ?>" <?= $value['id_klas'] == $buku['id_klas'] ? 'selected' : null ?> ><?= $value['nama_klas'] ?></option>
                  <?php endforeach ?>
                </select>
                <small class="text-success"><?= form_error('id_klas') ?></small>
              </div>
              <div class="form-group <?= form_error('isbn') ? 'has-error' : null ?>">
                <label for="isbn">ISBN Buku <span class="text-danger">*</span></label>
                <input name="isbn" id="isbn" type="text" class="form-control" value="<?= $buku['isbn'] ?>">
                <small class="text-success"><?= form_error('isbn') ?></small>
              </div>
              <div class="form-group">
                <label for="penulis">Penulis Buku</label>
                <input name="penulis" id="penulis" type="text" class="form-control" value="<?= $buku['penulis'] ?>">
              </div>
              <div class="form-group <?= form_error('penerbit') ? 'has-error' : null ?>">
                <label for="penerbit">Penerbit Buku <span class="text-danger">*</span></label>
                <input name="penerbit" id="penerbit" type="text" class="form-control" value="<?= $buku['penerbit'] ?>">
                <small class="text-success"><?= form_error('penerbit') ?></small>
              </div>
              <div class="form-group <?= form_error('id_lokasi') ? 'has-error' : null ?>">
                <label for="id_lokasi">Lokasi Simpan <span class="text-danger">*</span></label>
                <select name="id_lokasi" id="id_lokasi" class="form-control select2">
                  <?php foreach ($lokasi as $value): ?>
                    <option value="<?= $value['id_lokasi'] ?>" <?= $value['id_lokasi'] == $buku['id_lokasi'] ? 'selected' : null ?> ><?= strtoupper($value['kode_lokasi']) ?></option>
                  <?php endforeach ?>
                </select>
                <small class="text-success"><?= form_error('id_lokasi') ?></small>
              </div>
              <div class="form-group <?= form_error('jumlah') ? 'has-error' : null ?>">
                <label for="jumlah">Jumlah Buku <span class="text-danger">*</span></label>
                <input name="jumlah" id="jumlah" type="number" class="form-control" value="<?= $buku['jumlah']  ?>">
                <small class="text-success"><?= form_error('jumlah') ?></small>
              </div>
              <div class="form-group <?= form_error('keterangan') ? 'has-error' : null ?>">
                <label for="keterangan">Keterangan</label>
                <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control" style="resize: none"><?= $buku['keterangan'] ?></textarea>
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
