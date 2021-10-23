<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href=" {{ route('dashbord') }}">
            <span class="align-middle"><img
                    src="{{ asset('/backEnd/img') }}/TangailHat.V2.Logo.png" width="170px"
                    alt=""></span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('dashbord') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-header">
                Location's
            </li> 
            <li class="sidebar-item">
                <a class="sidebar-link" href="#" data-bs-toggle="modal" data-bs-target="#addUpozilla">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Add Upozilla </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('manageUpozilla') }}">
                    <i class="align-middle" data-feather="navigation"></i> <span class="align-middle">Manage Upozilla </span>
                </a>
            </li>

             <li class="sidebar-item">
                <a class="sidebar-link" href="#" data-bs-toggle="modal" data-bs-target="#addUnion">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Add Union </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('manageUnion') }}">
                    <i class="align-middle" data-feather="map-pin"></i> <span class="align-middle">Manage Union </span>
                </a>
            </li>

             
            <li class="sidebar-header">
                User's
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('allUser') }}">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">All User</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('userRequest') }}">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">User Requests</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('blockUserPage') }}">
                    <i class="align-middle" data-feather="slash"></i> <span class="align-middle">Blocked User</span>
                </a>
            </li>
  

            <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
            </li>

             
        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                <div class="mb-3 text-sm">
                    Are you looking for more components? Check out our premium version.
                </div>
                <div class="d-grid">
                    <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
                </div>
            </div>
        </div>
    </div>
</nav>
