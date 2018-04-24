<div class="box box-primary box-solid no-border">
	<div class="box-header with-border">
		<i class="fa fa-cogs"></i>
		<span class="box-title">Management Artikel : Input Artikel</span>
		<div class="box-tools">
			<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="bottom"><span class="fa fa-minus"></span></a>
			<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="close" data-placement="bottom"><span class="fa fa-times"></span></a>
		</div>
	</div>
	<div class="box-body">
		<form role="form" action="?menu=berita-create" class="form-horizontal" enctype="multipart/form-data" method="POST">
			<div class="form-group">
				<label class="col-md-3 control-label">Judul Artikel</label>
				<div class="col-md-6">
					<input type="hidden" class="form-control" name="id_user" readonly="readonly" value="<?php echo $_SESSION['id_user'] ?>">
					<input type="text" class="form-control" name="judul" placeholder="Input Judul Berita" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 cobtrol-label">Kategori</label>
				<div class="col-md-6">
					<select class="form-control" name="id_kategori">
						<?php 
							$query = mysqli_query($koneksi,("SELECT * FROM tb_kategori"));
							foreach($query as $data){
						?>
						<option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['nama_kategori']; ?></option>
						<?php
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Foto</label>
				<div class="col-md-6">
					<input type="file" name="foto" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label">Konten Artikel</label>
				<div class="col-md-8">
					<textarea class="form-control" id="summernote" rows="10" cols="10" name="konten"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-default" name="create-berita" style="margin-right:5px;"><span class="fa fa-check-circle"></span> Simpan</button>
					<button type="reset" class="btn btn-default"><span class="fa fa-times-circle"></span> Cancel</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- tabel berita -->
<div class="box box-primary box-solid no-border">
	<div class="box-header">
		<i class="fa fa-cogs"></i>
		<span class="box-title">Data Artikel</span>
		<div class="box-tools">
			<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="top"><span class="fa fa-minus"></span></a>
			<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="close" data-placement="top"><span class="fa fa-times"></span></a>
		</div>
	</div>
	<div class="box-body">
		<div class="table-responsive no-peading">
			<table class="table table-hover table-striped table-bordered" id="example1">
				<thead>
					<tr>
						<th width="8%"><center>No.</center></th>
						<th width="38%"><center>Judul</center></th>
						<th width="25%"><center>Kategori</center></th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$nomer = 1;
						$query = mysqli_query($koneksi,("SELECT a.id_berita, a.judul, b.nama_kategori 
														 FROM tb_berita AS a
														 INNER JOIN tb_kategori AS b ON a.id_kategori = b.id_kategori
														 ORDER BY judul ASC"));
						while ($data = mysqli_fetch_array($query)){
					?>
					<tr>
						<td><center><?php echo $nomer; ?></center></td>
						<td><?php echo $data[1]; ?></td>
						<td><?php echo $data[2]; ?></td>
						<td>
							<center>
								<a href="?berita-detail=<?php echo $data[0]; ?>" class="btn btn-success"><span class="fa fa-check-square-o"></span> Detail</a>
								<a href="?berita-edit=<?php echo $data[0]; ?>" class="btn btn-warning"><span class="fa fa-pencil-square-o"></span> Edit</a>
								<a href="?berita-delete=<?php echo $data[0]; ?>" class="btn btn-danger" onClick="return confirm('anda yakin akan menghapus ini?')"><span class="fa fa-times"></span> Delete</a>
							</center>
						</td>
					</tr>
					<?php 
						$nomer++; }
					?>	
				</tbody>
			</table>
		</div>
	</div>
</div>