 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
      
        <div class="sidebar-brand-text mx-3">My Pharmacy</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">

        <button class="btn btn-danger btn-block">POS System</button>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
       APPLICATION MODULES
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-capsule" style="font-size: 18px;"></i>
            <span>Drugs</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ route('drugs.create') }}">Add New</a>
                <a class="collapse-item" href="{{ route('drugs.index') }}">View All</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="true" aria-controls="collapseCategory">
            <i class="bi bi-tags" style="font-size: 18px;"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Components:</h6> --}}
                <a class="collapse-item" href="{{ route('categories.create') }}">Add New</a>
                <a class="collapse-item" href="{{ route('categories.index') }}">View All</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomers"
            aria-expanded="true" aria-controls="collapseCustomers">
            <i class="bi bi-people" style="font-size: 18px;"></i>
            <span>Customers</span>
        </a>
        <div id="collapseCustomers" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('customers.create') }}">Add New</a>
                <a class="collapse-item" href="{{ route('customers.index') }}">View All</a>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBrands"
            aria-expanded="true" aria-controls="collapseBrands">
            <i class="bi bi-box" style="font-size: 18px;"></i>
            <span>Brands</span>
        </a>
        <div id="collapseBrands" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('brands.create') }}">Add New</a>
                <a class="collapse-item" href="{{ route('brands.index') }}">View All</a>
        </div>
    </li>


    <div class="sidebar-heading">
       GENERAL SETTINGS
     </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-gear"  style="font-size: 18px;"></i>
            <span>System Settings</span></a>
    </li>


</ul>
<!-- End of Sidebar -->