<?php

session_start();

include_once("../db/db_conn.php");

$penyakit_id = $_POST['penyakit_id'];

//mendapatkan data penyakit
$queryP = "SELECT * FROM tbl_penyakit WHERE id_penyakit = '".$penyakit_id."'";
$resP = mysqli_query($conn, $queryP);
while($p = mysqli_fetch_array($resP)){
    $dataP[] = $p;
}

//mendapatkan gejala
$queryG = "SELECT name, id_gejala FROM tbl_gejala WHERE id_gejala IN(SELECT id_gejala FROM `tbl_aturan`WHERE id_penyakit = '".$penyakit_id."')";
$resG = mysqli_query($conn, $queryG);
while($p = mysqli_fetch_array($resG)){
    $dataG[] = $p;
}

for($i=0;$i<count($dataG);$i++){
    $dataGj[] = $dataG[$i]['name'];
}

for($i=0;$i<count($dataG);$i++){
    $idG[] = $dataG[$i]['id_gejala'];
}

$data = [
    "penyakit" => $dataP,
    "gejala" => $dataGj,
    'idgejala' => $idG
];

echo json_encode($data);

?>