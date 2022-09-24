<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 60%;
        margin-left: auto; margin-right: auto; margin-top: 30px;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>
<body style="margin: 20px ;" >
    <h2 style="text-align: center ;" >HASIL DIAGNOSIS</h2>
    <p style="text-align: center;" >SISTEM PAKAR DIAGNOSIS PENYAKIT LAMBUNG</p>
    <hr>
    <div style="float: right ;" >
        <?php
            $time = date("d-m-Y",time());
            echo $time;
        ?>
    </div>
    <div>
    <table>
        <tr>
            <td>Nama</td>
            <td>FarhanAnh</td>
        </tr>
        <tr>
            <td>E-Mail</td>
            <td>hasna.danisa@gmail.com</td>
        </tr>
        <tr>
            <td>Penyakit</td>
            <td>Gastritis</td>
        </tr>
        <tr>
            <td>Gejala</td>
            <td>Sakit Perut, Perut Mual, Mengalami Muntah, Perut terasa begah</td>
        </tr>
        <tr>
            <td>Solusi</td>
            <td>Mengonsumsi suplemen probiotik akan memasukkan bakteri baik ke saluran pencernaan yang seharusnya dapat menghentikan penyebaran H. pylori dan membantu memulai proses penyembuhan usus.</td>
        </tr>
    </table>
    </div>
</body>
</html>