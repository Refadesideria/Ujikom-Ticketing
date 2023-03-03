<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text mx-3"> T i c k e t i n g<sup></sup></div>
    </a>
    @if (Auth::user()->role == 'admin')
        <!-- Divider -->

        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->

        <li class="nav-item active">
            <a class="nav-link" href="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>
    @if (Auth::user()->role == 'admin')
        {{-- TABLE --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-table"></i>
                <span>Master Data</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                 
                    <a class="collapse-item" href="{{ route('department.index') }}">Department</a>
                    <a class="collapse-item" href="{{ route('priority.index') }}">Priority</a>
                    <a class="collapse-item" href="{{ route('customer.index') }}">Customer</a>
                </div>
            </div>
        </li>
    @endif

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-folder"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                @if (Auth::user()->role == 'guest')
                    <a class="collapse-item" href="{{ route('ticketing.index') }}">Ticketing</a>
                    <a class="collapse-item" href="{{ route('customer.index') }}">Customer</a>

                @elseif (Auth::user()->role == 'admin')
                    <a class="collapse-item" href="{{ route('ticketing.index') }}">Ticketing</a>

                    <a class="collapse-item" href="{{ route('jenisrequest.index') }}">Jenis Request</a>
                    <a class="collapse-item" href="{{ route('projectcustomer.index') }}">Project Customer</a>
                    <a class="collapse-item" href="{{ route('laporan') }}">Laporan</a>

                @endif



            </div>
        </div>
    </li>



    @if (Auth::user()->role == 'admin')
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <div class="sidebar-heading">
          Settings
        </div>
        <li class="nav-item">
            <a class="nav-link" href="profile">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Profile</span></a>
        </li>

    @endif

</ul>
