<?php

include '../db/db_conn.php';

$username = $_POST['username'];

$email = $_POST['email'];

$password = md5($_POST['password']);

$tanggal_lahir = $_POST['tanggal_lahir'];

$jenis_kelamin = $_POST['jenis_kelamin'];

$role = 2;

//quary data yang ada pada user yang memiki email yang diinputkan
$query = mysqli_query($conn, "select * from user where email = '$email'");

$cek = mysqli_num_rows($query);

//agar tidak ada email dumplicate
if($cek > 0){
    echo 'email sudah terdaftar';
} else {
    if(empty($username)){
        echo 'masukan username';
    }else {
        if(empty($email)){
            echo 'masukan email';
        }else{
            if(empty($password)){
                echo 'masukan password';
            } else {
                if($jenis_kelamin == "none"){
                    echo 'masukan jenis kelamin';
                }else{
                    if(empty($tanggal_lahir)){
                        echo 'masukan tanggal lahir';
                    }else{
                        $data = mysqli_query($conn,"insert into user (username, email, password, role,jenis_kelamin, tanggal_lahir) values('$username', '$email', '$password', '$role','$jenis_kelamin','$tanggal_lahir')");
    
                        if($data){
                            echo 'success';
                        } else {
                            echo 'failed';
                        }
                    }
           
                }

            }
        }
    }
}





?>