<?php

session_start();

include '../db/db_conn.php';

$email = $_POST['email'];

$password = md5($_POST['password']);

// menyeleksi data admin dengan email dan password yang sesuai
$data = mysqli_query($conn,"select * from user where email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";

	echo 'success';
}else{
	echo 'failed';
}



?>