<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
    Masuk akun StomachHeal
  </title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.19.0/dist/full.css" rel="stylesheet" type="text/css" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar bg-primary navbar-expand-lg  border-radius-lg top-0 z-index-3  mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class=" font-weight-bolder text-black ms-lg-0 ms-3 me-5" href="../pages/dashboard.html">
              StomachHeal
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav ">
                <li class="nav-item ">
                  <a class="nav-link d-flex align-items-center me-2 " style="color: black;" aria-current="page" href="../index.php">
                    <i class="fa fa-chart-pie  text-black me-1"></i>
                    Halaman utama
                  </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link me-2 " style="color: black;" href="register.php">
                    <i class="fas fa-key  text-black me-1"></i>
                    Daftar
                  </a>
                </li>
              </ul>
              <!-- <ul class="navbar-nav d-lg-block d-none">
                
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-in.html">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Sign In
                  </a>
                </li>
              </ul> -->
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup3.png'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Masuk</h4>
                  <p class="mb-0">Masukkan email dan password untuk masuk</p>

                </div>
                <div class="card-body">
                <div class="alertt">
                    <?php
                        $berhasil = isset($_GET['status']) && $_GET['status'] == 'success';
                        if($berhasil){
                            echo '<div class="alert alert-success" role="alert" > Berhasil mendaftar akun baru</div>';
                        }
                    ?>
                </div>
                  <form action="post" role="form">
                    
                    <div class="input-group input-group-outline mb-3" >
                      <!-- <label class="form-label">Email</label> -->
                      <input type="email" id="email" class="form-control" style="border-color: black;" placeholder="E-mail">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <!-- <label class="form-label">Password</label> -->
                      <input type="password" class="form-control" id="password" style="border-color: black;" placeholder="Password">
                    </div>
                    <input type="checkbox" class="me-2" onclick="showPass()">Lihat Password
                    <div class="text-center">
                      <button type="button" id="login" class="btn btn-lg bg-success btn-lg w-100 mt-4 mb-0 text-white">Masuk</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Belum punya akun?
                    <a href="register.php" class="text-primary text-gradient font-weight-bold">Daftar</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    //fungsi show password
    function showPass() {
        let show = document.getElementById("password");
        if (show.type === "password") {
            show.type = "text";
        } else {
            show.type = "password";
        }
    }
  </script>
      <script>
        //fungsi show password
        function showPass() {
            let show = document.getElementById("password");
            if (show.type === "password") {
                show.type = "text";
            } else {
                show.type = "password";
            }
        }

        //get data login
        $('#login').click(function(e){
            e.preventDefault()
            let email = $('#email').val();
            let password = $('#password').val();

            $.ajax({
                method : 'post',
                url : '../action/proses.php',
                data : {
                    email : email,
                    password : password
                },
                success : function(data, status){
                    // alert(data);
                    if(data == 'success'){
                        window.location.replace("../index.php");
                    }else if(data == 'successA'){
                        window.location.replace("../admin/penyakit.php");
                    } else {
                        let alert = `<div class="alert alert-danger" role="alert" > Gagal login, masukan email dan password yang benar
                    
                    </div>  `;
                        $('.alertt').html(alert)
                    }
                }
            })
        })
    </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>