<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="{{ asset('authassets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('authassets/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('authassets/css/bootstrap.min.css') }}">

    
    <!-- Style -->
            <link rel="stylesheet" href="{{ asset('authassets/css/style.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;500&display=swap" rel="stylesheet"> 

    <link href="{{ asset('myassets/css/custom.css') }}" rel="stylesheet" type="text/css" />


<style type="text/css">
    .half .bg {
  background-size: cover;
  background-position: bottom !important;
}

.form-control {
  
  font-size: 14px !important;
}

h1 {
  font-family: Gilroy !important;
  font-weight: 800;
}

.mb-4, .my-4 {
  margin-bottom: 1.5rem !important;
  font-family: Gilroy;
  font-weight: 800;
}

body {
  font-family: "Gilroy", sans-serif !important;
  color: #343a40;
}


</style>

    <!-- Styles -->
</head>
<body>
    <div id="app">


            @yield('content')
    </div>


<script src="{{ asset('authassets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('authassets/js/popper.min.js')}}"></script>
    <script src="{{ asset('authassets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('authassets/js/main.js')}}"></script>


</body>
</html>
