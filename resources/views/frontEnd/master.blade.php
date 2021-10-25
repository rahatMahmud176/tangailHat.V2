<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <title>ClassiAlly - Classified Ads Website Template</title> --}}
    <title> @yield('title') </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/assets/css/bootstrap.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/assets/css/slicknav.css">

    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/assets/css/animate.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/assets/css/owl.carousel.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      @include('frontEnd.includes.navBar')
      <!-- Navbar End -->
      
      @yield('mainContent')
    <!-- Subscribe Section End -->

    <!-- Footer Section Start -->
      @include('frontEnd.includes.footer')
    <!-- Footer Section End --> 

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontEnd') }}/assets/js/jquery-min.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/wow.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/nivo-lightbox.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/jquery.slicknav.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/main.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/form-validator.min.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/contact-form-script.min.js"></script>
    <script src="{{ asset('frontEnd') }}/assets/js/summernote.js"></script>
      
  </body>
</html>