<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title') | File Sharing </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  @include('layouts.partials.css')

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
  
    <!-- Preloader -->
    {{-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="" src="{{asset('assets/img/logo.webp')}}" alt="Logo" height="300" width="300">
    </div> --}}

    @include('layouts.partials.nav')


  <!-- ======= Header ======= -->

  @include('layouts.partials.header')
  
  <!-- End Header -->
  
  <!-- ======= Sidebar ======= -->
  
  @include('layouts.partials.sidebar')
  
  <!-- End Sidebar-->
  <!-- Main-->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          @yield('content')
          
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- /.content -->
    </div>

  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.partials.footer')
  

  
  @include('layouts.partials.script')

  @yield('scripts')
</body>

</html>