<?php
// mengaktifkan session pada php
session_start();

 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($konek,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
    $data = mysqli_fetch_assoc($login);
 
    // cek jika user login sebagai admin
    if($data['status']=="1"){
 
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:admin.php");
 
    // cek jika user login sebagai pegawai
    }else if($data['status']=="0"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "user";
        // alihkan ke halaman dashboard pegawai
        header("location:user.php");

 
    }else{
 
        // alihkan ke halaman login kembali
        header("location:gagal.php");
    }    
}else{
    header("location:gagal.php");
}
 
?>