<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App - @yield('title')</title>
</head>
<body>
   <div class="container">@yield('header')</div> 

   <div class="container">
        @if ($errors->any()) 
            <div>
                <ul>
                    @foreach ($errors->all() as $error) 
                       <li>{{ $error }}</li>  
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>
    
   <div class="container">@yield('footer')</div>
</body>
</html>