<?php

session_start();

$id_user = $_SESSION['id_user'];

    if(!isset($_SESSION['status'])){
        header("location:login.php");
    } 

    include_once("../db/db_conn.php");


    $queryId = "SELECT id_riwayat FROM `tbl_riwayat` ORDER BY id_riwayat DESC";
    $resultId = mysqli_query($conn, $queryId);
    $lastId= mysqli_fetch_array($resultId);
    $lastId = $lastId['id_riwayat']+1;
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>
  <div class="h-screen bg-cover bg-no-repeat" style="background-image: url('../assets/bghome.png')">
    <div class="z-10 navbar bg-base-transparent sticky text-white">
        <div class="flex-1 ml-5">
            <a class="btn btn-ghost normal-case text-xl" href="../index.php">stomachHeal</a>
        </div>
        <div class="flex-none mr-5">
        <div class="navbar">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                    </label>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-black rounded-box ">
                    <li class="bordered" ><a href="diagnosis.php" class="">Diagnosa</a></li>
                <li><a href="riwayat.php" class="hover:text-[#F16A70]">Riwayat</a></li>
                <li class="hover:text-[#F16A70] "><a href="../index.php"><button>Tentang</button></a></li>
                    </ul>
                    </div>

                    <!-- get last insert id -->
                    <input type="text" value="<?= $lastId ?>" id="lastInsert" name="lastInsert" hidden>
            </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal p-0">
                    <li class="bordered" ><a href="diagnosis.php" class="">Diagnosa</a></li>
                <li><a href="riwayat.php" class="hover:text-[#F16A70]">Riwayat</a></li>
                <li class="hover:text-[#F16A70] "><a href="../index.php"><button>Tentang</button></a></li>
                    
                    </ul>
                </div>
        </div>
            
            <ul class="menu menu-horizontal p-0">
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 py-1 mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        </div>
                    </label>
                    <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-black rounded-box w-52">
                        <li>
                        <a href="profile.php" class="justify-between">
                            Profil
                        </a>
                        </li>
                        <li><a href="../action/logout.php" >Keluar</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="z-0 text-[#EBE9E9]">
            <h1 class="mb-5 text-xl md:text-3xl font-bold text-center">Pilih gejala yang anda rasakan</h1>
            <div class="mx-auto">
                <div class="card w-40 sm:w-96 bg-black shadow-xl mx-auto my-7">
                    <figure class="px-3 pt-3 sm:px-10 sm:pt-10">
                        <img src="../assets/stomach.jpg" alt="Shoes" class="rounded-md sm:rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <p id="question" ></p>
                    </div>
                    <div id="answer" class="flex justify-center text-white">
                        <input type="text" id="iduser" value="<?=$id_user?>" hidden>

                        <div class=" my-5">
                            <div class="">
                            <div class="mx-auto">
                                <button id="yes" class=" btn bg-[#F16A70] rounded-sm px-5 py-2 mr-3">iya</button>
                            </div>
                            </div>
                        </div>
                        <div class=" my-5">
                            <div class="">
                            <div class="mx-auto">
                                <button id="no" class=" btn bg-[#F16A70] rounded-sm px-5 py-2 ">tidak</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <!-- <div class="right-0 absolute">
                <button class="bg-[#F16A70] rounded-sm px-5 py-2 mr-10">next</button>
            </div> -->
            
        </div>
    </div>

  </div>

  <!-- validasi login -->
  <?php
    if(!isset($_SESSION['email'])){
        echo '<script>alert("anda harus login terlebih dahulu") </script>';
        if(!isset($_SESSION['email'])){
            header('location: login.php');
        }
    }

    ?>

