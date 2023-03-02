<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->



    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group">
                    <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
                    <div class="input-group-prepend bg-transparent">
                        <i class="input-group-text border-0 mdi mdi-magnify"></i>
                    </div>
                </div>
            </form>
        </div>
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="assets/images/faces/face1.jpg" alt="profile">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="mb-2 font-admin">Hi, Super Admin</span>
                        <!-- <span class="text-secondary text-small">Project Manager</span> -->
                    </div>

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="all-requests.php">
                    <span class="menu-title">All Requests</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="publishers.php">
                    <span class="menu-title">Publishers</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="advertisers.php">
                    <span class="menu-title">Advertisers</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <span class="menu-title">Campaigns</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic" style="">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="all-campaigns.php">All Campaigns</a></li>
                        <li class="nav-item"> <a class="nav-link" href="all-campaigns.php">Applied Campaigns</a></li>
                        <li class="nav-item"> <a class="nav-link" href="all-campaigns.php">Paused Campaigns</a></li>
                    </ul>
                </div>
            </li>

            
            <li class="nav-item">
                <a class="nav-link" href="blog.php">
                    <span class="menu-title">Blog</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="payout.php">
                    <span class="menu-title">Payouts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="enquire.php">
                    <span class="menu-title">Enquire</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="notify.php">
                    <span class="menu-title">Notify</span>
                </a>
            </li>


            <li class="nav-item sidebar-actions">
                <span class="nav-link">
                    <button class="btn btn-block btn-lg btn-gradient-primary mt-4">Login to Post Affiliate Pro</button>
                </span>
            </li>
        </ul>
    </nav>
    <!-- partial -->