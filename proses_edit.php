<?php
// mengaktifkan session pada php
session_start();

 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$id = $_POST['id'];
$nama = $_POST['nama'];
$waktu = $_POST['waktu'];
$keterangan = $_POST['keterangan'];
 
$sql = "update agenda
set nama='".$nama."',
 waktu= '".$waktu."',
  keterangan= '".$keterangan."'
where id='".$id."'
  ";
$query = mysqli_query($konek, $sql);
if($query){
    header("location:admin.php#read");
}else{
    header("location:edit.php?id=$id");
}

 
?>