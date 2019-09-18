<!DOCTYPE html>
<html lang="en">

<head>
  <title>Belajar Laravel</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://localhost/latihan_laravel/public/css/bootstrap.min.css">
</head>

<body id="page-top">

  @include('navbar')


  @include('footer')
  @yield('main')

  @yield('footer')

  
  <script src="{{url('public/js/query-1.11.1.min.js')}}"></script>
  <script src="{{url('public/js/bootstrap.min.js')}}"></script>
  <script src="{{url('public/js/custom.js')}}"></script>

</body>

</html>
