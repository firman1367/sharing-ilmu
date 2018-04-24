<?php

	session_start();
    if(isset($_SESSION['username'])){

        //koneksi terpusat
        include ('../config/koneksi.php');
        $username   = $_SESSION['username'];
        require_once('layout/header.php');
?>

<div class="content-wrapper">

	<div class="container">

		<section class="content">

			<div class="col-md-3">
				<!-- Widget: user widget style 1 -->
				<div class="box box-widget widget-user-2">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-blue">
						<div class="widget-user-image">
							<a class="fancybox" href="../../dist/img/yosh.jpg">
								<img class="profile-user-img img-responsive img-circle" style="height:100px;" src="../../dist/img/yosh.jpg" alt="User profile picture">
							</a>
						</div><!-- /.widget-user-image -->
						<h3 class="profile-username text-center" style="color:white;"><b>Muhammad Firman</b></h3>
						<h5 class="text-muted text-center" style="color:white;"><b>Development</b></h5>
					</div>
					<div class="box-footer no-padding">
						<ul class="nav nav-stacked">
							<li><a href="?menu=profil"><b>Profile</b><i class="pull-right"><span class="fa fa-thumb-tack"></span></i></a></a></li>
							<li><a href="?menu=galeri"><b>Galeri</b><i class="pull-right"><span class="fa fa-thumb-tack"></span></i></a></li>
							<li><a href="../logout.php"><i class="pull-right"><span class="fa fa-sign-out"></span></i><b> Logout</b></a></li>
						</ul>
					</div>
				</div><!-- /.widget-user -->
			</div>

			<div class="col-md-9">
				<?php include ('function/content.php'); ?>
			</div>

		</section>

	</div>

</div>

<!-- footer -->
<?php require_once('layout/footer.php'); ?>
<!-- end footer -->

<?php
}else {
	session_destroy();
	header ('location:../index.php');
}
?>
