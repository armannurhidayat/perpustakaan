<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Sistem Perpustakaan</title>
  <link href="<?= base_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/css/datepicker3.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/css/styles.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <div class="row" style="margin-top: 6%">
      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <?php $this->load->view('layouts/__alert') ?>
        <div class="login-panel panel panel-default" >
          <div class="panel-heading text-center">Silahkan Melakukan Login</div>
          <div class="panel-body">
            <form action="<?= base_url('auth/prosesLogin') ?>" method="POST" role="form">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
              <fieldset>
                <div class="form-group">
                  <input class="form-control" id="username" placeholder="Username" name="username" autofocus="" required="">
                </div>
                <div class="form-group">
                  <input class="form-control" id="password" placeholder="********" name="password" type="password" required="">
                </div>
                <div class="checkbox">
                  <label>
                    <input onclick="lihatPassword()" type="checkbox">Lihat Password
                  </label>
                </div>
                <button name="login" type="submit" class="btn btn-primary btn-block">Login</button>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section>
    <p style="margin-top: 55px" class="text-center">&copy; Copyright 2019.</p>
  </section>

  <script type="text/javascript">
    function lihatPassword() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

  <script src="<?= base_url('assets') ?>/js/jquery-1.11.1.min.js"></script>
  <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
</body>
</html>