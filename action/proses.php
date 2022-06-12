<?php

session_start();

include '../db/db_conn.php';

$username = $_POST['username'];

$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	echo 'success';
}else{
	echo 'failed';
}



?>