<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') | Tangail Hat - Buy Sell Excchange</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}frontEnd/assets/images/favicon.ico">

    @include('frontEnd.includes.style')

</head>

<body data-spy="scroll" data-target="#topnav-menu" data-offset="60">
 
    @include('frontEnd.includes.nav')

   @yield('mainContent')


    <!-- Footer start -->
    @include('frontEnd.includes.footer')
    <!-- Footer end -->

    <!-- JAVASCRIPT -->
    @include('frontEnd.includes.script')

</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/crypto-ico-landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:07:57 GMT -->

</html>
