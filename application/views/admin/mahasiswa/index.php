<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin/home') ?>">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Data Mahasiswa</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Data Mahasiswa</h1>
    </div>
  </div><!--/.row-->

  <?php $this->load->view('layouts/__alert') ?>

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
                <th>Kode RFID</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Fakultas</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Kelas</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach($mahasiswa as $value): ?>
              <tr>
                <td><?= $no++ . '.' ?></td>
                <td><?= $value['rfid_mhs'] ?></td>
                <td><?= $value['nama_mhs'] ?></td>
                <td><?= $value['jk_mhs'] ?></td>
                <td><?= $value['fak_mhs'] ?></td>
                <td><?= $value['nama_prodi'] ?></td>
                <td><?= $value['tahun'] ?></td>
                <td><?= $value['kode_kelas'] ?></td>
                <td align="center">
                  <a href="<?= base_url('admin/mahasiswa/detail/' . $value['rfid_mhs']) ?>" class="btn btn-info btn-xs"><i class="fa fa-search"></i> Detail</a>
                </td>
              </tr>
            <?php endforeach ?>
            </tbody>
          </table>
        </div>

    </div>
  </div>
</div>
