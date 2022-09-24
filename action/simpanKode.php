<?php
require_once("../db/db_conn.php");
$idUser = $_POST['iduser'];
$lastId = $_POST['lastId'];
$penyakit = $_POST['penyakit'];


$gabungan = $penyakit.$idUser.$lastId;
$kodelaporan = md5($gabungan);

//simpan data kode
$save = mysqli_query($conn,"INSERT INTO tbl_kode(id_riwayat, kode_laporan) VALUES(".$lastId.", '".$kodelaporan."')");

if($save){
    echo "berhasil simpan data";
}else {
    echo "gagal simpan data";
}

?>