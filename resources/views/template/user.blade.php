<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PPDB Khanstra | Beranda</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @livewireStyles
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="{{ route('login') }}" class="navbar-brand">
        <img src="/image/Logo.png" alt="SMK Kharisma Nusantara Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Khanstra</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="nav navbar-nav mr-auto">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}" class="nav-link active">Home</a>
            @if(request()->is('home'))
            <hr class="border-primary" style="margin-top: -10px; border: 1px solid;">
            @endif
          </li>
          <li class="nav-item">
            <a href="{{ route('pendaftaran') }}" class="nav-link {{ (request()->is('pendaftaran')) ? 'active' : '' }}">Pendaftaran</a>
            @if(request()->is('pendaftaran'))
            <hr class="border-primary" style="margin-top: -10px; border: 1px solid;">
            @endif
          </li>
          <li class="nav-item">
            <a href="{{ route('pengumuman') }}" class="nav-link {{  (request()->is('pengumuman')) ? 'active' : '' }}">Pengumuman</a>
            @if(request()->is('pengumuman'))
            <hr class="border-primary" style="margin-top: -10px; border: 1px solid;">
            @endif
          </li>
          @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif

            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
      </div>

      <!-- Right navbar links -->
        <ul class=" nav navbar-nav my-2 my-lg-0">
            
        </ul>
    </div>
  </nav>
  <!-- /.navbar -->
  
  <div class="content-wrapper">
    @yield('content')
  </div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      SMK Kharisma Nusantara
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="">PPDB Online</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    </script>
    ...
    <x-livewire-alert::scripts />
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>