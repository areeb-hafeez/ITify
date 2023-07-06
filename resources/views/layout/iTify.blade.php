<!doctype html>

<html>

<head>

   @include('includes.head')

</head>

<body>

<div class="container">

   <header>

       @include('includes.header')

   </header>

           @yield('content')

   <footer>

       @include('includes.footer')

   </footer>
</body>

</html>