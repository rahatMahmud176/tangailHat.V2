<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="lni-menu"></span>
          <span class="lni-menu"></span>
          <span class="lni-menu"></span>
        </button>
        <a href="index.html" class="navbar-brand"><img src="{{ asset('frontEnd') }}/myImage/TangailHat.V2.Logo.png" alt=""></a>
      </div>
      <div class="collapse navbar-collapse" id="main-navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.html">
              Categories
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Listings
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a>
              <a class="dropdown-item" href="adlistinglist.html">Ad Listing</a>
              <a class="dropdown-item" href="ads-details.html">Listing Detail</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pages 
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="about.html">About Us</a>
              <a class="dropdown-item" href="services.html">Services</a>
              <a class="dropdown-item" href="ads-details.html">Ads Details</a>
              <a class="dropdown-item" href="post-ads.html">Ads Post</a>
              <a class="dropdown-item" href="pricing.html">Packages</a>
              <a class="dropdown-item" href="testimonial.html">Testimonial</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog 
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="blog.html">Blog - Right Sidebar</a>
              <a class="dropdown-item" href="blog-left-sidebar.html">Blog - Left Sidebar</a>
              <a class="dropdown-item" href="blog-grid-full-width.html"> Blog full width </a>
              <a class="dropdown-item" href="single-post.html">Blog Details</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">
              Contact
            </a>
          </li>
        </ul>
        <ul class="sign-in">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> My Account</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="account-profile-setting.html"><i class="lni-home"></i> Account Home</a>
              <a class="dropdown-item" href="account-myads.html"><i class="lni-wallet"></i> My Ads</a>
              <a class="dropdown-item" href="account-favourite-ads.html"><i class="lni-heart"></i> Favourite ads</a>
              <a class="dropdown-item" href="account-archived-ads.html"><i class="lni-folder"></i> Archived</a>
              <a class="dropdown-item" href="login.html"><i class="lni-lock"></i> Log In</a>
              <a class="dropdown-item" href="signup.html"><i class="lni-user"></i> Signup</a>
              <a class="dropdown-item" href="forgot-password.html"><i class="lni-reload"></i> Forgot Password</a>
              <a class="dropdown-item" href="account-close.html"><i class="lni-close"></i>Account close</a>
            </div>
          </li>
        </ul>
        <a class="tg-btn" href="post-ads.html">
          <i class="lni-pencil-alt"></i> Post An Ad
        </a>
      </div>
    </div>

    <!-- Mobile Menu Start -->
    @include('frontEnd.includes.mobileMenu')
    <!-- Mobile Menu End -->

  </nav>