<?php

$id = $_GET['id'];

include("../../db/db_conn.php");

$hapus = mysqli_query($conn, "DELETE FROM tbl_aturan WHERE id_aturan = '$id'");

if($hapus){
    header("location: ../aturan.php?hapus=success");
}else {
    header("location: ../aturan.php?hapus=gagal");

}

?>