<?php

session_start();

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="hero min-h-screen" style="background-image: url('assets/bghome.png');">
    <div class="hero-overlay bg-opacity-60">
      <div class="navbar bg-base-transparent sticky">
          <div class="flex-1 ml-5">
              <a class="btn btn-ghost normal-case text-xl text-white">stomachHeal</a>
          </div>
          <div class="flex-none mr-5">
              <ul class="menu menu-horizontal p-0 text-[#EBE9E9]">
                  <li><a href="view/diagnosis.php" class="hover:text-[#F16A70]">Diagnosa</a></li>
                  <li><a href="view/riwayat.php" class="hover:text-[#F16A70]">Riwayat</a></li>

                  <li class="bordered "><button>Tentang</button></li>
                  
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
                                    <a href="view/profile.php" class="justify-between">
                                        Profil
                                    </a>
                                    </li>
                                    <li><a href="action/logout.php">Keluar</a></li>
                                </ul>
                            </div>';
                      }
                  ?>

              </ul>
          </div>
      </div>
    </div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-md text-[#EBE9E9]">
        <h1 class="mb-5 text-5xl font-bold">Selamat datang,<?php if(isset($_SESSION['status'])){$_SESSION['username'];} ?> </h1>
        <p class="mb-5">StomachHeal adalah website yang menyediakan diagnosis gratis mengenai penyakit lambung yang anda rasakan. Diagnosa dilakukan menggunakan teknologi sistem pakar dan sesuai dengan dokter. Mulailah melakukan diagnosa sesuai dengan gejala yang anda rasakan.</p>
        <a href="view/diagnosis.php"><button class="btn bg-[#F16A70] text-[#EBE9E9]">Coba sekarang</button></a>
      </div>
    </div>
  </div>
</body>
</html>