<?php

$id = $_GET['id'];

include("../../db/db_conn.php");

$hapus = mysqli_query($conn, "DELETE FROM tbl_gejala WHERE id_gejala = '$id'");

if($hapus){
    header("location: ../gejala.php?hapus=success");
}else {
    header("location: ../gejala.php?hapus=gagal");

}

?>