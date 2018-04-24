<?php
	session_start();
	include ('config/koneksi.php');
?>

<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- judul -->
		<title><?php include ('function/title.php'); ?></title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
	    <link rel="stylesheet" href="/sharing-ilmu/bootstrap/css/bootstrap.min.css">
	    <!-- Font Awesome -->
	    <link rel="stylesheet" href="/sharing-ilmu/bootstrap/css/font-awesome.min.css">
	    <!-- Ionicons -->
	    <link rel="stylesheet" href="/sharing-ilmu/bootstrap/css/ionicons.min.css">
	    <!-- iCheck for checkboxes and radio inputs -->
	    <link rel="stylesheet" href="/sharing-ilmu/plugins/iCheck/all.css">
	    <!-- Theme style -->
	    <link rel="stylesheet" href="/sharing-ilmu/dist/css/AdminLTE.min.css">
	    <!-- icon -->
	    <link rel="icon" href="/sharing-ilmu/dist/img/ar2.png">
	    <!-- skin -->
	    <link rel="stylesheet" href="/sharing-ilmu/dist/css/skins/_all-skins.min.css">
	    <!-- fancy box -->
	    <link rel="stylesheet" href="/sharing-ilmu/dist/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	    <!-- original -->
	    <link rel="stylesheet" href="/sharing-ilmu/original.css" type="text/css">
	    <!-- slider pro -->
	    <link rel="stylesheet" type="text/css" href="/sharing-ilmu/dist/css/slider-pro.min.css" media="screen"/>
		<link rel="stylesheet" type="text/css" href="/sharing-ilmu/dist/css/slider-pro.css" media="screen"/>

	</head>

	<body class="hold-transition skin-red layout-top-nav">
		<div class="wrapper">
			<header class="main-header">
				<nav class="navbar navbar-fixed-top">
					<div class="navbar-header">
						<a href="home" class="navbar-brand"><b>SK - SITE</b></a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="home"><span class="fa fa-home"></span> Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-leaf"></span> Artikel <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<?php
										$query = mysqli_query($koneksi,("SELECT slug_kategori, nama_kategori FROM tb_kategori ORDER BY nama_kategori ASC"));
										while($data = mysqli_fetch_array($query)){
											?>
											<li><a href="kategori-<?php echo $data['slug_kategori']; ?>"><?php echo $data[1]; ?></a></li>
									<?php
										}
									?>
								</ul>
							</li>
							<li><a href="ebook"><span class="fa fa-book"></span> Ebook</a></li>
							<li><a href="galeri"><span class="fa fa-picture-o"></span> Galeri</a></li>
							<li><a href="profile"><span class="fa fa-user"></span> About Me</a></li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- end header -->
