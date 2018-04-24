<?php
	if(isset($_GET['kategori'])){
		$id = $_GET['kategori'];

	$query = mysqli_query($koneksi,("SELECT nama_kategori FROM tb_kategori WHERE slug_kategori = '$id'"));
	$data = mysqli_fetch_array($query);
	}
?>
<div class="box box-danger box-solid no-border">
	<div class="box-header">
		<i class="fa fa-leaf"></i>
		<span class="box-title">Kategori : <?php echo $data[0]; ?></span>
	</div>
	<div class="box-body">
		<?php
			$query1 = mysqli_query($koneksi,("SELECT a.slug, a.judul, b.nama_kategori
									 FROM tb_berita AS a
									 INNER JOIN tb_kategori AS b USING(id_kategori)
									 WHERE slug_kategori = '$id'"));
			while($data1 = mysqli_fetch_array($query1)){
		?>
		<a class="btn bg-olive btn-flat" href="artikel-<?php echo $data1[0]; ?>" style="margin-top:10px;"><span class="fa fa-angle-double-right"></span> <?php echo $data1[1]; ?></a><br>
		<?php
			}
		?>
		<div style="clear:both;"></div><hr>
		<a class="btn bg-olive btn-flat" href="javascript:history.back()"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
	</div>
</div>
	