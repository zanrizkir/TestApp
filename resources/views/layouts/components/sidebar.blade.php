<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-decoration-none">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin LTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-decoration-none ">{{ Auth::user()->name }}</a>
                {{-- <a href="/home" class="d-block text-decoration-none">Home</a> --}}
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="/home" class="nav-link {{ $active == 'home' ? 'active' : null }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p >
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/post" class="nav-link {{ $active == 'post' ? 'active' : null }}">
                    {{-- <a href="/post" class="nav-link "> --}}
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            Post
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/guru" class="nav-link {{ $active == 'guru' ? 'active' : null }}">
                    {{-- <a href="/guru" class="nav-link "> --}}
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Guru
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('murid.index')}}" class="nav-link {{ $active == 'murid' ? 'active' : null }}">
                    {{-- <a href="{{route('murid.index')}}" class="nav-link "> --}}
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Murid
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>