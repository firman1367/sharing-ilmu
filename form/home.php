	<div id="example5" class="slider-pro" style="border:2px solid white;border-radius:2px;">
	
		<div class="sp-slides">
		<?php
			$query = mysqli_query($koneksi,("SELECT judul, konten, foto FROM tb_berita"));
			while($data = mysqli_fetch_array($query)){
		?>
			<div class="sp-slide">
				<img class="sp-image" src="dist/css/images/blank.gif"
					data-src="admin/dashboard/<?php echo $data[2]; ?>"
					data-retina="admin/dashboard/<?php echo $data[2]; ?>"/>
			</div>
		<?php } ?>
		</div>

		<div class="sp-thumbnails">
		<?php
			$query = mysqli_query($koneksi,("SELECT slug, judul, konten, foto FROM tb_berita"));
			while($data = mysqli_fetch_array($query)){
		?>
			<div class="sp-thumbnail">
				<div class="sp-thumbnail-image-container">
					<img style="height:100%;width:100%;" class="sp-thumbnail-image" src="admin/dashboard/<?php echo $data[3]; ?>"/>
				</div>
				<div class="sp-thumbnail-text" style="height:80px;background-color:#494E58;">
					<div class="sp-thumbnail-title"><a class="link_berita" href="artikel-<?php echo $data[0]; ?>"><b><?php echo $data[1]; ?></b></a></div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div><br>

	

	<?php
		#------- memulai page number -------------------------------------------------------------------------------------#
		$dataPerPage = 4; 
		if(isset($_GET['halaman']))
		{	
			$noPage = $_GET['halaman'];
		}else{	
			$noPage = 1;
		}
		$offset  	 	= ($noPage - 1) * $dataPerPage;
		$query 			= mysqli_query($koneksi,("SELECT slug, judul, konten, foto, tanggal FROM tb_berita ORDER BY id_berita DESC LIMIT $offset, $dataPerPage"));
		$hitung_record 	= mysqli_query($koneksi,("SELECT COUNT(id_berita) AS jumData FROM tb_berita"));
		$data          	= mysqli_fetch_array($hitung_record);
		$jumData       	= $data['jumData'];
		$jumPage  		= ceil($jumData/$dataPerPage);
		# ceil digunakan untuk membulatkan hasil pembagian 
		while($data = mysqli_fetch_array($query)){
	?>
	<div class="box box-danger box-solid no-border">
		<div class="box-header with-border">
			<i class="fa fa-tags"></i>
			<span class="box-title"></span><b style="font-size:18px;"><?php echo $data['judul']; ?></b></span>
			<div class="box-tools">
				<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="bottom"><span class="fa fa-minus"></span></a>
				<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="close" data-placement="bottom"><span class="fa fa-times"></span></a>
			</div>
		</div>
		<div class="box-body">
			<a class="fancybox" href="admin/dashboard/<?php echo $data[3]; ?>">
				<img src="admin/dashboard/<?php echo $data[3]; ?>" class="img_berita">
			</a>
			<div class="btn bg-olive btn-flat" style="margin-bottom:10px;"><?php echo $data[4]; ?></div><br>
			<p align="justify"><?php echo substr($data['konten'],0,250); ?> ....</p><br>
			<div style="clear:both;"></div>
			<div class="read">
				<a href="artikel-<?php echo $data[0]; ?>" class="btn bg-olive btn-flat">Selengkapnya <span class="fa fa-arrow-circle-right"></span></a>
			</div>
		</div>
	</div>
	<?php 
		} 
	?>

	<!--  menampilkan page number di bawah post -->
	<div>
		<ul class="pagination">
			<?php
			$link = "home-halaman-";
				# menampilkan link previous
			if ($noPage > 1) echo  "<li><a href='".$link."".($noPage-1)."'>&larr; Prev</a></li>";
				# memunculkan nomor halaman dan linknya
			for($jml_hal = 1; $jml_hal <= $jumPage; $jml_hal++)
			{
				if($noPage == $jml_hal){
					echo "<li class='active'><a href='#' style='cursor'>".$jml_hal."</a></li> ";
				}else{
					echo "<li><a href='".$link."".$jml_hal."'>".$jml_hal."</a></li> ";}
				}
				# menampilkan link next
				if ($noPage < $jumPage) echo "<li><a href='".$link."".($noPage+1)."'>Next &rarr;</a></li>";
			?>
		</ul>
	</div>