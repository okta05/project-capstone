<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-icon">
            <!-- <i class="fas fa-laugh-wink"></i> -->
            <img src="assets/img/logo_disbud.svg" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">SIMINTAS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-clock"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Profil -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('profile') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil</span></a>
    </li>

    <!-- Nav Item - Pemberitahuan -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('pemberitahuan') }}">
            <i class="fas fa-bell fa-fw"></i>
            <span>Pemberitahuan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->