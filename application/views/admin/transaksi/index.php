<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin/home') ?>">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Data Peminjam Buku</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Data Peminjam Buku</h1>
    </div>
  </div><!--/.row-->

  <?php $this->load->view('layouts/__alert') ?>

  <!-- Table -->
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
        </div>

        <div class="panel-body">
          <table id="datatable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Pinjam</th>
                <th>Judul Buku</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Jatuh Tempo</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($pinjam as $value): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $value['kode_pinjam'] ?></td>
                  <td><?= ucwords($value['judul']) ?></td>
                  <td><?= $value['jumlah_pinjam'] ?></td>
                  <td><?= $value['tanggal'] ?></td>
                  <td><?= substr($value['jam'], 1, -3) ?></td>
                  <td><?= $value['jatuh_tempo'] ?></td>
                  <td>
                    <a href="javascript:void(0)" id="btn-modal" data-toggle="modal" data-target="#pengembalian" class="btn btn-success btn-xs" data-id_pinjam="<?= $value['id_pinjam'] ?>" data-rfid="<?= $value['rfid_mhs'] ?>" data-kode="<?= $value['kode_pinjam'] ?>" data-judul="<?= $value['judul'] ?>" data-jumlah="<?= $value['jumlah_pinjam'] ?>" data-tempo="<?= $value['jatuh_tempo'] ?>" ><i class="fa fa-check"></i> Kembalikan</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal Pengembalian -->
  <div class="modal fade" id="pengembalian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="exampleModalLabel">Pengembalian</h5>
        </div>
        <div class="modal-body">
            <input type="hidden" name="rfid" id="rfid" class="form-control">
            <input type="hidden" name="id_pinjam" id="id_pinjam" class="form-control">
            <div class="form-group">
              <label for="kode">Kode Pinjam</label>
              <input type="text" name="kode" id="kode" class="form-control" readonly="">
            </div>
            <div class="form-group">
              <label for="judul">Judu Buku</label>
              <input type="text" name="judul" id="judul" class="form-control" readonly="">
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah Pinjam</label>
              <input type="text" name="jumlah" id="jumlah" class="form-control" readonly="">
            </div>
            <div class="form-group">
              <label for="tempo">Jatuh Tempo</label>
              <input type="text" name="tempo" id="tempo" class="form-control" readonly="">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal Kembali <span class="text-danger">*</span></label>
              <input type="date" name="tanggal" id="tanggal" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="denda">Denda </label>
              <input type="number" name="denda" id="denda" class="form-control">
              <small style="display: none" id="alert-denda" class="text-danger"> * Masukan denda jika sudah melewati tanggal jatuh tempo</small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" id="btn-kembalikan" class="btn btn-success" data-dismiss="modal">Kembalikan</button>
        </div>
      </div>
    </div>
  </div>