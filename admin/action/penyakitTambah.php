<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$solusi = $_POST['solusi'];
$langkah = $_POST['langkah'];

include("../../db/db_conn.php");

$tambah = mysqli_query($conn, "INSERT INTO tbl_penyakit(id_penyakit, name, solusi, langkah_pencegahan) VALUES('$id','$nama','$solusi','$langkah')");


if($tambah){
    header("location: ../penyakit.php?masukan=berhasil");
}else{
    header("location: ../editPenyakit.php?masukan=gagal");
    
}

?>