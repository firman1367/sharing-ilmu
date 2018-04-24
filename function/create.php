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
                $lokasi = 'admin/dashboard/files/'.$nama.'.'.$file_ext;
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