<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="#">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Dashboard</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Dashboard</h1>
    </div>
  </div><!--/.row-->

  <div class="panel panel-container">
    <div class="row">
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-teal panel-widget border-right">
          <div class="row no-padding"><em class="fa fa-xl fa-money color-blue"></em>
            <div class="large"><?= number_format($denda[0]['total_denda'], 0, ',' , '.') .',-' ?></div>
            <div class="text-muted">Total Kas Denda</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-blue panel-widget border-right">
          <div class="row no-padding"><em class="fa fa-xl fa-users color-orange"></em>
            <div class="large"><?= $peminjam ?></div>
            <div class="text-muted">Peminjaman Buku</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-orange panel-widget border-right">
          <div class="row no-padding"><em class="fa fa-xl fa-book color-teal"></em>
            <div class="large"><?= $ebook ?></div>
            <div class="text-muted">Total E-book</div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
        <div class="panel panel-red panel-widget ">
          <div class="row no-padding"><em class="fa fa-xl fa-book color-red"></em>
            <div class="large"><?= $buku ?></div>
            <div class="text-muted">Total Buku</div>
          </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Site Traffic
          <ul class="pull-right panel-settings panel-button-tab-right">
            <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
              <em class="fa fa-cogs"></em>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li>
                <ul class="dropdown-settings">
                  <li><a href="#">
                    <em class="fa fa-cog"></em> Settings 1
                  </a></li>
                  <li class="divider"></li>
                  <li><a href="#">
                    <em class="fa fa-cog"></em> Settings 2
                  </a></li>
                  <li class="divider"></li>
                  <li><a href="#">
                    <em class="fa fa-cog"></em> Settings 3
                  </a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body">
          <div class="canvas-wrapper">
            <canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>