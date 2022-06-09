<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{asset('admin/images/icon/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{ route('home') }}">
                    <i class="fas fa-chart-line"></i>
                        Data Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact.index') }}">
                    <i class="fas fa-table"></i>
                        Data Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('gallery.index') }}">
                    <i class="fas fa-table"></i>
                        Data Gallery
                    </a>
                </li>
                <li>
                    <a href="{{ route('about.index') }}">
                    <i class="fas fa-table"></i>
                        Data About
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>
                        Halaman
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('home') }}">
                                Data Menu
                            </a>
                            <a href="{{ route('home') }}">
                                Data Halaman
                            </a>
                            <a href="{{ route('home') }}">
                                Data Role
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>