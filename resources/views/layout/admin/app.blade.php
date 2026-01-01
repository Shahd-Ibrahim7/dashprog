<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.include.head')
   @stack('css')
</head>

<body>
    <!-- Navbar Start -->
    @include('admin.include.navbar')
    <!-- Navbar End -->

   @yield('content')

<!-- Footer Start -->
   @include('admin.include.footer')
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


   @include('admin.include.script')
   @stack('js')
</body>

</html>