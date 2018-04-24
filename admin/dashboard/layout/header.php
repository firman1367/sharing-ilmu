<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- judul -->
		<title>Panel Admin <?php include ('function/title.php'); ?></title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
	    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
	    <!-- Font Awesome -->
	    <link rel="stylesheet" href="../../bootstrap/css/font-awesome.min.css">
	    <!-- Ionicons -->
	    <link rel="stylesheet" href="../../bootstrap/css/ionicons.min.css">
	    <!-- iCheck for checkboxes and radio inputs -->
	    <link rel="stylesheet" href="../../plugins/iCheck/all.css">
	    <!-- Theme style -->
	    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
	    <!-- icon -->
	    <link rel="icon" href="../../dist/img/ar1.png">
	    <!-- DataTables -->
	    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
	    <!-- skin -->
	    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
	    <!-- fancy box -->
	    <link rel="stylesheet" href="../../dist/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	    <!-- original -->
	    <link rel="stylesheet" href="../../original.css" type="text/css">
	    <!-- summernote -->
		<link rel="stylesheet" href="../../dist/css/summernote.css">
	    
	</head>

	<body class="hold-transition skin-blue layout-top-nav">
		<div class="wrapper">
			<header class="main-header">
				<nav class="navbar navbar-static-top">
					<div class="navbar-header">
						<a href="index.php" class="navbar-brand"><b>ADMINISTRATOR</b></a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php"><span class="fa fa-home"></span> Dashboard</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span> Management <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="?menu=berita"><span class="fa fa-cogs"></span> Management Berita</a></li>
									<li><a href="?menu=kategori"><span class="fa fa-leaf"></span> Management Kategori</a></li>
									<li><a href="?menu=ebook"><span class="fa fa-book"></span> Management Ebook</a></li>
									<li><a href="?menu=galeri"><span class="fa fa-picture-o"></span> Management Galeri</a></li>
								</ul>
							</li>
							<li><a href="?menu=profil"><span class="fa fa-user"></span> About Me</a></li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- end header -->
