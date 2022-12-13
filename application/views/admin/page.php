<!DOCTYPE html>

<html >

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?=@$title?></title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- DataTables -->

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- DataTables -->

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net/extensions/Responsive/css/dataTables.responsive.css">

  <!-- DataTables -->

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net/extensions/ColVis/css/dataTables.colVis.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Select2 -->

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/dist/css/select2.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">

  <!-- Bootstrap Validator -->

  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-validator/css/bootstrapValidator.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">



  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">



  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/jquery-ui/themes/base/jquery-ui.min.css">



  <link rel="stylesheet" href="<?=base_url()?>assets/custom_css/select2.css">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->



  <!-- Google Font -->

  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->

  <!-- jQuery 3 -->

  <script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery_latest.js"></script>

  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <script src="<?=base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

  <!-- Bootstrap 3.3.7 -->

  <script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- SlimScroll -->

  <script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

  <!-- FastClick -->

  <script src="<?=base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>

  <!-- AdminLTE App -->

  <script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>

  <!-- DataTables -->

  <script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

  <script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script src="<?=base_url()?>assets/bower_components/datatables.net/extensions/Responsive/js/dataTables.responsive.min.js"></script>

  <script src="<?=base_url()?>assets/bower_components/datatables.net/extensions/ColVis/js/dataTables.colVis.min.js"></script>

  <!-- Select2 -->

  <script src="<?=base_url()?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>

  <!-- Bootstrap Validator -->

  <script src="<?=base_url()?>assets/bower_components/bootstrap-validator/js/bootstrapValidator.min.js"></script>

  <!-- AdminLTE for demo purposes -->

  <script src="<?=base_url()?>assets/dist/js/demo.js"></script>

  <!-- Custom administrator -->

  <script src="<?=base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

  <!-- Custom administrator -->

  <!-- <script src="<?=base_url()?>assets/custom_js/administrator.js"></script> -->

  <!-- Custom Js Alert -->

  <script src="<?=base_url('assets/custom_js/alert.js')?>"></script>

  

  <script src="<?=base_url()?>assets/custom_js/select2.js"></script>



  <!-- Typeahead (AutoComplite) -->

  <!-- <script src="<?=base_url('assets/plugins/typeahead/bootstrap3-typeahead.min.js')?>"></script> -->

   <script type="text/javascript">

    

    var url = window.location.href;

    

    $(document).ready(function() {

    $('.sidebar-menu').tree();

    // var url = window.location;

    // Will only work if string in href matches with location

    $('li a[href="' + url + '"]').parent().addClass('active');

    // Will also work for relative and absolute hrefs

    $('.treeview-menu li a').filter(function() {

        return this.href == url;

    }).parent().parent().parent().addClass('active');

    $('.treeview-menu li a').filter(function() {

        return this.href == url;

    }).parent().parent().parent().addClass('menu-open');

});

var myVar;

myVar = setInterval(function() {

    myTimer();

}, 1000);



function myTimer() {

    var d = new Date();

    var t = d.toLocaleTimeString();

    $('.waktu').html(t);

}

  </script>

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">

    <?=$header?>

  </header>

  <aside class="main-sidebar">

    <section class="sidebar">

    <?=$sidebar?>

    </section>

  </aside>

  <div class="content-wrapper">

    <?=$content?>

  </div>

  <footer class="main-footer">

    <?=$footer?>

  </footer>

  <aside class="control-sidebar control-sidebar-dark">

    <div class="tab-content">

      <div id="control-sidebar-home-tab"></div>

    </div>

  </aside>

  <div class="control-sidebar-bg"></div>

</div>

</body>

</html>