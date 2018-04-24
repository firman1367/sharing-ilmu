<!-- fungsi conver ukuran file -->
<?php
	function bytes_converter($bytes) {
		$satuan= array('Bytes', 'KB', 'MB', 'GB', 'TB');
		$kali= floor(log($bytes, 1024));
		$bagi= round($bytes / pow(1024, $kali), 2);
		return $bagi.$satuan[$kali]; 
	}
?>
<!-- end -->

<div class="box box-primary box-solid no-border">
	<div class="box-header">
		<i class="fa fa-book"></i>
		<span class="box-title">Edit Ebook</span>
		<div class="box-tools">
			<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="top"><span class="fa fa-minus"></span></a>
			<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="close" data-placement="top"><span class="fa fa-times"></span></a>
		</div>
	</div>
	<div class="box-body">

		<form role="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
			<div class="form-group">
				<label class="col-md-3 control-label">Nama Ebook</label>
				<div class="col-md-6">
					<input type="text" name="nama_file" class="form-control" value="<?php echo $row['nama_file'] ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<button class="btn btn-default" type="submit" name="ebook-update"><span class="fa fa-check-circle"></span> Simpan</button>
					<a class="btn btn-default" href="?menu=ebook"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
				</div>
			</div>
		</form><hr>

		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered" id="example1">
				<thead>
					<tr>
						<th width="8%">No.</th>
						<th><center>Nama File</center></th>
						<th width="15%"><center>Ukuran</center></th>
						<th width="15%"><center>Tipe File</center></th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$nomer = 1;
						$query = mysqli_query($koneksi,("SELECT * FROM tb_ebook"));
						while($data = mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $nomer; ?></td>
						<td><?php echo $data['nama_file']; ?></td>
						<td><?php echo bytes_converter($data['ukuran_file']); ?></td>
						<td><?php echo $data['tipe_file']; ?></td>
						<td>
							<center>
								<a class="btn btn-warning" href="?ebook-edit=<?php echo $data[0]; ?>"><span class="fa fa-pencil-square-o"></span> edit</a>
								<a class="btn btn-danger" href="?ebook-delete=<?php echo $data[0]; ?>" onClick="return confirm('yakin akan menghapus ini?')"><span class="fa fa-times"></span> delete</a>
							</center>
						</td>
					</tr>
					<?php
						$nomer ++;
						}
					?>
				</tbody>
			</table>
		</div>

	</div>
</div>