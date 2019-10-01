<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin/home') ?>">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Detail Mahasiswa</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Detail Mahasiswa</h1>
    </div>
  </div><!--/.row-->

  <?php $this->load->view('layouts/__alert') ?>

  <!-- Table -->
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
          <a href="<?= base_url('admin/mahasiswa') ?>" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>

        <div class="panel-body">
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
                  <td><?= $mahasiswa['nama_mhs'] ?></td>
                </tr>
                <tr>
                  <th>Tempat Tanggal Lahir</th>
                  <th>:</th>
                  <td><?= $mahasiswa['templ_mhs'] . ', ' . $mahasiswa['tgll_mhs'] ?></td>
                </tr>
                <tr>
                  <th>Jenis Kelamin</th>
                  <th>:</th>
                  <td><?= ucfirst($mahasiswa['jk_mhs']) ?></td>
                </tr>
                <tr>
                  <th>Agama</th>
                  <th>:</th>
                  <td><?= ucfirst($mahasiswa['nama_agama']) ?></td>
                </tr>
                <tr>
                  <th>Nomor Telepon</th>
                  <th>:</th>
                  <td><?= $mahasiswa['tlp_mhs'] ?></td>
                </tr>
                <tr>
                  <th>Angkatan</th>
                  <th>:</th>
                  <td><?= $mahasiswa['tahun'] ?></td>
                </tr>
                <tr>
                  <th>Fakultas</th>
                  <th>:</th>
                  <td><?= $mahasiswa['fak_mhs'] ?></td>
                </tr>
                <tr>
                  <th>Program Studi</th>
                  <th>:</th>
                  <td><?= ucwords($mahasiswa['nama_prodi']) ?></td>
                </tr>
                <tr>
                  <th>Kelas</th>
                  <th>:</th>
                  <td><?= $mahasiswa['kode_kelas'] ?></td>
                </tr>
                <tr>
                  <th>Dosen Wali</th>
                  <th>:</th>
                  <td><?= $mahasiswa['nama_ds'] ?></td>
                </tr>
                <tr>
                  <th>Status Mahasiswa</th>
                  <th>:</th>
                  <td><?= $mahasiswa['sts_mhs'] ?></td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <th>:</th>
                  <td><?= $mahasiswa['alamat_mhs'] ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>