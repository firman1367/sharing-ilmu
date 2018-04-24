<?php
	if (isset($_GET['menu'])) {
		if ($_GET['menu'] == 'home') {
			echo "Home";
		}
		elseif ($_GET['menu'] == 'profile') {
			echo "Profile";
		}
		elseif($_GET['menu'] == 'galeri'){
			echo "Galeri";
		}
		elseif($_GET['menu'] == 'ebook'){
			echo "Ebook";
		}
		elseif($_GET['menu'] == 'upload'){
			echo "Ebook";
		}
	}
	elseif (isset($_GET['artikel'])) {
		echo "Artikel";
	}
	elseif (isset($_GET['kategori'])) {
		echo "Kategori";
	}
	else{
		echo "Home";
	}
?>