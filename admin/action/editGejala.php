<?php

include('../../db/db_conn.php');

$id = $_POST['id'];
$nama = $_POST['nama'];

$edit = mysqli_query($conn, "UPDATE tbl_gejala SET name ='$nama' WHERE id_gejala ='$id' ");


if($edit){
    header("location: ../gejala.php?status=berhasil");
}else{
    header("location: ../editGejala.php?status=gagal");
}

?>