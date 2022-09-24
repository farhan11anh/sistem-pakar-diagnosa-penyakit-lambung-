<?php

include_once("../db/db_conn.php");

$result = mysqli_query($conn, 'select * from tbl_gejala');

$gejala = mysqli_fetch_array($result);

$data = json_encode($gejala);

echo $data;

?>