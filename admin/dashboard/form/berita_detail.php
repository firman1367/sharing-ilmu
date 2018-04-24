<?php
	if (isset($_GET['berita-detail'])) {
		$id = $_GET['berita-detail'];

		$query = mysqli_query($koneksi,("SELECT a.judul, b.nama_kategori, a.konten, c.nama , a.tanggal
										FROM tb_berita AS a
										INNER JOIN tb_kategori AS b ON a.id_kategori = b.id_kategori
										INNER JOIN tb_user AS c ON a.id_user = c.id_user
										WHERE id_berita = '$id'"));
		$data = mysqli_fetch_array($query);
	}
?>
<div class="box box-primary box-solid no-border">
	<div class="box-header">
		<i class="fa fa-leaf"></i>
		<span class="box-title">Detail Berita</span>
		<div class="box-tools">
			<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="top"><span class="fa fa-minus"></span></a>
			<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="close" data-placement="top"><span class="fa fa-times"></span></a>
		</div>
	</div>
	<div class="box-body">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-md-2 control-label">Judul</label>
				<label class="col-md-1 control-label" style="width:1%;">:</label>
				<div class="col-md-6" style="margin-top:7px;">
					<?php echo $data[0]; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Kategori</label>
				<label class="col-md-1 control-label" style="width:1%;">:</label>
				<div class="col-md-6" style="margin-top:7px;">
					<?php echo $data[1]; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Konten</label>
				<label class="col-md-1 control-label" style="width:1%;">:</label>
				<div class="col-md-9" style="margin-top:7px;">
					<?php echo $data[2]; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Nama Pemosting</label>
				<label class="col-md-1 control-label" style="width:1%;">:</label>
				<div class="col-md-6" style="margin-top:7px;">
					<?php echo $data[3]; ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Tanggal Posting</label>
				<label class="col-md-1 control-label" style="width:1%;">:</label>
				<div class="col-md-6" style="margin-top:7px;">
					<?php echo $data[4]; ?>
				</div>
			</div>
			<div style="border-top:2px solid #EEE;">
				<a class="btn btn-default" href="?menu=berita" style="margin-top:10px;"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
			</div>
		</form>
	</div>
</div>
