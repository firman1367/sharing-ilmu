<?php
	
	$host 		= "localhost";
	$user 		= "root";
	$pass 		= "";
	$db			= "sk";
	$koneksi	= mysqli_connect($host,$user,$pass,$db) or die(mysql_errno("koneksi gagal"));

?>