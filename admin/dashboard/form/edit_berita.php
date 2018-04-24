<div class="box box-primary box-solid no-border">
	<div class="box-header">
		<i class="fa fa-cogs"></i>
		<span class="box-title">Edit Berita</span>
		<div class="box-tools">
			<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="top"><span class="fa fa-minus"></span></a>
			<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="close" data-placement="top"><span class="fa fa-times"></span></a>
		</div>
	</div>
	<div class="box-body">
		<form role="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
			<div class="form-group">
				<label class="col-md-3 control-label">Judul Artikel</label>
				<div class="col-md-6">
					<input type="text" class="form-control" name="judul" value="<?php echo $row['judul'] ?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Kategori</label>
				<div class="col-md-6">
					<select class="form-control" name="id_kategori">
						<?php 
							$query = mysqli_query($koneksi,("SELECT * FROM tb_kategori"));
							while ($data = mysqli_fetch_array($query)){
						?>
						<option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['nama_kategori']; ?></option>
						<?php
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Konten Artikel</label>
				<div class="col-md-8">
					<textarea class="form-control" id="summernote" rows="10" cols="10" name="konten"><?php echo $row['konten']; ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<button class="btn btn-default" type="submit" name="berita-update"><span class="fa fa-check-circle"></span> Simpan</button>
					<a href="?menu=berita" class="btn btn-default"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
				</div>
			</div>
		</form>
	</div>
</div>