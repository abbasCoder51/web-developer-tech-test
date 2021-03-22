<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.featured-talents.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Featured Talent
    </div>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.featured-talents.index') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Featured Talent</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Section
    </div>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.sections.index') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Sections</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
<!-- End of Sidebar -->