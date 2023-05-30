<!doctype html>
<html lang="en-US">
  <head>
     @include('includes.head')
  </head>

  <body id="dark-mode" style="background-color:#5AC9E7">
     @include('includes.header')

     @yield('content')

     @include('includes.footer')
  </body>
</html>
