<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin/home') ?>">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Form Peminjaman Buku</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Form Peminjaman Buku</h1>
    </div>
  </div><!--/.row-->

  <?php $this->load->view('layouts/__alert') ?>

  <!-- Table -->
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
          <a href="<?= base_url('admin/transaksi/form_pinjam') ?>" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>


        <div class="panel-body">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <table class="table table-hover">
                <tbody style="font-size: 15px">
                  <tr>
                    <th>NPM</th>
                    <th>:</th>
                    <td><?= $mahasiswa['npm_mhs'] ?></td>
                  </tr>
                  <tr>
                    <th>Kode RFID</th>
                    <th>:</th>
                    <td><?= $mahasiswa['rfid_mhs'] ?></td>
                  </tr>
                  <tr>
                    <th>Nama Lengkap</th>
                    <th>:</th>
                    <td><?= ucwords($mahasiswa['nama_mhs']) ?></td>
                  </tr>
                  <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td><?= $mahasiswa['kode_kelas'] ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Form Peminjaman Buku -->
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
          <input type="hidden" name="rfid" id="rfid" value="<?= $_GET['rfid'] ?>">
          <input type="hidden" name="tempo" id="tempo" value="<?= date('Y-m-d', strtotime('+2 days')) ?>">
          <h3><i class="fa fa-align-justify text-primary"></i> Detail Peminjaman</h3>
        </div>

        <div class="panel-body">
          <div class="col-md-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Jumlah</th>
                  <th>Nama Buku</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody id="table-pinjam">
                <tr id="baris">
                  <td width="20%">
                    <input type="text" name="kode_pinjam" id="kode_pinjam" value="<?= $kodepinjam ?>" class="form-control" readonly="">
                  </td>
                  <td width="10%">
                    <input type="date" name="tanggal" id="tanggal" value="<?= date('Y-m-d') ?>" class="form-control" readonly>
                  </td>
                  <td width="10%">
                    <input type="text" name="jam" id="jam" value="<?= date('g:i') ?>" class="form-control" readonly>
                  </td>
                  <td width="10%">
                    <input type="number" name="jumlah" id="jumlah" value="1" min="1" max="2" class="form-control">
                  </td>
                  <td width="40%">
                    <select name="buku[]" id="buku" class="form-control buku">
                      <option value="">- Pilih -</option>
                      <?php foreach($buku as $value): ?>
                        <?php if ($value['jumlah'] > 0): ?>
                          <option value="<?= $value['id_buku'] ?>"><?= ucwords($value['judul']) ?></option>
                        <?php endif ?>
                      <?php endforeach ?>
                    </select>
                  </td>
                  <td class="text-center" width="20%">
                    <button id="addTabel" class="btn btn-success"><i class="fa fa-plus"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <button type="submit" id="saveTabel" class="btn btn-primary btn-block">Simpan</button>
        </div>

      </div>
    </div>
  </div>