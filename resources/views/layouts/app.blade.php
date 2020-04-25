<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{ config('app.name', 'Nekostagram') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!--bootstrap-->
    <!--CSS -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
  </head>
  
  <body>
   @yield('navbar')
   @yield('content')
  </body>
</html>