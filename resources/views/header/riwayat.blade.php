@extends('layouts.main')
@section('container')

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consultify</title>
  <link rel="shortcut icon" type="image.png" href="{{ asset('assets3/images/logos/c.png')}}" />
  <link rel="stylesheet" href="{{ asset('assets3/css/styles.min.css') }}">
</head>

<body>
  <!--  Body Wrapper -->
  <!-- <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" -->
    <!-- data-sidebar-position="fixed" data-header-position="fixed"> -->
    
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Riwayat</h5>
              <div class="card mb-0">
                <div class="card-body p-4">
                  <div class="alert alert-primary" role="alert">
                    Transaksi pembayaran konsultasi telah sukes - Cek selengkapnya!
                  </div>
                  <div class="alert alert-secondary" role="alert">
                    Yeay, kamu telah menyelesaikan sesi konsultasi dengan Rexcel Pabian - Cek selengkapnya!
                  </div>
                  <div class="alert alert-success" role="alert">
                    Mira, lengkapi profil kamu dan nikamti seluruh layanan kami!
                  </div>
                  <div class="alert alert-danger" role="alert">
                    Dita, cek diskon harga terkini untuk beberapa data 
                  </div>
                  <div class="alert alert-warning" role="alert">
                    Selamat Hari Natal, buruan cek diskon spesial natalmu!
                  </div>
                  <div class="alert alert-info" role="alert">
                    Rexcel, yuk cek beberapa informatif!
                  </div>
                  <div class="alert alert-light" role="alert">
                    Dwiko, pembayaranmu belum dituntaskan. Segera tuntaskan untuk menikmati layanan yang kamu mau!
                  </div>
                  <div class="alert alert-dark" role="alert">
                    Perbaharui aplikasi untuk menikmati layanan dan fitur terbaru!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
@endsection