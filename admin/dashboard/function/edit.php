<!-- fungsi slug url -->
<?php

	function create_slug($string){
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
		return $slug;
	}

?>

<?php
	if (isset($_GET['kategori-edit'])) {
		$id = $_GET['kategori-edit'];

		if (isset($_POST['kategori-update'])) {
			$nama = $_POST['nama_kategori'];
			$slug_url = create_slug($nama);

			$query = mysqli_query($koneksi,("UPDATE tb_kategori SET nama_kategori = '$nama', slug_kategori = '$slug_url' WHERE id_kategori = '$id'"));

			if ($query) {
        	echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di update.
					</div>";
	        }else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
			}
		}

		$data = mysqli_query($koneksi,("SELECT * FROM tb_kategori WHERE id_kategori = $id"));
		$row  = mysqli_fetch_array($data);
	}
?>

<?php

	if (isset($_GET['ebook-edit'])) {
		$id = $_GET['ebook-edit'];

		if (isset($_POST['ebook-update'])) {
			$nama = $_POST['nama_file'];

			$query = mysqli_query($koneksi,("UPDATE tb_ebook SET nama_file = '$nama' WHERE id_file = '$id'"));

			if ($query) {
        	echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di update.
					</div>";
	        }else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
			}
		}

		$data = mysqli_query($koneksi,("SELECT * FROM tb_ebook WHERE id_file = $id"));
		$row  = mysqli_fetch_array($data);
	}

?>

<?php

	if (isset($_GET['berita-edit'])) {
		$id = $_GET['berita-edit'];

		if (isset($_POST['berita-update'])) {
			$judul			= $_POST['judul'];
			$slug_url		= create_slug($judul);
			$id_kategori	= $_POST['id_kategori'];
			$konten			= $_POST['konten'];

			$query = mysqli_query($koneksi,("UPDATE tb_berita SET judul = '$judul', slug = '$slug_url', id_kategori = '$id_kategori', konten = '$konten' WHERE id_berita = '$id'"));

			if ($query) {
        	echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di update.
					</div>";
			echo 	"<meta http-equiv='refresh' content='2;URL=?menu=berita'>";
	        }else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di update.
						</div>";
			}
		}

		$data = mysqli_query($koneksi,("SELECT * FROM tb_berita WHERE id_berita = $id"));
		$row  = mysqli_fetch_array($data);
	}

?>
