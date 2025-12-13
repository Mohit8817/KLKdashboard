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

    . {
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
            style="background-color: #091429 !important; height: 100vh !important; position: fixed;">



            <a href="{{ route('state') }}" class="brand-link text-light">
                <img src="{{ asset('dist/img/klk.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle p-1 elevation-3" style=" background-color: white;padding: 2px;">
                <span class="brand-text text-white">KLK Ventures - {{ $state[0] }}{{ $state[1] }}</span>

            </a>

            <div class="sidebar">
                <nav>
                    <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-flat pt-2" data-widget="treeview"
                        role="menu" data-accordion="false">

                        <li
                            class="nav-item sidesEle bord {{ request()->routeIs('karnataka-swp-dash') ? 'activeSide' : '' }}">
                            <a href="{{ route('karnataka-swp-dash') }}" class="nav-link  p-2  ">
                                <i class="nav-icon fas fa-home "></i>
                                <p class="text-white ">
                                    SWP Dashboard 
                                </p>
                            </a>
                        </li>

                        <li
                            class="nav-item sidesEle bord {{ request()->routeIs('karnataka-swp-dashboard') ? 'activeSide' : '' }}">
                            <a href="{{ route('karnataka-swp-dashboard') }}" class="nav-link  p-2  ">
                                <i class="nav-icon fas fa-home "></i>
                                <p class="text-white ">
                                    New SWP Dashboard
                                </p>
                            </a>
                        </li>

                        <li
                            class="nav-item sidesEle {{ request()->routeIs('karnataka.wordorder') ? 'activeSide' : '' }}">
                            <a href="{{ route('karnataka.wordorder') }}" class="nav-link">
                                <i class="nav-icon fa fa-fw fas fa-home"></i>
                                <p>
                                    Workorder
                                </p>
                            </a>
                        </li>

                        <li
                            class="nav-item sidesEle bord {{ request()->routeIs('karnataka.add-swp') || request()->routeIs('karnataka.view-swp') || request()->routeIs('karnataka.upload-swp') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">SWP<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li
                                    class="nav-item sidesEle bord  {{ request()->routeIs('karnataka.add-swp') ? 'activeSide' : '' }}">
                                    <a href="{{ route('karnataka.add-swp') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add SWP
                                        </p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item sidesEle bord  {{ request()->routeIs('karnataka.view-swp') ? 'activeSide' : '' }}">
                                    <a href="{{ route('karnataka.view-swp') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View SWP
                                        </p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item sidesEle bord  {{ request()->routeIs('karnataka.upload-swp') ? 'activeSide' : '' }}">
                                    <a href="{{ route('karnataka.upload-swp') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Upload SWP
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="nav-item sidesEle bord {{ request()->routeIs('karnataka-add-swp-installation') || request()->routeIs('karnataka-view-swp-installation') || request()->routeIs('karnataka-edit-swp-installation') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-poll-h"></i>
                                <p class="text-white">NEW SWP<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li
                                    class="nav-item sidesEle bord  {{ request()->routeIs('karnataka-add-swp-installation') ? 'activeSide' : '' }}">
                                    <a href="{{ route('karnataka-add-swp-installation') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            Add SWP
                                        </p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item sidesEle bord  {{ request()->routeIs('karnataka-view-swp-installation') ? 'activeSide' : '' }}">
                                    <a href="{{ route('karnataka-view-swp-installation') }}" class="nav-link   p-2  ">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p class="text-white ">
                                            View SWP
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="nav-item sidesEle  {{ request()->routeIs('add-notification') || request()->routeIs('view-notification') || request()->routeIs('view-approve-notification') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-bell"></i>
                                <p>
                                    Task Assign
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li
                                    class="nav-item sidesEle {{ request()->routeIs('add-notification') ? 'activeSide' : '' }} ">
                                    <a href="{{ route('add-notification') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Task Assign</p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item sidesEle {{ request()->routeIs('view-notification') ? 'activeSide' : '' }} ">
                                    <a href="{{ route('view-notification') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Task Assign</p>
                                    </a>
                                </li>

                                <li
                                    class="nav-item sidesEle {{ request()->routeIs('view-approve-notification') ? 'activeSide' : '' }} ">
                                    <a href="{{ route('view-approve-notification') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Task Assign By Me</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav-item sidesEle {{ request()->routeIs('add-product') || request()->routeIs('view-product') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Product
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li
                                    class="nav-item sidesEle {{ request()->routeIs('add-product') ? 'activeSide' : '' }}">
                                    <a href="{{ route('add-product') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Product</p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item sidesEle {{ request()->routeIs('view-product') ? 'activeSide' : '' }}">
                                    <a href="{{ route('view-product') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Product</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav-item sidesEle bord {{ request()->routeIs('add-request') || request()->routeIs('view-request') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link p-2">
                                <i class="nav-icon fas fa-users"></i>
                                <p class="text-white">
                                    Request
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item {{ request()->routeIs('add-request') ? 'activeSide' : '' }}">
                                    <a href="{{ route('add-request') }}" class="nav-link">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>Add Request</p>
                                    </a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('view-request') ? 'activeSide' : '' }}">
                                    <a href="{{ route('view-request') }}" class="nav-link">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>View Request</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="nav-item  sidesEle bord {{ request()->routeIs('inhouse-product-dispatch') || request()->routeIs('view-inhouse-dispatch') || request()->routeIs('add-product-dispatch') || request()->routeIs('view-product-dispatch') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link  p-2">
                                <i class="nav-icon fas fa-users"></i>
                                <p class="text-white">
                                    Dispatch
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li
                                    class="nav-item {{ request()->routeIs('inhouse-product-dispatch') ? 'activeSide' : '' }}">
                                    <a href="{{ route('inhouse-product-dispatch') }}" class="nav-link">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>Inhouse Dispatch</p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item {{ request()->routeIs('view-inhouse-dispatch') ? 'activeSide' : '' }}">
                                    <a href="{{ route('view-inhouse-dispatch') }}" class="nav-link">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>View Inhouse</p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item {{ request()->routeIs('add-product-dispatch') ? 'activeSide' : '' }}">
                                    <a href="{{ route('add-product-dispatch') }}" class="nav-link">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>Product Dispatch</p>
                                    </a>
                                </li>
                                <li
                                    class="nav-item {{ request()->routeIs('view-product-dispatch') ? 'activeSide' : '' }}">
                                    <a href="{{ route('view-product-dispatch') }}" class="nav-link">
                                        <i class="fas fa-arrow-right nav-icon" style="font-size: small;"></i>
                                        <p>View Outer</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @if ($role == '0' || $role == '1')
                            <li
                                class="nav-item sidesEle bord {{ request()->routeIs('add-user') || request()->routeIs('view-user') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        User
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <!--<li-->
                                    <!--    class="nav-item sidesEle  {{ request()->routeIs('add-user') ? 'activeSide' : '' }}">-->
                                    <!--    <a href="{{ route('add-user') }}" class="nav-link">-->
                                    <!--        <i class="far fa-circle nav-icon"></i>-->
                                    <!--        <p>Add User</p>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <li
                                        class="nav-item sidesEle  {{ request()->routeIs('view-user') ? 'activeSide' : '' }}">
                                        <a href="{{ route('view-user') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>View User</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

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
