<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
    <div class="sidebar">
        <!-- User Widget -->
        <div class="widget user-dashboard-profile">
            <!-- User Image -->
            <div class="profile-thumb">
                <img src="{{ asset('/') }}frontEnd/profile-styles/images/user/user-thumb.jpg" alt=""
                    class="rounded-circle">
            </div>
            <!-- User Name -->
            <h5 class="text-center">Samanta Doe</h5>
            <p>Joined February 06, 2017</p>
        </div>
        <!-- Dashboard Links -->
        <div class="widget user-dashboard-menu">
            <ul>
                <li>
                    <a href="{{ route('my-ads') }}"><i class="fa fa-user"></i> My Ads</a>
                </li>
                <li>
                    <a href="dashboard-favourite-ads.html">  <i class="fas fa-heart"></i>  Favourite Ads
                        <span>5</span></a>
                </li>
                <li>
                    <a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Archeved Ads
                        <span>12</span></a>
                </li>
                <li>
                    <a href="dashboard-pending-ads.html"><i class="fa fa-bolt"></i> Pending
                        Approval<span>23</span></a>
                </li>
                <li>
                    <a href="logout.html"><i class="fa fa-cog"></i> Logout</a>
                </li>
                <li>
                    <a href="delete-account.html"><i class="fa fa-power-off"></i>Delete Account</a>
                </li>
            </ul>
        </div>
    </div>
</div>
