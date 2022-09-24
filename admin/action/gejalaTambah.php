<?php

$id = $_POST['id'];
$nama = $_POST['nama'];

include("../../db/db_conn.php");

$tambah = mysqli_query($conn, "INSERT INTO tbl_gejala(id_gejala, name) VALUES('$id','$nama')");


if($tambah){
    header("location: ../gejala.php?masukan=berhasil");
}else{
    header("location: ../gejalaTambah.php?masukan=gagal");
    
}

?>