<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Global CSS -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Plugin CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Component CSS -->
        @yield('CssComponent')

        @livewireStyles

    </head>

    <body>

        <!-- body -->
        <div class="container mt-4">
            
            @yield('HtmlComponent')
            
        </div>

        <!-- Plugin Js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Component Js -->
        @yield('JsComponent')
        
        @livewireScripts
    </body>
</html>
