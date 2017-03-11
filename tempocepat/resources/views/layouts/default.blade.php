<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no">
    <title>{{ $title }}</title>
    @include('layouts.head')
  </head>
  <body class="menu">

  @yield('content')

  @include('layouts.foot')
  
  @yield('additional')

  </body>
</html>