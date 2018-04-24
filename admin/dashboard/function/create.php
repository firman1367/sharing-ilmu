<!-- fungsi slug url -->
<?php

	function create_slug($string){
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
		return $slug;
	}

?>

<?php
	if (isset($_POST['create-kategori'])) {
		$nama 		= $_POST['nama_kategori'];
		$slug_url 	= create_slug($nama);
		$cek_data 	= mysqli_query($koneksi,("SELECT * FROM tb_kategori WHERE nama_kategori = '$nama'"));
		$cek   		= mysqli_num_rows($cek_data);

		if ($cek >= 1) {
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data Telah Tersedia.
					</div>";
		}
		else{

		//input data kedalam database
		$query = mysqli_query($koneksi,("INSERT INTO tb_kategori VALUES(NULL,'$nama','$slug_url')"));


		if ($query) {
        	echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
        }else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
			}
		}
	}
?>

<?php

	if (isset($_POST['create-berita'])) {
		$judul			= $_POST['judul'];
		$slug_url		= create_slug($judul);
		$id_user		= $_POST['id_user'];
		$id_kategori	= $_POST['id_kategori'];
		$konten			= $_POST['konten'];
		$allowed_ext    = array('jpg','jpeg','png','gif');
		$folder			= "foto";
		$tmp_name		= $_FILES["foto"]["tmp_name"];
		$file_name      = $_FILES["foto"]["name"];
		$file_ext       = strtolower(end(explode('.', $file_name)));
		$link 			= $folder."/".$file_name;

		date_default_timezone_set("Asia/Jakarta");
		$tgl_berita		= date('d M Y H:i a');

		//cek data
		$cek_data		= mysqli_query($koneksi,("SELECT judul FROM tb_berita WHERE judul = '$judul'"));
		$cek 			= mysqli_num_rows($cek_data);

		if ($cek >=1) {
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data Telah Tersedia.
					</div>";
		}else{

		if(in_array($file_ext, $allowed_ext) == true){
		//upload foto ke folder
		move_uploaded_file($tmp_name, $link);

		//input data kedalam database
		$query = mysqli_query($koneksi,("INSERT INTO tb_berita VALUES(NULL,'$judul','$id_user','$id_kategori','$link','$konten','$tgl_berita','$slug_url')"));

			if ($query) {
				echo 	"<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Done!</strong> Data berhasil di tambah.
						</div>";
	        }else{
				echo 	"<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Ups!</strong> Data gagal di tambah.
						</div>";
			}
		}else{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					ERROR: Ekstensi File Tidak Tersedia
				  </div>";
			}
		}
	}
?>

<!-- upload ebook -->
<?php
	if (isset($_POST['upload-ebook'])) {
		$allowed_ext    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
        $file_name      = $_FILES['file']['name'];
        $file_ext       = strtolower(end(explode('.', $file_name)));
        $file_size      = $_FILES['file']['size'];
        $file_tmp       = $_FILES['file']['tmp_name'];
        $nama           = $_POST['nama_file'];

        date_default_timezone_set("Asia/Jakarta");
        $tgl            = date('d M Y H:i');

        $cek_data 		= mysqli_query($koneksi,("SELECT nama_file FROM tb_ebook WHERE nama_file = '$nama'"));
        $cek 			= mysqli_num_rows($cek_data);

        if($cek >= 1){
        	echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data Telah Tersedia.
					</div>";
		}else{

        if(in_array($file_ext, $allowed_ext) == true){

            if($file_size < 20440700){
                $lokasi = 'files/'.$nama.'.'.$file_ext;
                move_uploaded_file($file_tmp, $lokasi);
                $query = mysqli_query($koneksi,("INSERT INTO tb_ebook VALUES(NULL, '$nama', '$file_ext', '$file_size', '$lokasi', '$tgl')"));

				if ($query) {
					echo "<div class='alert alert-success alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<strong>Upload File Sukses</strong>
						  </div>";
				}else{
					echo "<div class='alert alert-danger alert-dismissable'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							ERROR: Gagal Upload File
						  </div>";
				}
			}else{
				echo "<div class='alert alert-danger alert-dismissable'>
						 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						 ERROR: Maksimal Ukuran File 20MB
					  </div>";
			}
		}else{
			echo "<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					ERROR: Ekstensi File Tidak Tersedia
				  </div>";
			}
		}
	}
?>
