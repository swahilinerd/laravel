<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        @include('layouts.header')
        @include('layouts.messages')
        
        <div class="row p-5 m-5">
            <div class="col-3">
                @include('layouts.aside-menu') 
            </div>
            <div class="col-9 container">
                {{ $slot }} 
            </div>
        </div>

        @include('layouts.footer')

    </body>
</html>