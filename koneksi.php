<?php
	$host = 'localhost'; 
	$user = 'root';
	$pass = '';
	$db	= 'mazza';

	$konek	= mysqli_connect($host,$user,$pass,$db);
	if (!$konek){
		echo 'Tidak dapat terhubung ke database';
	}
?>