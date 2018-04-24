<?php
	if (isset($_GET['menu'])) {
		if ($_GET['menu'] == 'berita') {
			echo "Manage Berita";
		}elseif ($_GET['menu'] == 'ebook') {
			echo "Manage Ebook";
		}elseif ($_GET['menu'] == 'galeri') {
			echo "Manage Galeri";
		}elseif ($_GET['menu'] == 'profil') {
			echo "About Me";
		}elseif ($_GET['menu'] == 'kategori') {
			echo "Manage Kategori";
		}elseif ($_GET['menu'] == 'kategori-create') {
			echo "Manage Kategori";
		}elseif ($_GET['menu'] == 'berita-create') {
			echo "Manage Berita";
		}
	}
	if(isset($_GET['ebook-edit'])){
		echo "Edit Ebook";
	}
	if(isset($_GET['kategori-edit'])){
		echo "Edit Kategori";
	}
	if (isset($_GET['berita-edit'])) {
		echo "Edit Berita";
	}
	else{
		echo "";
	}
?>