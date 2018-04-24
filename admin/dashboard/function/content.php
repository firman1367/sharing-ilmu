<?php
	if (isset($_GET['menu'])) {
		if ($_GET['menu'] == 'profil') {
			include ('form/profil.php');
		}elseif ($_GET['menu'] == 'galeri') {
			include ('form/galeri.php');
		}elseif ($_GET['menu'] == 'home') {
			include ('form/home.php');
		}elseif ($_GET['menu'] == 'ebook') {
			include ('form/ebook.php');
		}elseif ($_GET['menu'] == 'upload') {
			include ('function/create.php');
			include ('form/ebook.php');
		}
		elseif ($_GET['menu'] == 'berita') {
			include ('form/berita.php');
		}elseif ($_GET['menu'] == 'berita-create') {
			include('function/create.php');
			include ('form/berita.php');
		}
		elseif ($_GET['menu'] == 'kategori') {
			include ('form/kategori.php');
		}elseif ($_GET['menu'] == 'kategori-create') {
			include('function/create.php');
			include ('form/kategori.php');
		}
	}
	//fungsi detail
	elseif (isset($_GET['berita-detail'])) {
		include('form/berita_detail.php');
	}
	//fungsi edit
	elseif (isset($_GET['kategori-edit'])) {
		include('function/edit.php');
		include('form/edit_kategori.php');
	}
	elseif (isset($_GET['berita-edit'])) {
		include('function/edit.php');
		include('form/edit_berita.php');
	}
	elseif (isset($_GET['ebook-edit'])) {
		include ('function/edit.php');
		include ('form/edit_ebook.php');
	}
	//fungsi delete
	elseif (isset($_GET['kategori-delete'])) {
		include('function/delete.php');
	}
	elseif (isset($_GET['berita-delete'])) {
		include('function/delete.php');
	}
	elseif (isset($_GET['ebook-delete'])) {
		include('function/delete.php');
	}
	else{
?>

<div class="row">
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-olive">

			<div class="inner">

				<?php
					$users = mysqli_query($koneksi,("SELECT COUNT(id_berita) AS total FROM tb_berita"));
					$data = mysqli_fetch_array($users);
				?>
				<h3><span class="value"><?php echo $data['total'] ?></span></h3>
				<p>DATA BERITA</p>

			</div>

			<div class="icon">
				<i class="ion ion-document-text"></i>
			</div>
			<a href="?menu=berita" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>

		</div>

	</div>

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-olive">

			<div class="inner">

				<?php
					$users = mysqli_query($koneksi,("SELECT COUNT(id_kategori) AS total FROM tb_kategori"));
					$data = mysqli_fetch_array($users);
				?>
				<h3><span class="value"><?php echo $data['total'] ?></span></h3>
				<p>DATA KATEGORI</p>

			</div>

			<div class="icon">
				<i class="ion ion-document-text"></i>
			</div>
			<a href="?menu=kategori" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>

		</div>

	</div>

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-olive">

			<div class="inner">

				<?php
					$users = mysqli_query($koneksi,("SELECT COUNT(id_file) AS total FROM tb_ebook"));
					$data = mysqli_fetch_array($users);
				?>
				<h3><span class="value"><?php echo $data['total']; ?></span></h3>
				<p>DATA EBOOK</p>

			</div>

			<div class="icon">
				<i class="ion ion-clipboard"></i>
			</div>
			<a href="?menu=ebook" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>

		</div>

	</div>

	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-olive">

			<div class="inner">

				<?php
					$users = mysqli_query($koneksi,("SELECT COUNT(id_kategori) AS total FROM tb_kategori"));
					$data = mysqli_fetch_array($users);
				?>
				<h3><span class="value">0</span></h3>
				<p>DATA GALERI</p>

			</div>

			<div class="icon">
				<i class="ion ion-images"></i>
			</div>
			<a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>

		</div>

	</div>

</div>
<div class="box box-primary box-solid no-border">
	<div class="box-header with-border">
		<i class="fa fa-home"></i>
		<span class="box-title">Dashboard</span>
		<div class="box-tools">
			<a class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="hide" data-placement="bottom"><span class="fa fa-minus"></span></a>
			<a class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="close" data-placement="bottom"><span class="fa fa-times"></span></a>
		</div>
	</div>
	<div class="box-body">
		<p style="font-size:20px;">Selamat Datang <?php echo $_SESSION['nama']; ?> di panel Management artikel.</p>
	</div>
</div>

<?php
	}
?>