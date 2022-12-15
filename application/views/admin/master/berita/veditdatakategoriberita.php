<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
	<?=@$judul?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?=site_url()?>"><i class="fa fa-table"></i> Master</a></li>
		<li>Kategori Berita</li>
		<li class="active">Edit</li>
	</ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-lg-8">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">Form</h3>
					<div class="box-tools pull-right">
						<a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-box-tool" data-toggle="tooltip" title="Kembali">
							<i class="fa fa-arrow-left"></i>
						</a>
					</div>
				</div>
				<form action="<?=site_url('admin/master/kategoriberita/edit/'.$kategori_id)?>" method="post" class="form-wajib">
					<div class="box-body">
						<div class="form-group">
							<label>Kategori Berita</label>
							<div>
								<input value="<?=$kategori->kategori?>" autocomplete="false" type="text" class="form-control" name="kategori" placeholder="Masukan Kategori Berita">
							</div>
						</div>
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-lg-4 col-lg-offset-8">
								<div class="row">
									<div class="col-xs-6">
										<button type="reset" name="ulangi" class="btn btn-danger btn-flat btn-block">Reset</button>
									</div>
									<div class="col-xs-6">
										<button type="submit" class="btn btn-success btn-flat btn-block">Simpan</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">Jam</h3>
				</div>
				<div class="box-body text-center">
					<h2 class="waktu"></h2>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
var url_1 = window.location.href;
var url_2 = url_1.substring(0, url_1.lastIndexOf('/tambah'));
var fw = $('.form-wajib');
var ulangi = $('[name="ulangi"]');

$(() => {

    fw.bootstrapValidator({
        fields: {
            kategori: {
                validators: {
                    notEmpty: {
                        message: 'Kategori Jangan Kosong..'
                    },
                }
            },
        }
    });
    ulangi.on('click', (e) => {
        fw[0].reset();
        fw.bootstrapValidator('resetForm', true);
    });
});


</script>