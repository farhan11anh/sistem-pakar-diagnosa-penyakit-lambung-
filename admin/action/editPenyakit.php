<?php

include('../../db/db_conn.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$solusi = $_POST['solusi'];
$langkah = $_POST['langkah'];

$edit = mysqli_query($conn, "UPDATE tbl_penyakit SET name ='$nama', solusi = '$solusi', langkah_pencegahan = '$langkah' WHERE id_penyakit ='$id' ");


if($edit){
    header("location: ../penyakit.php?status=berhasil");
}else{
    header("location: ../editPenyakit.php?status=gagal");
}

?>