<!doctype html>
<html class="no-js" lang="">

<head>
    @include('front-end.includes.styles')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        @include('front-end.includes.header')
        <!-- Header Area End Here -->
        @include('front-end.includes.search')
        @yield('content')
        <!-- Footer Area Start Here -->
        @include('front-end.includes.footer')
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Start-->
    @include('front-end.includes.login-modal')
    <!-- Modal End-->
    <!-- Report Abuse Modal Start-->
    @include('front-end.includes.report-modal')
    <!-- Report Abuse Modal End-->

    @include('front-end.includes.scripts')

</body>

</html>
