<?php

$id_penyakit = $_POST['id_penyakit'];
$id_gejala = $_POST['id_gejala'];

include("../../db/db_conn.php");

$tambah = mysqli_query($conn, "INSERT INTO tbl_aturan(id_penyakit, id_gejala) VALUES('$id_penyakit','$id_gejala')");


if($tambah){
    header("location: ../aturan.php?masukan=berhasil");
}else{
    header("location: ../aturanTambah.php?masukan=gagal");
    
}

?>