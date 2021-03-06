<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="#">
                    <img src="{{asset('admin/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
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
            </ul>
        </div>
    </nav>
</header>