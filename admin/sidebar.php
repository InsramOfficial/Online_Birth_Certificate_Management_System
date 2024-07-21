<?php
session_start();
if (!isset($_SESSION["AdminName"])) {
    header("Location:login.php");

}

?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">OBSC</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Birth Certificates App</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Birth Certificates App</h6>
                <a class="collapse-item" href="new-applications.php">New Application</a>
                <a class="collapse-item" href="verified-application.php">Verified Application</a>
                <a class="collapse-item" href="rejected-applications.php">Rejected Application</a>
                <a class="collapse-item" href="all-applications.php">All Application</a>
            </div>
        </div>

    </li>

    <li class="nav-item">
        <a class="nav-link" href="between-dates-report.php">
            <i class="fa-regular fa-calendar-days"></i>
            <span>B/W Dates Report</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="search.php">
            <i class="fa-brands fa-searchengin"></i>
            <span>Search</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="registered-users.php">
            <i class="fa fa-users"></i>
            <span>Registered Users</span></a>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.php">Logout</a>
            </div>
        </div>
    </div>
</div>