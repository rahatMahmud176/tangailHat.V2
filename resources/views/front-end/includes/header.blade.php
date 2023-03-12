<header>
    <div id="header-three" class="header-style1 header-fixed">
       @include('front-end.includes.header-top')
        <div class="main-menu-area bg-primary" id="sticker">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-3">
                        <div class="logo-area">
                            <a href="index.html" class="img-fluid">
                                <img src="{{ asset('front-end') }}/img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 possition-static">
                        <div class="cp-main-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">Home</a>
                                        <ul class="cp-dropdown-menu">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index2.html">Home 2</a></li>
                                            <li><a href="index3.html">Home 3</a></li>
                                            <li><a href="index4.html">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">Who We Are</a></li>
                                    <li><a href="how-it-works.html">How It Works?</a></li>
                                    <li class="menu-justify active"><a href="#">Pages</a>
                                        <div class="rt-dropdown-mega container">
                                            <div class="rt-dropdown-inner">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="index.html">Home 1</a></li>
                                                            <li><a href="index2.html">Home 2</a></li>
                                                            <li><a href="index3.html">Home 3</a></li>
                                                            <li><a href="index4.html">Home 4</a></li>
                                                            <li><a href="pricing.html">Pricing Plan</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="category-grid-layout1.html">Grid View 1</a></li>
                                                            <li><a href="category-grid-layout2.html">Grid View 2</a></li>
                                                            <li class="active"><a href="category-grid-layout3.html">Grid View 3</a></li>
                                                            <li><a href="category-list-layout1.html">List View 1</a></li>
                                                            <li><a href="category-list-layout2.html">List View 2</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="category-list-layout3.html">List View 3</a></li>
                                                            <li><a href="single-product-layout1.html">Product Details 1</a></li>
                                                            <li><a href="single-product-layout2.html">Product Details 2</a></li>
                                                            <li><a href="single-product-layout3.html">Product Details 3</a></li>
                                                            <li><a href="favourite-ad-list.html">Favourite Ad</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="my-account.html">My Account</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="#">Post Ad</a></li>
                                                            <li><a href="report-abuse.html" data-toggle="modal" data-target="#report_abuse">Report Abuse</a></li>
                                                            <li><a href="faq.html">Faq</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="category-grid-layout1.html">Features</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                        <a href="{{ route('ads.index') }}" class="cp-default-btn">Post Your Ad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index2.html">Home 2</a></li>
                                        <li><a href="index3.html">Home 3</a></li>
                                        <li><a href="index4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">Who We Are</a></li>
                                <li><a href="how-it-works.html">How It Works?</a></li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="pricing.html">Pricing Plan</a></li>
                                        <li><a href="category-grid-layout1.html">Grid View 1</a></li>
                                        <li><a href="category-grid-layout2.html">Grid View 2</a></li>
                                        <li><a href="category-grid-layout3.html">Grid View 3</a></li>
                                        <li><a href="category-list-layout1.html">List View 1</a></li>
                                        <li><a href="category-list-layout2.html">List View 2</a></li>
                                        <li><a href="category-list-layout3.html">List View 3</a></li>
                                        <li><a href="single-product-layout1.html">Product Details 1</a></li>
                                        <li><a href="single-product-layout2.html">Product Details 2</a></li>
                                        <li><a href="single-product-layout3.html">Product Details 3</a></li>
                                        <li><a href="favourite-ad-list.html">Favourite Ad</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="post-ad.html">Post Ad</a></li>
                                        <li><a href="report-abuse.html" data-toggle="modal" data-target="#report_abuse">Report Abuse</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                    </ul>
                                </li>
                                <li><a href="category-grid-layout1.html">Features</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End -->
</header>