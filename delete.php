<?php
// mengaktifkan session pada php
session_start();

 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim 
$id = $_GET['id'];
 
$sql = "delete from agenda where id='".$id."'";
$query = mysqli_query($konek, $sql);
if($query){
	echo "<script>alert('Berhasil dihapus');history.go(-1);</script>";
    header("location:admin.php#read");
}else{
	echo "<script>alert('Gagal dihapus');history.go(-1);</script>";
    header("location:admin.php#read");
}

 
?>