<?php
session_start();

require_once("../db/db_conn.php");
$user_id = $_SESSION['id_user'];
// var_dump($_SESSION);
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="h-screen bg-cover bg-no-repeat" style="background-image: url('../assets/bghome.png')">
    <div class="z-10 navbar bg-base-transparent sticky text-white">
        <div class="flex-1 ml-5">
            <a class="btn btn-ghost normal-case text-xl">stomachHeal</a>
        </div>
        <div class="flex-none mr-5">
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navbar">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
              
            
                <ul class="menu menu-horizontal p-0 text-[#EBE9E9]">
                    <li><a href="diagnosis.php" class="hover:text-[#F16A70]">Diagnosa</a></li>
                    <li><a href="riwayat.php" class="hover:text-[#F16A70]">Riwayat</a></li>

                    <li class="hover:text-[#F16A70]"><button><a href="../index.php">Tentang</a></button></li>
                    
                    <?php if(!isset($_SESSION['status'])){
                        echo '   <li class="mx-3"><a href="view/login.php">Masuk</a></li>
                                <li><a href="view/register.php"><button class="btn bg-[#F16A70]">Daftar</button></a></li>';
                        } ?>
                    <?php
                        if(isset($_SESSION['status'])){
                            echo '<div class="dropdown dropdown-end">
                                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                                        <div class="w-10 py-2">
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
                                        <li><a href="../action/logout.php">Keluar</a></li>
                                    </ul>
                                </div>';
                        }
                    ?>

                </ul>
            </div>
        </div>
    </div>
    <div class="z-0 card text-[#EBE9E9]">     


        <?php
            $query = mysqli_query($conn,"SELECT * FROM user WHERE user_id ='".$_SESSION['id_user']."'");
            $user = mysqli_fetch_array($query);

        ?>

        <div class="">
        <div id="allert"></div>

        <h1 class="mb-5 text-xl md:text-2xl font-bold text-center">Data profil anda</h1>
            <div class=" card sm:w-1/2 sm:h-max mx-auto gap-0 bg-white mt-5 p-5 text-black">
                <!-- <form action=""> -->
                
                <div>
                    
                <input type="text" value="<?=$user_id?>" id="user_id" hidden>
                <input type="hidden" name="user_id" class="form-control" id="user_id" value="<?php echo @$user['user_id']?>" >
                    <div class="lg:grid lg:grid-cols-2 gap-0">
                        <div class="mt-5">
                            <label class="my-5" for="">Nama pengguna</label>
                            <div class="flex">
                                <input id="username" type="text" class="px-4 py-1 border border-black rounded text-black" value="<?= $user['username'] ?>" placeholder="Masukkan nama pengguna anda" />
                            </div>
                        </div>
                        <div class="mt-5">
                            <label class="my-5" for="">Jenis kelamin</label>
                            <div class="flex">
                                <input id="jenis_kelamin" type="email" class="px-4 py-1 border border-black rounded text-black" value="<?= $user['jenis_kelamin'] ?>" disabled />
                            </div>
                        </div>
                    </div>

                    <div class="lg:grid lg:grid-cols-2 gap-0">
                        <div class="mt-5">
                            <label class="my-5" for="">E-mail</label>
                            <div class="flex">
                                <input id="email" type="email" class="px-4 py-1 border border-black rounded text-black" value="<?php echo $user['email'] ?>" placeholder="Masukkan email anda" />
                            </div>
                        </div>
                        <div class="mt-5">
                            <label for="floatingInput" class="text-gray-700 mb-3">Tanggal lahir</label>
                            
                                <div class="flex datepicker " data-mdb-toggle-button="false">
                                <input datepicker type="date" id="tanggal_lahir" class="border  sm:text-sm rounded-sm block pl-10 p-2.5" style="border-color: black;" value="<?= $user['tanggal_lahir'] ?>" placeholder="Pilih tanggal lahir">
                                </div>
                        </div>
                    </div>


                    <div class="mt-5">
                        <label class="my-5" for="">Password</label>
                        
                        <div class="flex">
                            <input id="password" type="password" class="px-4 py-1 border border-black rounded text-black" value="<?php echo @$_SESSION['password']?>" placeholder="Masukkan password anda" />
                        </div>
                        <p class="text-xs mt-1 text-red-500">* anda harus memasukkan password untuk mengubah data</p>
                    </div>
                    
                    <div class=" mt-5">
                        <button id="submit" class="bg-[#F16A70] rounded-sm px-5 py-2 mr-10">simpan</button>
                    </div>
                </div>
                
                <!-- </form> -->
            </div>
        </div>

    </div>
  </div>
  <?php
    unset($_SESSION['error']);
    unset($_SESSION['message']);
    ?>

    <script>   
        $('#submit').click(function(){
                let username = $('#username').val();
                let user_id = $('#user_id').val();
                let email = $('#email').val();
                let password = $('#password').val();
                let tanggal_lahir = $('#tanggal_lahir').val();

                $.ajax({
                    url:"../action/editProfil.php",
                    method:"post",
                    data:{
                        username:username,
                        email:email,
                        password:password,
                        tanggal_lahir:tanggal_lahir,
                        user_id:user_id
                    },
                    success: function(data){
                       
                        
                        let date = JSON.parse(data);

                        console.log(date);

                        if(date.msg == 'gagal'){
                            let isi = `<div class="alert alert-warning" role="alert">
                                        Password yang anda masukan salah
                                    </div>`
                            $('#allert').html(isi)
                        }else if(date.msg == 'kosong'){
                            let isi = `<div class="alert alert-warning" role="alert">
                                        Isikan password untuk mengubah data profil anda
                                    </div>`
                            $('#allert').html(isi)
                        }else {
                            let isi = `<div class="alert alert-success" role="alert">
                                        Update data berhasil
                                    </div>`
                            $('#allert').html(isi)
                        }

                    }
                })
        })

    </script>

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>