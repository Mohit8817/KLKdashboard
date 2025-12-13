<style>
    .dot {
        display: block;
        position: absolute;
        height: 10px !important;
        width: 10px !important;
        background-color: #6de708;
        border-radius: 50%;
        top: 25px;
        left: 35px;
    }

    .activePage {
        background-color: #785822;

        font-weight: 800;
    }

    .sidesEle {
        font-size: 16px;
        font-weight: 400;
    }
</style>
</head>



<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-secondary navbar-light text-sm"
            style="height:58px; background-color: #605ca8 !important; position: sticky; top: 0%; ">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item sidesEle ">
                    <a class="nav-link text-light" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item sidesEle  hidden-mobile">
                    <div class="user-panel  d-flex">
                        <div class="image">
                            <img src="{{ asset('dist/img/avatar4.png') }}" class="img-circle elevation-2"
                                alt="User Image">
                            <span class="dot"></span>
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">{{ $state }}</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item sidesEle ">
                    <a class="nav-link text-light" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>


            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-secondary elevation-4"
            style="background-color:#091429 !important; height: 100vh !important; position: fixed;">

            <a href="{{ route('state') }}" class="brand-link text-light  "
                style="height:58px; background-color: #605ca8 !important">
                <img src="{{ asset('dist/img/klk.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle p-1 elevation-3" style=" background-color: white;padding: 2px;">
                <span class="brand-text text-white">KLK Ventures - {{ $state[0] }}</span>

            </a>

            <div class="sidebar">
                <nav>
                    <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat pt-2" data-widget="treeview"
                        role="menu" data-accordion="false">


                        <li
                            class="nav-item sidesEle bord {{ request()->routeIs('hp-ssl-dashboard') ? 'activeSide' : '' }} ">
                            <a href="{{ route('hp-ssl-dashboard') }}" class="nav-link  p-2   ">
                                <i class="nav-icon fas fa-home "></i>
                                <p class="text-white ">
                                    SSL Dashboard
                                </p>
                            </a>
                        </li>


                        <li
                            class="nav-item sidesEle bord  {{ request()->routeIs('hp-shl-dashboard') ? 'activeSide' : '' }} ">
                            <a href="{{ route('hp-shl-dashboard') }}" class="nav-link  p-2  ">
                                <i class="nav-icon fas fa-home "></i>
                                <p class="text-white ">
                                    SHL Dashboard
                                </p>
                            </a>
                        </li>

                        <li
                            class="nav-item sidesEle bord {{ request()->routeIs('add-hp-ssl') || request()->routeIs('view-hp-ssl') || request()->routeIs('himachal-ssl-upload-import') ? 'menu-open' : '' }} ">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">SSL<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li
                                    class="nav-item sidesEle bord {{ request()->routeIs('add-hp-ssl') ? 'activeSide' : '' }}  ">
                                    <a href="{{ route('add-hp-ssl') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add SSL
                                        </p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item sidesEle bord  {{ request()->routeIs('view-hp-ssl') ? 'activeSide' : '' }} ">
                                    <a href="{{ route('view-hp-ssl') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View SSL
                                        </p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item sidesEle bord {{ request()->routeIs('himachal-ssl-upload-import') ? 'activeSide' : '' }}  ">
                                    <a href="{{ route('himachal-ssl-upload-import') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Upload SSL
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="nav-item sidesEle bord {{ request()->routeIs('add-hp-home-lights') || request()->routeIs('view-hp-home-lights') || request()->routeIs('himachal-shl-upload-import') ? 'menu-open' : '' }} ">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">SHL<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li
                                    class="nav-item sidesEle bord  {{ request()->routeIs('add-hp-home-lights') ? 'activeSide' : '' }} ">
                                    <a href="{{ route('add-hp-home-lights') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add SHL Detail
                                        </p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item sidesEle bord  {{ request()->routeIs('view-hp-home-lights') ? 'activeSide' : '' }}">
                                    <a href="{{ route('view-hp-home-lights') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View SHL Detail
                                        </p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item sidesEle bord  {{ request()->routeIs('himachal-shl-upload-import') ? 'activeSide' : '' }} ">
                                    <a href="{{ route('himachal-shl-upload-import') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Upload SHL
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="nav-item sidesEle {{ request()->routeIs('add-ssl-complaint') || request()->routeIs('view-ssl-complaint') ? 'menu-open' : '' }} ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    SSL Complaint
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li
                                    class="nav-item sidesEle  {{ request()->routeIs('add-ssl-complaint') ? 'activeSide' : '' }} ">
                                    <a href="{{ route('hp-ssl-complaint') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Complaint</p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item sidesEle {{ request()->routeIs('view-ssl-complaint') ? 'activeSide' : '' }} ">
                                    <a href="{{ route('view-hp-ssl-complaint') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Complaint</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item sidesEle ">
                            <a href="{{ route('logout') }}" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>
