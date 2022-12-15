<!-- Content Header (Page header) -->

<section class="content-header">

	<h1>

	<?=$judul_content?> 

	</h1>

	<ol class="breadcrumb">

		<li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Halaman Utama</a></li>

		<li class="active">Dashboard</li>

	</ol>

</section>

<section class="content">

    <div class="row">
        <div class="col-lg-4 col-xs-12">

			<div class="info-box">

            <span class="info-box-icon bg-blue"><i class="fa fa-user"></i></span>

            <div class="info-box-content">

              <span class="info-box-text">JUMLAH PENGGUNA</span>

              <span class="info-box-number"><?=@$total_pengguna?> Orang</span>

            </div>

          </div>

		</div>

		 <div class="col-lg-4 col-xs-12">

			<div class="info-box">

            <span class="info-box-icon bg-blue"><i class="fa fa-list"></i></span>

            <div class="info-box-content">

              <span class="info-box-text">JUMLAH KATEGORI</span>

              <span class="info-box-number"><?=@$total_kategori?></span>

            </div>

          </div>

		</div>

		<div class="col-lg-4 col-xs-12">

			<div class="info-box">

            <span class="info-box-icon bg-blue"><i class="fa fa-book"></i></span>

            <div class="info-box-content">

              <span class="info-box-text">JUMLAH BERITA</span>

              <span class="info-box-number"><?=@$total_berita?></span>

            </div>

          </div>

		</div>

    </div>

</section>

<link rel="stylesheet" href="<?=base_url('assets/bower_components/morris.js/morris.css')?>">

<script src="<?=base_url('assets/bower_components/raphael/raphael.min.js')?>"></script>

<script src="<?=base_url('assets/bower_components/morris.js/morris.min.js')?>"></script>

<script src="<?=base_url('assets/bower_components/chart.js/Chart.min.js')?>"></script>

<script src="<?=base_url('assets/bower_components/chart.js/Chart.js')?>"></script>