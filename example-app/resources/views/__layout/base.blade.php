<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App - @yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
   <div class="container">@yield('header')</div> 
    
   <div class="container m-5 t-5">
        @include('__layout.messages')
        @yield('content')
    </div>
    
   <div class="container">@yield('footer')</div>
</body>
</html>