<script>
        $.ajax({
            url : "../action/Diagnose.php",
            success : function(data){
                // console.log(JSON.parse(data));

                let date = JSON.parse(data);

                let isi = `apakah anda mengalami `+date.name+` ?`;

                $('#question').html(isi);

                $('#yes').val(date.id_gejala)
                $('#no').val(date.id_gejala)
            }
        })

        //record data gejala
        let arrGejala=[];
        let getQuery = JSON.stringify('SELECT * FROM tbl_aturan WHERE id_penyakit IN(SELECT id_penyakit FROM tbl_aturan)');
        //menentukan pertanyaan ke berapa
        let pertanyaanKe = 0;
        $('#yes').click(function(){
            let status = 'yes';
            let id_gejala = $('#yes').val();

            //membuat record id gejala
            arrGejala.push(id_gejala);
            
            //panjang array gejala
            let lenghtGejala = arrGejala.length;
            $.ajax({
                method : 'post',
                url: '../action/getQuestion.php',
                data: {
                    id_gejala:id_gejala,
                    status:status,
                    lenghtGejala:lenghtGejala,
                    getQuery:getQuery
                    },
                success: function(data){
                    let date = JSON.parse(data);
                    // console.log(date);
                    let isi = `apakah anda mengalami `+date.data.name+` ?`;

                    if(date.data==1){
                        hasil()

                    }else {
                        $('#question').html(isi);

                        $('#yes').val(date.data.id_gejala)
                        $('#no').val(date.data.id_gejala)

                        //ubah value sub query
                        getQuery = JSON.stringify(date.qry);
                        //menambah pertanyaan ke
                        pertanyaanKe++
                    }


                }
            })
        })

        //jika pertanyaan dijawab tidak
        $('#no').click(function(){
            let status = 'no';
            let id_gejala = $('#no').val();
            
            //panjang array gejala
            let lenghtGejala = arrGejala.length;
            $.ajax({
                method : 'post',
                url: '../action/getQuestion.php',
                data: {
                    id_gejala:id_gejala,
                    status:status,
                    lenghtGejala:lenghtGejala,
                    getQuery:getQuery
                    },
                success: function(data){
                    let date = JSON.parse(data);

                    let isi = `apakah anda mengalami `+date.data.name+` ?`;

                    if(date.data==1){
                        hasil()

                    }else {
                        $('#question').html(isi);

                        $('#yes').val(date.data.id_gejala)
                        $('#no').val(date.data.id_gejala)

                        //ubah value sub query
                        getQuery = JSON.stringify(date.qry);
                        //menambah pertanyaan ke
                        pertanyaanKe++
                    }


                }
            })
        })

        function hasil(){

            let idUser = $("#iduser").val()
            let lastInsert = $("#lastInsert").val()


            $.ajax({
                    url: '../action/showResult.php',
                    method: 'post',
                    data: {
                        arrGejala:arrGejala,
                        idUser:idUser
                    },
                    success: function(data){
                        let date = JSON.parse(data)
                        let penyakit = date.data.name

                        $.ajax({
                            url:"../action/simpanKode.php",
                            method:"post",
                            data:{
                                idUser:idUser,
                                lastId:lastInsert,
                                penyakit:penyakit
                            },
                            success:function(data){
                                console.log(data);
                            }
                        })


                        let isi = `    <div class="card text-[#EBE9E9]">
                                        <h1 class="mb-5 text-xl md:text-3xl font-bold text-center">Hasil diagnosa anda</h1>
                                        <div class="">
                                            <div class="card  bg-white mt-5 p-5 text-black sm:w-2/4  mx-auto ">
                                                <h1 class="text-sm md:text-xl mb-5" id="tglriwayat">`+date.time+`</h1>
                                                <div class=" ">
                                                    <div class="grid grid-cols-2 gap-0" >
                                                        <div class="">
                                                            <label class="my-5" for="">Penyakit</label>
                                                        </div>
                                                        <div class="">
                                                            <label class="my-5" for="" id="npenyakit">`+date.data.name+`</label>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-2 gap-0" >
                                                        <div class="mt-5">
                                                            <label class="my-5" for="">Gejala</label>
                                                        </div>
                                                        <div class="mt-5">
                                                            <label for="" class="my-5" id="ngejala">  </label>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-2 gap-0" >
                                                        <div class="mt-5">
                                                            <label class="my-5" for="">Solusi</label>
                                                        </div>
                                                        <div class="mt-5">
                                                            <label class="my-5" for="" id="nsolusi">`+date.data.solusi+`</label>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-2 gap-0" >
                                                        <div class="mt-5">
                                                            <label class="my-5" for="">Langkah Pencegahan</label>
                                                        </div>
                                                        <div class="mt-5">
                                                            <label class="my-5" for="" id="npencegahan">`+date.data.langkah_pencegahan+`</label>
                                                        </div>
                                                    </div>

                                                </div>
                                                
                                                <!-- </form> -->
                                            </div>
                                            <div class="mx-auto w-6/12">
                                                <form action="../printpdf.php" method="post" class="mt-5">
                                                    <input type="text" name="lastId" value="`+lastInsert+`" hidden >
                                                    <input type="text" name="penyakit" value="`+date.data.name+`" hidden >
                                                    <input type="text" name="gejala" value="`+arrGejala+`" hidden >
                                                    <input type="text" id="iduser" name="iduser" value="`+idUser+`" hidden>
                                                    <button id="cetak" class="w-full content-center btn bg-[#F16A70] rounded-sm px-5 py-2 mr-3">Cetak Laporan</button>
                                                </form>
                                            </div>



                                        </div>



                                    </div>`
                        
                        $('#content').html(isi)
                        $('#answer').html('')

                        let gejala = date.gejala
                        for(let i = 0; i<gejala.length; i++){
                            let gj =' '+ gejala[i]+',';

                            $('#ngejala').append(gj)
                        }

                    }
            })
        }

    </script>

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>