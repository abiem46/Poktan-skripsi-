<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url();?>/ds/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url();?>/ds/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?=$judul;?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?=base_url();?>/ds/assets/css/material-kit.css?v=2.0.7" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url();?>/ds/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">

  <div class="page-header header-filter" style="background-image: url('<?=base_url();?>/ds/assets/img/sawah3.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="user" method="post" action="<?= base_url('login'); ?>">
            <?= $this->session->flashdata('message'); ?>
              <div class="card-header card-header-success text-center">
                <h4 class="card-title">Login</h4>
              </div>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Username" id="id_anggota" name="id_anggota">
                  <?= form_error('id_anggota', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password.." id="password" name="password">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div>
                <p class="col-md mt-3 text-center">
                  Masukkan username dan password yang benar !!!
                </p>
              </div>
              <div class="col-md mt-3 text-center ">
                <button type="submit" class="btn btn-success">Masuk</button>
              </div>
              <div class="col-md mt-3 text-center ">
                <a href="<?=base_url();?>" class="btn btn-default ">Batal</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?=base_url();?>/ds/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>/ds/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>/ds/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>/ds/assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?=base_url();?>/ds/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?=base_url();?>/ds/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url();?>/ds/assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>

</html>