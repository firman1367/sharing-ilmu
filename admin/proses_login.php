<?php
	session_start();
	include ('config/koneksi.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	//cek DB
	$sql	= "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
	$query	= mysqli_query($koneksi,$sql);
	$cek	= mysqli_num_rows($query);
	$data 	= mysqli_fetch_array($query);

	//field
	$id 		= $data['id_user'];
	$nama 		= $data['nama'];
	$username	= $data['username'];
	$password	= $data['password'];

	if ($cek) {

		$_SESSION['username'] 	= $username;
		$_SESSION['password'] 	= $password;
		$_SESSION['id_user'] 	= $id;
		$_SESSION['nama']    	= $nama;

		header('location:dashboard/index.php');
	}else{
		echo "<script language='javascript'>alert('Silahkan isi data dengan benar')</script>";
  		echo "<script language='javascript'>window.location = 'index.php'</script>";
	}
?>