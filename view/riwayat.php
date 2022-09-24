<?php
session_start();
include_once("../db/db_conn.php");

if(!isset($_SESSION['status'])){
    header("location:login.php");
} 

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
                    <li  ><a href="diagnosis.php" class="hover:text-[#F16A70]">Diagnosa</a></li>
                <li class="bordered"><a href="riwayat.php" >Riwayat</a></li>
                <li class="hover:text-[#F16A70] "><a href="../index.php"><button>Tentang</button></a></li>
                    </ul>
                    </div>
            </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal p-0">
                    <li  ><a href="diagnosis.php" class="hover:text-[#F16A70]">Diagnosa</a></li>
                <li class="bordered"><a href="riwayat.php" >Riwayat</a></li>
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
            <h1 class="mb-5 text-xl md:text-3xl font-bold text-center">Riwayat diagnosa anda</h1>
            <div class="mx-auto w-1/2">
                
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">

                            <?php
                                $query = "SELECT tbl_riwayat.id_penyakit, tbl_riwayat.created_at, tbl_penyakit.name FROM tbl_riwayat,tbl_penyakit WHERE tbl_riwayat.id_penyakit=tbl_penyakit.id_penyakit AND tbl_riwayat.id_user=".$_SESSION['id_user']." ORDER BY id_riwayat desc LIMIT 0,8";
                                $result = mysqli_query($conn, $query);

                                while($p= mysqli_fetch_array($result)){
                                    $penyakit[]=$p;
                                }

        
                            ?>
                            <table class="min-w-full text-center">
                            <thead class="border-b bg-gray-800">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        No
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Nama Penyakit
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Action
                                    </th>
                                </tr>
                            </thead class="border-b">
                            <tbody>
                                <?php if(isset($penyakit)){ ?>
                                    <?php
                                    $no = 0;
                                    foreach($penyakit as $data): ?>
                                        <?php $no++ ?>
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?=$no?></td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                <?= $data['name'] ?>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <?= $data['created_at'] ?>
                                            </td>
                                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                
                                                <label for="my-modal-6" id="lihat<?= $data['id_penyakit'] ?>" value="<?= $data['id_penyakit'] ?>" class="lihat btn modal-button">lihat</label>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php }else{ ?>
                                    <tr class="bg-white border-b">
                                            <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Data tidak tersedia</td>
                                        </tr>
                                <?php } ?>
                            </tbody>
                            </table>
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

  <input type="checkbox" id="my-modal-6" class="modal-toggle" />
    <div class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
            <h3 class="font-bold text-lg"><?= date("Y-m-d",time()) ?></h3>
            <div class=" ">
                <div class="grid grid-cols-2 gap-0" >
                    <div class="">
                        <label class="my-5" for="">Penyakit</label>
                    </div>
                    <div class="">
                        <label class="my-5" for="" id="npenyakit"></label>
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
                        <label class="my-5" for="" id="nsolusi"></label>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-0" >
                    <div class="mt-5">
                        <label class="my-5" for="">Langkah Pencegahan</label>
                    </div>
                    <div class="mt-5">
                        <label class="my-5" for="" id="npencegahan"></label>
                    </div>
                </div>

            </div>

            <div class="mx-auto w-6/12">
                <form action="../printpdf.php" method="post" class="mt-5">
                    <input type="text" id="penyakitf" name="penyakit" value="" hidden >
                    <input type="text" id="gejalaf" name="gejala" value="" hidden >
                    <input type="text" id="iduser" name="iduser" value=" <?=$_SESSION['id_user'] ?>" hidden>
                    <button id="cetak" class="w-full content-center btn bg-[#F16A70] rounded-sm px-5 py-2 mr-3">Cetak Laporan</button>
                </form>
            </div>

            <label for="my-modal-6" class="btn float-right">Tutup</label>
    </div>
    </div>

</div>

<script>
  
    $('.lihat').click(function(e){
        // console.log($(e.target).attr('value'));
        let penyakit_id = $(e.target).attr('value')
        $.ajax({
            url:'../action/getRiwayat.php',
            method: 'post',
            data:{penyakit_id:penyakit_id},
            success:function(data){
                data = JSON.parse(data)
                let name = data.penyakit[0].name
                let langkah = data.penyakit[0].langkah_pencegahan
                let solusi = data.penyakit[0].solusi
                $('#npenyakit').html(name)
                $('#npencegahan').html(langkah)
                $('#nsolusi').html(solusi)

                let gejala = data.gejala
                        for(let i = 0; i<gejala.length; i++){
                            let gj =' '+ gejala[i]+',';

                            $('#ngejala').append(gj)
                        }


                let idG = data.idgejala
                $('#penyakitf').attr('value', name)
                $('#gejalaf').attr('value', gejala);
            
               console.log(data)
            }
        })
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>