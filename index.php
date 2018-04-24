<?php require_once('layout/header.php'); ?>

<div class="content-wrapper">

	<div class="container">

		<section class="content" style="margin-top:55px;">

			<div class="col-md-3">

				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user-2">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-white">
						<div class="widget-user-image">
							<a class="fancybox" href="/sharing-ilmu/dist/img/yosh.jpg">
								<img class="profile-user-img img-responsive img-circle" style="height:100px;" src="/sharing-ilmu/dist/img/yosh.jpg" alt="User profile picture">
							</a>
						</div><!-- /.widget-user-image -->
						<h3 class="profile-username text-center" style="color:white;"><b>Muhammad Firman</b></h3>
						<h5 class="text-muted text-center" style="color:white;"><b>Development</b></h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="admin/" target="_blank"><i class="pull-right"><span class="fa fa-sign-in"></span></i><b> Login Admin</b></a></li>
							<li><a href="profile"><b>Profile</b><i class="pull-right"><span class="fa fa-thumb-tack"></span></i></a></a></li>
							<li><a href="galeri"><b>Galeri</b><i class="pull-right"><span class="fa fa-thumb-tack"></span></i></a></li>
							<li><a href="https://www.facebook.com/muhammad.firman.319" target="_blank"><i class="pull-right"><span class="fa fa-facebook-square"></span></i><b> Facebook</b></a></li>
							<li><a href="https://twitter.com/Firman1803" target="_blank"><i class="pull-right"><span class="fa fa-twitter"></span></i><b> Twitter</b></a></li>
						</ul>
					</div>
				</div><!-- /.widget-user -->

			</div>

			<div class="col-md-6">
				<?php include ('function/content.php'); ?>
			</div>

			<div class="col-md-3">
				<div class="box box-danger box-solid no-border">
					<div class="box-header">
						<center><span class="box-title"><i class="fa fa-tags"></i> TOP ARTIKEL</span></center>
					</div>
					<div class="box-body">
						<ul class="menu_nav">
						<?php
							$sql 	= "SELECT slug, judul FROM tb_berita ORDER BY judul DESC LIMIT 5";
							$query 	= mysqli_query($koneksi,$sql);
							foreach ($query as $data) {
						?>

							<a href="artikel-<?php echo $data['slug'];?>">
								<li><b><span class="fa fa-bookmark"></span> <?php echo $data['judul']; ?></b></li>
							</a>

						<?php
							}
						?>
						</ul>
					</div>
				</div>
				<div class="box box-danger box-solid no-border">
					<div class="box-header">
						<center><span class="box-title"><i class="fa fa-tags"></i> KATEGORI ARTIKEL</span></center>
					</div>
					<div class="box-body">

						<ul class="menu_nav">
						<?php
							$sql 	= "SELECT slug_kategori, nama_kategori FROM tb_kategori ORDER BY nama_kategori ASC";
							$query 	= mysqli_query($koneksi,$sql);
							foreach ($query as $data){
						?>

							<a href="kategori-<?php echo $data['slug_kategori']; ?>">
								<li><b><span class="fa fa-bookmark"></span> <?php echo $data['nama_kategori']; ?></b></li>
							</a>

						<?php
							}
						?>
						</ul>

					</div>
				</div>
			</div>

		</section>

	</div>

</div>

<?php require_once('layout/footer.php'); ?>
