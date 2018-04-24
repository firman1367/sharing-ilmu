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
		<span class="box-title">Management Ebook</span>
		<div class="box-tools">
			<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="top"><span class="fa fa-minus"></span></a>
			<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="close" data-placement="top"><span class="fa fa-times"></span></a>
		</div>
	</div>
	<div class="box-body">

		<a class="btn btn-primary btn-flat" data-keyboard="false" data-backdrop="static" data-toggle="modal" data-target="#upload" style="margin-bottom:12px;"><span class="fa fa-upload"></span> Upload</a>
		
		<!-- Modal --> 
		<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
			<div class="modal-dialog"> 
				<div class="modal-content"> 
					<div class="modal-header" style="background-color:#3C8DBC;color:white;"> 
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
						<h4 class="modal-title" id="myModalLabel"><span class="fa fa-upload"></span> Upload File </h4>
					</div>
					<div class="modal-body"> 
						<form role="form" action="?menu=upload" class="form-horizontal" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label class="col-md-3 control-label">Nama File</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="nama_file" placeholder="Input Nama File" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Upload File</label>
								<div class="col-md-8">
									<input type="file" name="file" required>
								</div>
								<div class="col-md-8">
									<span><strong>(<i>ext : doc, docx, xls, xlsx, ppt, pptx, pdf, rar, zip</i>)</strong></span><br>
									<span><strong>(<i>maks : 20MB</i>)</strong></span>
								</div>
							</div>
							<div class="modal-footer" style="text-align:left"> 
								<button type="submit" class="btn bg-blue btn-flat" name="upload-ebook" style="margin-right:5px;">Submit</button>
								<button type="reset" class="btn bg-blue btn-flat">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end modal -->

		<div class="table-responsive">
			<table id="example1" class="table table-hover table-striped table-bordered">
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
						$nomer 	= 1;
						$query 	= mysqli_query($koneksi,("SELECT * FROM tb_ebook"));
						while ($data = mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $nomer; ?></td>
						<td><?php echo $data['nama_file']; ?></td>
						<td><?php echo bytes_converter($data['ukuran_file']); ?></td>
						<td><?php echo $data['tipe_file']; ?></td>
						<td>
							<center>
								<a class="btn btn-warning" href="?ebook-edit=<?php echo $data[0]; ?>"><span class="fa fa-pencil-square-o"></span> edit</a>
								<a class="btn btn-danger" href="?ebook-delete=<?php echo $data[0]; ?>" onClick="return confirm ('yakin untuk menghapus ini?')"><span class="fa fa-times"></span> delete</a>
							</center>
						</td>
					</tr>
					<?php 
						$nomer++;
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>