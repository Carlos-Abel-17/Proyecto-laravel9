<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyectoLaravel-@yield('title')</title>
    @vite(['resources/css/app.scss'])
</head>
<body>
    @include('partials.navigation')
    @yield('content')
  
    </body>
</html>
