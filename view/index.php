<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>alert("anda harus login terlebih dahulu") </script>';
    if(!isset($_SESSION['username'])){
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
    <h2>Selamat Datang <?= $_SESSION['username'] ?></h2> <br>
    <a href="../action/logout.php">Logout</a>
</body>
</html>