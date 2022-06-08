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
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact.index') }}">
                    <i class="fas fa-chart-bar"></i>
                        Data Contact Us
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>
                        Example
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('home') }}">
                                Example 1
                            </a>
                            <a href="{{ route('home') }}">
                                Example 2
                            </a>
                            <a href="{{ route('home') }}">
                                Example 3
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>