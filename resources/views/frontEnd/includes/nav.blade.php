<nav class="navbar navbar-expand-lg navigation fixed-top sticky">
    <div class="container">
        <a class="navbar-logo" href="index.html">
            <img src="{{ asset('/') }}frontEnd/myImage/TangailHat.V2.Logo.png" alt="" height="19"
                class="logo logo-dark">
            <img src="{{ asset('/') }}frontEnd/myImage/TangailHat.V2.Logo.png" alt="" height="19"
                class="logo logo-light">
        </a>

        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
            data-toggle="collapse" data-target="#topnav-menu-content">
            <i class="fa fa-fw fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="topnav-menu-content">
            <ul class="navbar-nav ml-auto" id="topnav-menu">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#roadmap">Roadmap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faqs">FAQs</a>
                </li>

            </ul>

            <div class="ml-lg-2 mb-1 mb-md-0">
                <a href="{{ route('ads.index') }}" class="btn btn-outline-warning w-xs solaimanlipi">বিজ্ঞাপন দিন</a>
            </div>

            <div class="ml-lg-2 mb-1 mb-md-0">
                <a href="{{ route('visitor-profile') }}" class="btn btn-outline-success w-xs">Sign in</a>
            </div>
        </div>
    </div>
</nav>