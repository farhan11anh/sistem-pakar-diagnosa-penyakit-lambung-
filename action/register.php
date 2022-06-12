<?php

include '../db/db_conn.php';

$username = $_POST['username'];

$email = $_POST['email'];

$password = md5($_POST['password']);

$role = 2;

$query = mysqli_query($conn, "select * from user where email = '$email'");

$cek = mysqli_num_rows($query);

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
                $data = mysqli_query($conn,"insert into user (username, email, password, role) values('$username', '$email', '$password', '$role')");
    
                if($data){
                    echo 'success';
                } else {
                    echo 'failed';
                }
            }
        }
    }
}





?>