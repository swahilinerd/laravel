<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles

    <title>@yield('title') - Laravel Blog App</title>
</head>
<body>
   
    @include('layouts.header')
    @include('layouts.messages')
    
    <div class="row p-5 m-5">
        <div class="col-3">
            @include('layouts.aside-menu') 
        </div>
        <div class="col-9 container">
           @yield('content')  
        </div>
    </div>
    @include('layouts.footer')
    
</body>
</html>