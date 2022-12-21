<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="images/icon/logo.png" alt="CoolAdmin" />
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
                <li class="has-sub">
                    <a class="js-arrow" href="{{route('merchant#dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="/" target="_blank">
                        <i class="fas fa-table"></i>Website</a>
                </li>
                <li>
                    <a href="{{route('merchant#product#create')}}">
                        <i class="fas fa-table"></i>Product</a>
                </li>
                <li>
                    <a href="{{ route('merchant#order') }}">
                        <i class="fas fa-chart-bar "></i>Order Management</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Product</a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#" style="color: black;font-size:28px;font-style:'Times New Roman', Times, serif;">
            <b>Merchant Panel</b>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a target="_blank" href="{{route('merchant#dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                </li>
                <li>
                    <a href="/" target="_blank">
                        <i class="fas fa-table"></i>Website</a>
                </li>
                {{-- <li>

                    <a href="{{route('merchant#product#create')}}">
                <i class="fas fa-table"></i>Product</a>
                </li> --}}
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-table"></i>Products</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('merchant#product#list')}}">List</a>
                        </li>
                        <li>
                            <a href="{{route('merchant#product#create')}}">Create Product</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Cupons</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a target="_blank" href="{{ route('merchant#cupon#list') }}">List</a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ route('merchant#cupon#createPage') }}">Create Cupon</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-table"></i>Product</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{route('merchant#product#list')}}" target="_blank">View All Product</a>
                        </li>
                        <li>
                            <a href="register.html"  target="_blank">Pending Product</a>
                        </li>
                        <li>
                            <a href="{{route('merchant#product#create')}}"  target="_blank">Create New Product</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-chart-bar"></i>Order</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">View All Order</a>
                        </li>
                        <li>
                            <a href="register.html">Pending Order</a>
                        </li>
                        <li>
                            <a href="">Order Confirm</a>
                        </li>
                        <li>
                            <a href="">Order Cancel</a>
                        </li>
                        <li>
                            <a href="">Create Order</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Customer</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="fas fa-map-marker-alt"></i>Partner</a>
                </li>
                <li>
                    <a href="{{route('merchant#shopbanner#index')}}" target="_blank">
                        <i class="fas fa-bars"></i>Banner</a>
                </li>
                <li>
                    <a href="{{route('merchant#shop#setting')}}" target="_blank">
                        <i class="fas fa-cog"></i>Setting</a>
                </li>
                {{-- <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
