<?php

$id = $_GET['id'];

include("../../db/db_conn.php");

$hapus = mysqli_query($conn, "DELETE FROM tbl_penyakit WHERE id_penyakit = '$id'");

if($hapus){
    header("location: ../penyakit.php?hapus=success");
}else {
    header("location: ../penyakit.php?hapus=gagal");

}

?>