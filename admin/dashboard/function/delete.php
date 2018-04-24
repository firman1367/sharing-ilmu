<?php
	if (isset($_GET['kategori-delete'])) {
		$id = $_GET['kategori-delete'];

		$query = mysqli_query($koneksi,("DELETE FROM tb_kategori WHERE id_kategori = $id"));
		if ($query) {
			echo 	"<meta http-equiv='refresh' content='0;URL=?menu=kategori'>";
		}
	}elseif (isset($_GET['berita-delete'])) {
		$id = $_GET['berita-delete'];

		$query = mysqli_query($koneksi,("DELETE FROM tb_berita WHERE id_berita = $id"));
		if ($query) {
			echo 	"<meta http-equiv='refresh' content='0;URL=?menu=berita'>";
		}
	}elseif (isset($_GET['ebook-delete'])) {
		$id = $_GET['ebook-delete'];

		$query = mysqli_query($koneksi,("SELECT file FROM tb_ebook WHERE id_file = $id"));
		$data = mysqli_fetch_array($query);
		$query1 = mysqli_query($koneksi,("DELETE FROM tb_ebook WHERE id_file = $id"));
		unlink($data['file']);
		if ($query1) {
			echo 	"<meta http-equiv='refresh' content='0;URL=?menu=ebook'>";
		}
	}
?>