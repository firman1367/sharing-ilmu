<div class="box box-primary box-solid no-border">
	<div class="box-header">
		<i class="fa fa-leaf"></i>
		<span class="box-title">Edit Kategori</span>
		<div class="box-tools">
			<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="top"><span class="fa fa-minus"></span></a>
			<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="close" data-placement="top"><span class="fa fa-times"></span></a>
		</div>
	</div>
	<div class="box-body">
		<form role="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
			<div class="form-group">
				<label class="col-md-3 control-label">Nama Kategori</label>
				<div class="col-md-6">
					<input type="text" name="nama_kategori" class="form-control" value="<?php echo $row[1]; ?>">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<button class="btn btn-default" type="submit" name="kategori-update"><span class="fa fa-check-circle"></span> Simpan</button>
					<a class="btn btn-default" href="?menu=kategori"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
				</div>
			</div>
		</form><hr>
		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered">
				<thead style="background-color:#3C8DBC;color:white;">
					<tr>
						<th width="8%"><center>No.</center></th>
						<th width="50%"><center>Nama Kategori</center></th>
						<th><center>Aksi</center></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$nomer = 1;
						$query = mysqli_query($koneksi,("SELECT * FROM tb_kategori"));
						while($data = mysqli_fetch_array($query)){
					?>
					<tr>
						<td><center><?php echo $nomer; ?></center></td>
						<td><?php echo $data[1]; ?></td>
						<td>
							<center>
								<a href="?kategori-edit=<?php echo $data[0]; ?>" class="btn btn-warning"><span class="fa fa-pencil-square-o"></sapn> Edit</a>
								<a href="?kategori-delete=<?php echo $data[0]; ?>" onClick="return confirm('yakin akan menghapus?')" class="btn btn-danger"><span class="fa fa-times"> Delete</span></a>
							</span>
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