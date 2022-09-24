<?php

include("../db/db_conn.php");
$result= mysqli_query($conn, "SELECT tbl_aturan.id_aturan as id, tbl_aturan.id_penyakit as id_penyakit, tbl_penyakit.name as penyakit,tbl_aturan.id_gejala as id_gejala, tbl_gejala.name as gejala FROM `tbl_aturan`, tbl_penyakit, tbl_gejala WHERE tbl_aturan.id_penyakit=tbl_penyakit.id_penyakit AND tbl_aturan.id_gejala=tbl_gejala.id_gejala ORDER BY id_penyakit");
while($p=mysqli_fetch_array($result)){
    $aturan[]=$p;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <title>
    Dashboard -- Aturan
  </title>
  
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

  <style>
    .nav-item.active{
        background-color: #0000002e;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <span class="ms-1 font-weight-bold text-white">StomachHeal</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
  
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">      

  
    
  <li class="nav-item">
    <a class="nav-link text-white " href="penyakit.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Penyakit</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link text-white " href="gejala.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Gejala</span>
    </a>
  </li>

  <li class="nav-item active">
    <a class="nav-link text-white " href="#">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Aturan</span>
    </a>
  </li>

  <hr class="horizontal light mt-0 mb-2">

  <li class="nav-item">
    <a class="nav-link text-white " href="../action/logout.php">
      
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <!-- <i class="material-icons opacity-10">table_view</i> -->
        </div>
      
      <span class="nav-link-text ms-1">Keluar</span>
    </a>
  </li>


       
        
      </ul>
    </div>
  
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
      <li class="nav-item d-xl-none ps-0 d-flex m-3 align-items-center">
        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
          <div class="sidenav-toggler-inner">
          <i class="sidenav-toggler-line"></i>
          <i class="sidenav-toggler-line"></i>
          <i class="sidenav-toggler-line"></i>
          </div>
        </a>
      </li>
      <nav aria-label="breadcrumb">
        
        
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Aturan</li>
        </ol>
  
        
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
  
            
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="#" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              
              <span class="d-sm-inline d-none">Admin</span>
              
            </a>
          </li>
  
  
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- End Navbar -->
  <div class="container-fluid py-4">

  <?php
  if(isset($_GET['masukan']) AND $_GET['masukan'] == 'berhasil'){ ?>
    <div class="alert alert-success alert-dismissible text-white" role="alert">
        <span class="text-sm">Berhasil menambahkan data aturan.</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  <?php } elseif(isset($_GET['hapus']) AND $_GET['hapus'] == 'success') { ?>
    <div class="alert alert-success alert-dismissible text-white" role="alert">
        <span class="text-sm">Berhasil menghapus data aturan.</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  <?php } elseif(isset($_GET['status']) AND $_GET['status'] == 'berhasil'){ ?>
    <div class="alert alert-success alert-dismissible text-white" role="alert">
        <span class="text-sm">Berhasil mengubah data aturan.</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
  <?php }
  ?>
    
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-center text-capitalize ps-3">Tabel Aturan</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class=" mx-3">
            <a class="btn bg-gradient-dark mb-5" href="aturanTambah.php"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Aturan</a>
            </div>
            <div class="table-responsive p-0" style="margin-left: 40px ;">
              <table  id="datab_penyakit" class="table mb-0 mt-3">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id Penyakit</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penyakit</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id gejala</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gejala</th>
                    <th class="text-secondary opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($aturan as $data){ ?>
                    <tr>
                        <td>
                            <p class="text-xs font-weight-bold mb-0"><?= $data['id_penyakit'] ?></p>
                        </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $data['penyakit'] ?></h6>
                            
                          </div>
                        </div>
                      </td>
                      <td>
                            <p class="text-xs font-weight-bold mb-0"><?= $data['id_gejala'] ?></p>
                        </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $data['gejala'] ?></h6>
                            
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <a href="action/aturanHapus.php?id=<?= $data['id']?>" onclick="return confirm('Are you sure you want to delete this item?');" class="text-secondary font-weight-bold text-xs" >
                          <i class="material-icons opacity-10">delete</i>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
 
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
  <script>
    $(document).ready(function () {
    $('#datab_penyakit').DataTable();
    });
  </script>
</body>

</html>