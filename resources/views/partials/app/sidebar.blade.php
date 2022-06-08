<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{asset('admin/images/icon/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('home') }}">Dashboard 1</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('contact.index') }}">
                        <i class="fas fa-chart-bar"></i>Data Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>