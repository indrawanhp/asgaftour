<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <button class="btn sidebar-brand d-flex align-items-center justify-content-center" style="background-color:#3a5fcc">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ASGAFTOUR</div>
    </button>


    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <button class="btn bg-primary nav-link" onclick="location.href='<?= base_url('admin/dashboard'); ?>'">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </button>
    </li>

    <!-- Nav Item - Pegawai -->
    <li class="nav-item">
        <button class="btn btn-primary nav-link" onclick="location.href='<?= base_url('admin/pegawai'); ?>'">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pegawai</span>
        </button>
    </li>





    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->