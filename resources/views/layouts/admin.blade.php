<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SUWASTE') }}</title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
   
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    @include('layouts.inc.sidebar')
  </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      @include('layouts.inc.adminnav')
      <div class="container-fluid py-4" >
@yield('container-fluid')
      </div>
   
      <div class="fixed-plugin">
        @include('layouts.inc.adminfooter')
      </div>
    </main>
 
   
<!--   Core JS Files   -->
  <script src="{{ asset('admin/js/core/popper.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/core/bootstrap.min.js') }}" defer> ></script>
  <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}" defer>></script>
  <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}" defer>></script>
  <script src="{{ asset('admin/js/plugins/chartjs.min.js') }}" defer>></script>
  <script src="{{ asset('admin/js/material-dashboard.min.js') }}" defer>></script>
 
   
</body>
</html>
