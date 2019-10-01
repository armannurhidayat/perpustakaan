<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin/home') ?>">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Data Ebook</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Data Ebook</h1>
    </div>
  </div><!--/.row-->

  <?php $this->load->view('layouts/__alert') ?>

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
          <a href="<?= base_url('admin/data_ebook/tambah') ?>">
            <button class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Tambah Data</button>
          </a>
        </div>

        <div class="panel-body">
          <table id="datatable" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kode</th>
                <th>Penulis</th>
                <th>Klasifikasi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach($ebook as $value): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td width="25%"><?= ucwords($value['judul']) ?></td>
                <td><?= $value['kode_ebook'] ?></td>
                <td><?= empty($value['penulis']) ? '-' : ucwords($value['penulis']) ?></td>
                <td><?= ucwords($value['nama_klas']) ?></td>
                <td align="center">
                  <a href="<?= base_url('admin/data_ebook/delete/' . $value['id_ebook']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash"></i> Delete
                  </a>
                  <a target="_blank" href="<?= base_url('admin/data_ebook/baca/' . $value['id_ebook']) ?>" class="btn btn-primary btn-xs">
                    <i class="fa fa-search"></i> Lihat
                  </a>
                </td>
              </tr>
            <?php endforeach ?>
            </tbody>
          </table>
        </div>

    </div>
  </div>
</div>
