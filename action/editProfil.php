<?php

include_once("../db/db_conn.php");

$username = $_POST['username'];
$email = $_POST['email'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$password = md5($_POST['password']);
$user_id = $_POST['user_id'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '".$user_id."'");
$user = mysqli_fetch_array($query);


$data = $password == $user['password'];

//validasi password
if(empty($_POST['password'])){
    $data = [
        "msg" => "kosong"
    ];
    echo json_encode($data);
} else{
    if($password == $user['password'] ){
        //update data
        $updateD = "UPDATE user SET username = '$username', email = '$email', tanggal_lahir = '$tanggal_lahir' WHERE user_id = $user_id";
        $update = mysqli_query($conn, $updateD);
    
        // var_dump($updateD); var_dump($email); var_dump($tanggal_lahir); var_dump($user_id); die();
    
        if($update){
            $data = [
                "msg" => "berhasil"
            ];
    
            echo json_encode($data);
        }
    }else {
        $data = [
            "msg" => "gagal"
        ];
    
        echo json_encode($data);
    }
}



?>