<?php
session_start();

if(!isset($_SESSION['email'])){
    echo '<script>alert("anda harus login terlebih dahulu") </script>';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat Datang <?= $_SESSION['email'] ?></h2> <br>
    <p><a href="diagnosis.php">Daignosis</a></p>
    <a href="../action/logout.php">Logout</a>
</body>
</html>