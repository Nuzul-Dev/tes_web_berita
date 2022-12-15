<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
	<?=@$judul?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?=site_url()?>"><i class="fa fa-table"></i> Master</a></li>
		<li>Berita</li>
		<li class="active">Tambah</li>
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
				<form action="<?=site_url('admin/master/berita/simpan')?>" method="post" class="form-wajib">
					<div class="box-body">
						<div class="form-group">
							<label>Judul Berita</label>
							<div>
								<input autocomplete="false" type="text" required class="form-control" name="judul_berita" placeholder="Masukan Judul Berita">
							</div>
						</div>
						<div class="form-group">
							<label>Kategori Berita</label>
							<div>
								<select name="kategori_id" class="form-control select2">
									<option value="">Pilih Salah Satu</option>
									<?php  foreach ($kategori->result() as $row) :  ?>

										<option value="<?=$row->kategori_id?>"><?=$row->kategori?></option>

									<?php endforeach ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>Isi Berita</label>
							<div>
								<textarea name="isi_berita" class="form-control" placeholder="Isi Berita"></textarea>
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
            judul_berita: {
                validators: {
                    notEmpty: {
                        message: 'Judul Jangan Kosong..'
                    },
                }
            },
            kategori_id: {
                validators: {
                    notEmpty: {
                        message: 'Kategori Jangan Kosong..'
                    },
                }
            },
             isi_berita: {
                validators: {
                    notEmpty: {
                        message: 'Isi Berita Jangan Kosong..'
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