<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!--CSS-->
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')


    
    <title>@yield('title')</title>

    
  </head>

  <body>
    <!--Navbar-->
    @include('includes.navbar')


    <!--Page COntent-->
    @yield('content')

    <!--Footer-->
    @include('includes.footer')


    <!-- Bootstrap core JavaScript -->
    
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
   
    <!--Script-->
  </body>
</html>
