<!-- Sidebar outter -->
<div class="main-sidebar">
    <!-- sidebar wrapper -->
    <aside id="sidebar-wrapper">
        <!-- sidebar brand -->
        <div class="sidebar-brand">
            <a href="index.html">LelyCake</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">LC</a>
        </div>
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
            <!-- menu header -->
            <li class="menu-header">Menu</li>
            <!-- menu item -->
            <li>
                <a href="{{route('init')}}"><i class="fas fa-home"></i><span>Beranda</span></a>
            </li>
            @auth
            <li>
                <a href="{{route('dashboard')}}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{route('users')}}"><i class="fas fa-users"></i><span>Pegawai</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-server"></i><span>WIP</span></a>
                <ul class="dropdown-menu">
                    
                </ul>
            </li>
            @endauth
        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            @guest
            <a href="{{route('login')}}" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-sign-in-alt"></i> Login</a>
            @endguest
            @auth
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button class="btn btn-danger btn-lg btn-block btn-icon-split" type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
            @endauth
        </div>
    </aside>
</div>