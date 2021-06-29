<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainWeb.css')}}">
    <title>Dientifico | @yield('Titulo')</title>
</head>
<body>
    <div class="container">
        @include('layout.navbar')
        @yield('content')
        @include('layout.footer')
    </div>
</body>
</html>