<?php

session_start();

var_dump($_SESSION['status']);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    <link rel="shortcut icon" href="asset/icon/favicon.ico">
</head>
<body>
    <div style="float: right ;" >
        <?php
            if(isset($_SESSION['status'])){
            echo '<a href="action/logout.php">Logout</a>';
            }
        ?>
    </div> <br>
    <div style="float: right ;" >
        <?php
            echo date('l, d-M-Y');
        ?>
    </div>
    <h2>Selamat Datang di Aplikasi Kami</h2>

    <?php if(!isset($_SESSION['status'])){
    echo '<p>untuk menikmati fitur utama kami silahkan <a href="view/login.php">Login</a> terlebih dahulu, terimakasih ... </p>';
    } ?>
</body>
</html>