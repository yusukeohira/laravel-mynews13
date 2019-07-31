<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
  <head>
    <meta charaset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <title>@yield('title')</title>
    <script scr="{{ secure_asset('js/app/js')}}"defer></script>
    <link rel="dns-prefetch"href="https://fonts.gstatic.com">
    <link href="https://fonts.googleleapis.com/css?family=Raleway:300,400,600" 
    rel="stylesheet" type="text/css">
    
    <link href="{{ secure_asset('css/app.css')}}"rel="stylesheet">
    <link href="{{secure_asset('css/profile.css')}}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
        
      </nav>
    </div>
  </body>
</html>