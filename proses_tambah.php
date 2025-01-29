<?php
// mengaktifkan session pada php
session_start();

 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$nama = $_POST['nama'];
$waktu = $_POST['waktu'];
$keterangan = $_POST['keterangan'];
 
$sql = "INSERT INTO agenda (nama, waktu, keterangan)
VALUES ('".$nama."', '".$waktu."', '".$keterangan."')";
$query = mysqli_query($konek, $sql);
if($query){
    header("location:admin.php#read");
}else{
    header("location:tambah.php");
}

 
?>