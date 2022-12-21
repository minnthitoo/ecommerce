<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activities</a>
                <form action="{{ route('logout') }}" class="dropdown-item" method="post">
                    @csrf
                    <input type="submit" class="btn btn-primary" value="Logout">
                </form>
            </div>
        </li>
    </ul>
</nav>
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{route('admin#dashboard')}}">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
            <a class="nav-link" href="/admin/dashboard" target="_blank">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span>

            </a>
        </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Function</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            {{-- <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">UI elements</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-color.html"><span class="ml-1 item-text">Colors</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-typograpy.html"><span
                                class="ml-1 item-text">Typograpy</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-icons.html"><span class="ml-1 item-text">Icons</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-buttons.html"><span
                                class="ml-1 item-text">Buttons</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-notification.html"><span
                                class="ml-1 item-text">Notifications</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-modals.html"><span class="ml-1 item-text">Modals</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-tabs-accordion.html"><span class="ml-1 item-text">Tabs &
                                Accordion</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./ui-progress.html"><span
                                class="ml-1 item-text">Progress</span></a>
                    </li>
                </ul>
            </li> --}}
            <li class="nav-item w-100">
                <a class="nav-link" href="/" target="_blank">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Website</span>

                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#order" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">Order Managmenet</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="order">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span
                                class="ml-1 item-text">All Order</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">
                               Pending Order</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">
                               Paid Order</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">
                               Delivery Order</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">
                               Complete Order</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href=""><span class="ml-1 item-text">
                               Cancel Order</span></a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">User Managmenet</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="user">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#user#create#form')}}"><span
                                class="ml-1 item-text">Add New User</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#user#table')}}"><span class="ml-1 item-text">View
                                View All
                                User</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#user#admin')}}"><span class="ml-1 item-text">View
                               Admin User</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#user#shop')}}"><span class="ml-1 item-text">View
                               Shop User</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#user#user')}}"><span class="ml-1 item-text">View
                               Normal User</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">View
                              Customer Relation</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#shop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-shopping-bag fe-16"></i>
                    <span class="ml-3 item-text">Shop Managmenet</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="shop">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#shop#create')}}"><span class="ml-1 item-text">Add
                                Shop</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#shop')}}"><span class="ml-1 item-text">View All
                                Shop</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#shop')}}"><span class="ml-1 item-text">View Draft
                                Shop</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#shop')}}"><span class="ml-1 item-text">View Active
                                Shop</span></a>
                    </li>

                </ul>
            </li>
            {{-- <li class="nav-item dropdown">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-grid fe-16"></i>
                    <span class="ml-3 item-text">Tables</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./table_basic.html"><span class="ml-1 item-text">Basic
                                Tables</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./table_advanced.html"><span class="ml-1 item-text">Advanced
                                Tables</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./table_datatables.html"><span class="ml-1 item-text">Data
                                Tables</span></a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="nav-item dropdown">
                <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-pie-chart fe-16"></i>
                    <span class="ml-3 item-text">Charts</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-inline.html"><span class="ml-1 item-text">Inline
                                Chart</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-chartjs.html"><span
                                class="ml-1 item-text">Chartjs</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./chart-apexcharts.html"><span
                                class="ml-1 item-text">ApexCharts</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./datamaps.html"><span class="ml-1 item-text">Datamaps</span></a>
                    </li>
                </ul>
            </li> --}}
        </ul>
        {{-- <p class="text-muted nav-heading mt-4 mb-1">
            <span>Apps</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="calendar.html">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">Calendar</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">Contacts</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                    <a class="nav-link pl-3" href="./contacts-list.html"><span class="ml-1">Contact List</span></a>
                    <a class="nav-link pl-3" href="./contacts-grid.html"><span class="ml-1">Contact Grid</span></a>
                    <a class="nav-link pl-3" href="./contacts-new.html"><span class="ml-1">New Contact</span></a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">Profile</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                    <a class="nav-link pl-3" href="./profile.html"><span class="ml-1">Overview</span></a>
                    <a class="nav-link pl-3" href="./profile-settings.html"><span class="ml-1">Settings</span></a>
                    <a class="nav-link pl-3" href="./profile-security.html"><span class="ml-1">Security</span></a>
                    <a class="nav-link pl-3" href="./profile-notification.html"><span
                            class="ml-1">Notifications</span></a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-folder fe-16"></i>
                    <span class="ml-3 item-text">File Manager</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
                    <a class="nav-link pl-3" href="./files-list.html"><span class="ml-1">Files List</span></a>
                    <a class="nav-link pl-3" href="./files-grid.html"><span class="ml-1">Files Grid</span></a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#support" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-compass fe-16"></i>
                    <span class="ml-3 item-text">Help Desk</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="support">
                    <a class="nav-link pl-3" href="./support-center.html"><span class="ml-1">Home</span></a>
                    <a class="nav-link pl-3" href="./support-tickets.html"><span class="ml-1">Tickets</span></a>
                    <a class="nav-link pl-3" href="./support-ticket-detail.html"><span class="ml-1">Ticket
                            Detail</span></a>
                    <a class="nav-link pl-3" href="./support-faqs.html"><span class="ml-1">FAQs</span></a>
                </ul>
            </li>
        </ul> --}}
        {{-- <p class="text-muted nav-heading mt-4 mb-1">
            <span>Extra</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-file fe-16"></i>
                    <span class="ml-3 item-text">Pages</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100 w-100" id="pages">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./page-orders.html">
                            <span class="ml-1 item-text">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./page-timeline.html">
                            <span class="ml-1 item-text">Timeline</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./page-invoice.html">
                            <span class="ml-1 item-text">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./page-404.html">
                            <span class="ml-1 item-text">Page 404</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./page-500.html">
                            <span class="ml-1 item-text">Page 500</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./page-blank.html">
                            <span class="ml-1 item-text">Blank</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#auth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-shield fe-16"></i>
                    <span class="ml-3 item-text">Authentication</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="auth">
                    <a class="nav-link pl-3" href="./auth-login.html"><span class="ml-1">Login 1</span></a>
                    <a class="nav-link pl-3" href="./auth-login-half.html"><span class="ml-1">Login 2</span></a>
                    <a class="nav-link pl-3" href="./auth-register.html"><span class="ml-1">Register</span></a>
                    <a class="nav-link pl-3" href="./auth-resetpw.html"><span class="ml-1">Reset Password</span></a>
                    <a class="nav-link pl-3" href="./auth-confirm.html"><span class="ml-1">Confirm Password</span></a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#layouts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-layout fe-16"></i>
                    <span class="ml-3 item-text">Layout</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="layouts">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./index.html"><span class="ml-1 item-text">Default</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./index-horizontal.html"><span class="ml-1 item-text">Top
                                Navigation</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="./index-boxed.html"><span class="ml-1 item-text">Boxed</span></a>
                    </li>
                </ul>
            </li>
        </ul> --}}
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Configuration</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#settings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-settings fe-16"></i>
                    <span class="ml-3 item-text">Settings</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="settings">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin#config#state') }}"><span
                                class="ml-1 item-text">Region</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin#config#city') }}"><span class="ml-1 item-text">
                                City </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin#industry#index') }}"><span
                                class="ml-1 item-text">
                                Industry </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin#category#index') }}"><span
                                class="ml-1 item-text">
                                Category </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin#subcategory#index') }}"><span
                                class="ml-1 item-text">
                                Sub-Category </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#config#siteInfo')}}"><span class="ml-1 item-text">
                                Site Info </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#config#toptext')}}"><span class="ml-1 item-text">
                                Top Text </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('admin#banner#ads')}}"><span class="ml-1 item-text">
                                Banner Images </span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#static" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-settings fe-16"></i>
                    <span class="ml-3 item-text">Static</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="static">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin#view#all#route') }}"><span
                                class="ml-1 item-text"> All Route</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin#view#all#logs') }}"><span class="ml-1 item-text">
                                Logs </span></a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>
</aside>
