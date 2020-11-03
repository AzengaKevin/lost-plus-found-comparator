<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" {{ $attributes }}>
    <a class="sidebar-brand d-flex align-items-center justify-content-center" role="button" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <img class="rounded-circle" src="{{ asset('img/avatar.jpg') }}" height="48" alt="IEBC Logo">
        </div>
        <div class="sidebar-brand-text mx-3">Officer</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Resources</div>

    <!-- Stations -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#stations-dropdown"
            aria-expanded="true" aria-controls="stations-dropdown">
            <i class="fas fa-fw fa-store-alt"></i>
            <span>Police Stations</span>
        </a>
        <div id="stations-dropdown" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quick Actions</h6>
                <a class="collapse-item" href="{{ route('admin.stations.index') }}">Browse Stations</a>
                <a class="collapse-item" href="{{ route('admin.stations.create') }}">Add Station</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Locations</div>

    <!-- Locations -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#counties-dropdown"
            aria-expanded="true" aria-controls="counties-dropdown">
            <i class="fa fa-fw fa-flag"></i>
            <span>Locations</span>
        </a>
        <div id="counties-dropdown" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quick Actions</h6>
                <a class="collapse-item" href="{{ route('admin.locations.index') }}">Browse Locations</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Stakeholders</div>

    <!-- Voters -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#voters-dropdown"
            aria-expanded="true" aria-controls="voters-dropdown">
            <i class="fa fa-fw fa-users"></i>
            <span>Observers</span>
        </a>
        <div id="voters-dropdown" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quick Actions</h6>
                <a class="collapse-item" href="#">Browse Observers</a>
                <a class="collapse-item" href="#">Add Observer</a>
            </div>
        </div>
    </li>                       
               
</ul>