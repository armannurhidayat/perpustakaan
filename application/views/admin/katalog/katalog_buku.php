<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin/home') ?>">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Katalog Buku</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Katalog Buku</h1>
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
          <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kode</th>
                <th>No. ISBN</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Lokasi Simpan</th>
                <th>Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach($buku as $value): ?>
              <tr>
                <td><?= $no++ . '.' ?></td>
                <td width="20%"><?= ucwords($value['judul']) ?></td>
                <td><?= $value['kode_buku'] ?></td>
                <td><?= $value['isbn'] ?></td>
                <td><?= ucwords($value['penulis']) ?></td>
                <td><?= ucwords($value['penerbit']) ?></td>
                <td><?= strtoupper($value['kode_lokasi']) ?></td>
                <td><?= $value['jumlah'] ?></td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>

    </div>
  </div>
</div><!--/.row-->
