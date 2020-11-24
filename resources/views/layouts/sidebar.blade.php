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
                <a href="{{route('users.index')}}"><i class="fas fa-users"></i><span>Pegawai</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-server"></i><span>Menu</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href=""><i class="fas fa-users"></i><span>Kategori</span></a>
                    </li>
                    <li>
                        <a href=""><i class="fas fa-users"></i><span>Produk</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('contact.index')}}"><i class="fas fa-users"></i><span>Kontak</span></a>
            </li>
            @endauth
        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini fixed-bottom">
            @guest
            <a href="{{route('login')}}" class="btn btn-primary btn-lg d-none d-lg-block btn-icon-split" style="width: 200px;">
                <i class="fas fa-sign-in-alt"></i> Login</a>
            @endguest
            @auth
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button class="btn btn-danger btn-lg btn-icon-split d-none d-lg-block" type="submit" style="width: 200px;">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
            </form>
            @endauth
        </div>
    </aside>
</div>