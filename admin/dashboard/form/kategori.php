<div class="box box-primary box-solid no-border">
	<div class="box-header">
		<i class="fa fa-leaf"></i>
		<span class="box-title">Management Kategori</span>
		<div class="box-tools">
			<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="top"><i class="fa fa-minus"></i></a>
			<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="clode" data-placement="top"><i class="fa fa-times"></i></a>
		</div>
	</div>
	<div class="box-body">
	<a class="btn btn-primary btn-flat" data-keyboard="false" data-backdrop="static" data-toggle="modal" data-target="#create_kategori" style="margin-bottom:12px;"><span class="fa fa-pencil"></span> Create</a>
		<div class="table-responsive">
			<table id="example1" class="table table-hover table-striped table-bordered">
				<thead>
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
						foreach($query as $data){
					?>
					<tr>
						<td><center><?php echo $nomer; ?></center></td>
						<td><?php echo $data['nama_kategori']; ?></td>
						<td>
							<center>
								<a href="?kategori-edit=<?php echo $data['id_kategori']; ?>" class="btn btn-warning"><span class="fa fa-pencil-square-o"></sapn> Edit</a>
								<a href="?kategori-delete=<?php echo $data['id_kategori']; ?>" onClick="return confirm('anda yakin akan menghapus ini?')" class="btn btn-danger"><span class="fa fa-times"> Delete</span></a>
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
		<!-- Modal --> 
		<div class="modal fade" id="create_kategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
			<div class="modal-dialog"> 
				<div class="modal-content"> 
					<div class="modal-header" style="background-color:#3C8DBC;color:white;"> 
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
						<h4 class="modal-title" id="myModalLabel"> Tambah Kategori </h4>
					</div>
					<div class="modal-body"> 
						<form role="form" action="?menu=kategori-create" class="form-horizontal" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama kategori</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="nama_kategori" placeholder="Input Nama Kategori" required>
								</div>
							</div>
							<div class="modal-footer" style="text-align:left"> 
								<button type="submit" class="btn btn-primary" name="create-kategori" style="margin-right:5px;">Submit</button>
								<button type="reset" class="btn btn-primary">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end modal -->
	</div>
</div>