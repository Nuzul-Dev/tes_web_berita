<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?=$title?></title>

    <!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- <link rel="icon" href="<?=base_url('assets/icon.jpeg')?>"> -->

    <!-- Bootstrap 3.3.7 -->

    <link rel="stylesheet" href="<?=base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->

    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">

    <!-- iCheck -->

    <link rel="stylesheet" href="<?=base_url()?>assets/plugins/iCheck/square/red.css">

    <!-- Bootstrap Validator -->

    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-validator/css/bootstrapValidator.min.css">

   

    <script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap 3.3.7 -->

    <script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- iCheck -->

    <script src="<?=base_url()?>assets/plugins/iCheck/icheck.min.js"></script>

    <!-- Bootstrap Validator -->

    <script src="<?=base_url()?>assets/bower_components/bootstrap-validator/js/bootstrapValidator.min.js"></script>

    <script src="<?=base_url()?>assets/custom_js/login_validator.js" type="text/javascript"></script>

    <script src="<?=base_url()?>assets/custom_js/login.js" type="text/javascript"></script>

    <!-- Custom js -->

  </head>

  <!-- background-image: url('assets/images/police_car.jpg'); -->

  <body class="hold-transition login-page">

    <div class="container">

      <!-- /.login-logo -->

      <div style="margin-top: 120px" class="hidden-xs hidden-sm"></div>

      <div class="hidden-lg hidden-xl hidden-md"><br></div>
      <div class="hidden-lg hidden-xl hidden-md"><br></div>
      <div class="hidden-lg hidden-xl hidden-md"><br></div>
      <div class="hidden-lg hidden-xl hidden-md"><br></div>
      <div class="hidden-lg hidden-xl hidden-md"><br></div>

      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-2 hidden-xs"></div>

        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">

         <?php if (@$this->session->flashdata('gagal')): ?>

        <div class="alert alert-danger fade in">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

           <?php echo $this->session->flashdata('gagal');?>

        </div>

        <?php endif ?>

        <?php if (@$this->session->flashdata('berhasil')): ?>

        <div class="alert alert-info fade in">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <?=$this->session->flashdata('berhasil'); ?>

        </div>

        <?php endif ?>

          <div class="box box-primary">

            <div class="box-header with-border text-center">

              <h3>

                <a href="<?=base_url();?>" class="hidden-xs hidden-sm pull-center" style="color: red"><b style="color: black">Aplikasi</b> Tes Web Berita</a>

              </h3>

            </div>

            <div class="box-body">

              <form action="<?=site_url('home/ceklog')?>" class="login-ajah" method="post">

                <div class="form-group has-feedback">

                  <input type="text" class="form-control" name="username" placeholder="Nama Pengguna..">

                </div>

                <div class="form-group has-feedback">

                  <input type="password" class="form-control" name="password" placeholder="Katasandi...">

                </div>

                

                <div class="row">

                  <div class="col-xs-12">

                  <div class="form-group">

                    <button style="border-radius: 3px" type="submit" name="btnwe" class="btn btn-primary btn-block" >MASUK</button>

                  </div>

                  </div>

                  <div class="form-group">

                    <!-- <span>Lupa Password ? <a href="javascript:void(0)">Klik disini</a> </span> -->

                  </div>

                  <!-- /.col -->

                </div>

              </form>

            </div>

            <div class="box-footer">

              <h5 class="text-right" style="color: black;">Copyright &copy; 2022 Nuzul Test Web Berita </h5>

            </div>

          </div>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-2 hidden-xs"></div>

      </div>

      <!-- /.login-box-body -->

    </div>

    <!-- /.login-box -->

  </body>

</html>