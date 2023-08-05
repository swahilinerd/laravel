<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
   <div class="header">@yield('header')</div>

   <div class="content">
        @if(session('success')) 
            <div>{{ session('success') }}</div> 
        @endif 
        @yield('content')
    </div>
    
   <div class="footer">
        some footer here 
   </div>
</body>
</html>