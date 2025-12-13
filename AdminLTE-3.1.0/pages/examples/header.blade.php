@include('component.erpnav')

<!-- Main Sidebar Container -->
<aside class="main-sidebar  elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('state') }}" class="brand-link" style="background-color: #ffffff;">
    <img src="{{ asset('dist/img/klk.png') }}" alt="AdminLTE Logo" class="brand-image img-circle p-1 elevation-3"
      style="opacity: 0.8">
    <span class="brand-text text-dark">KLK Ventures</span>

  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        <li class="nav-header">Dashboards</li>
        <li class="nav-item {{ request()->routeIs('karnataka-swp-dash') ? 'menu-open' : '' }}">
          <a href="{{ route('karnataka-swp-dash') }}" class="nav-link">
            <i class="bi bi-speedometer2 nav-icon"></i>
            <p>SWP Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ request()->routeIs('karnataka-swp-dashboard') ? 'active' : '' }}">
          <a href="{{ route('karnataka-swp-dashboard') }}"
            class="nav-link ">
            <i class="bi bi-speedometer nav-icon"></i>
            <p>New SWP Dashboard</p>
          </a>
        </li>

        {{-- Workorder --}}
        <li class="nav-item {{ request()->routeIs('karnataka.wordorder') ? 'active' : '' }}">
          <a href="{{ route('karnataka.wordorder') }}"
            class="nav-link ">
            <i class="bi bi-file-text nav-icon"></i>
            <p>Workorder</p>
          </a>
        </li>


        {{-- SRT MENU --}}
        <li class="nav-header">SWP Details</li>
        <li class="nav-item {{ request()->routeIs('karnataka.add-swp','karnataka.view-swp','karnataka.upload-swp') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link">
            <i class="bi bi-lightbulb nav-icon"></i>
            <p>SWP <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item  {{ request()->routeIs('karnataka.add-swp') ? 'active' : '' }}">
              <a href="{{ route('karnataka.add-swp') }}"
                class="nav-link">
                <i class="bi bi-plus-circle nav-icon"></i>
                <p>Add SWP</p>
              </a>
            </li>
            <li class="nav-item  {{ request()->routeIs('karnataka.view-swp') ? 'active' : '' }}">
              <a href="{{ route('karnataka.view-swp') }}"
                class="nav-link ">
                <i class="bi bi-eye nav-icon"></i>
                <p>View SWP</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('karnataka.upload-swp') }} {{ request()->routeIs('karnataka.upload-swp') ? 'active' : '' }}"
                class="nav-link ">
                <i class="bi bi-upload nav-icon"></i>
                <p>Upload SWP</p>
              </a>
            </li>
          </ul>
        </li>
        @php
        $addTaskActive = request()->routeIs('bihar-srt-add-task-assign');
        $viewCreatedTaskActive =
        request()->routeIs('bihar-srt-view-created-task-assign') ||
        request()->routeIs('bihar-srt-view-task-claim-approval');
        $viewAssignTaskActive =
        request()->routeIs('bihar-srt-view-task-assign') ||
        request()->routeIs('bihar-srt-task-claim');
        @endphp
        <li class="nav-item {{ request()->routeIs('add-notification','view-notification','view-approve-notification') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link">
            <i class="bi bi-list-check nav-icon"></i>
            <p>Task Assign <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item {{ request()->routeIs('add-notification') ? 'active' : '' }}">
              <a href="{{ route('add-notification') }}"
                class="nav-link ">
                <i class="bi bi-plus-square nav-icon"></i>
                <p>Add Task</p>
              </a>
            </li>
            <li class="nav-item {{ request()->routeIs('view-notification') ? 'active' : '' }}">
              <a href="{{ route('view-notification') }}"
                class="nav-link ">
                <i class="bi bi-eye nav-icon"></i>
                <p>View Task</p>
              </a>
            </li>
            <li class="nav-item {{ request()->routeIs('view-approve-notification') ? 'active' : '' }}">
              <a href="{{ route('view-approve-notification') }}"
                class="nav-link ">
                <i class="bi bi-person-check nav-icon"></i>
                <p>Task By Me</p>
              </a>
            </li>
          </ul>
        </li>
        {{-- Product --}}
        <li class="nav-item {{ request()->routeIs('add-product','view-product') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link">
            <i class="bi bi-box-seam nav-icon"></i>
            <p>Product <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item {{ request()->routeIs('add-product') ? 'active' : '' }}">
              <a href="{{ route('add-product') }}"
                class="nav-link ">
                <i class="bi bi-plus-circle nav-icon"></i>
                <p>Add Product</p>
              </a>
            </li>
            <li class="nav-item {{ request()->routeIs('view-product') ? 'active' : '' }}">
              <a href="{{ route('view-product') }}"
                class="nav-link ">
                <i class="bi bi-plus-circle nav-icon"></i>
                <p>View Product</p>
              </a>
            </li>
          </ul>
        </li>


        {{-- Request --}}
        <li class="nav-item{{ request()->routeIs('add-request') || request()->routeIs('view-request') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link">
            <i class="bi bi-box-seam nav-icon"></i>
            <p>Request <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item {{ request()->routeIs('add-request') ? 'active' : '' }}">
              <a href="{{ route('add-request') }}"
                class="nav-link ">
                <i class="bi bi-plus-circle nav-icon"></i>
                <p>Add Request</p>
              </a>
            </li>
            <li class="nav-item {{ request()->routeIs('view-request') ? 'active' : '' }}">
              <a href="{{ route('view-request') }}"
                class="nav-link ">
                <i class="bi bi-plus-circle nav-icon"></i>
                <p>View Request</p>
              </a>
            </li>
          </ul>
        </li>



        {{-- Dispatch --}}
        <li class="nav-item {{ request()->routeIs('inhouse-product-dispatch') || request()->routeIs('view-inhouse-dispatch') || request()->routeIs('add-product-dispatch') || request()->routeIs('view-product-dispatch') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link">
            <i class="bi bi-box-seam nav-icon"></i>
            <p>Dispatch <i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item {{ request()->routeIs('inhouse-product-dispatch') ? 'active' : '' }}">
              <a href="{{ route('inhouse-product-dispatch') }}"
                class="nav-link ">
                <i class="bi bi-plus-circle nav-icon"></i>
                <p>Inhouse Dispatch</p>
              </a>
            </li>
            <li class="nav-item {{ request()->routeIs('view-inhouse-dispatch') ? 'active' : '' }}">
              <a href="{{ route('view-inhouse-dispatch') }}"
                class="nav-link ">
                <i class="bi bi-plus-circle nav-icon"></i>
                <p>View Inhouse</p>
              </a>
            </li>

            <li class="nav-item {{ request()->routeIs('add-product-dispatch') ? 'active' : '' }}">
              <a href="{{ route('add-product-dispatch') }}"
                class="nav-link ">
                <i class="bi bi-plus-circle nav-icon"></i>
                <p>Product Dispatch</p>
              </a>
            </li>


            <li class="nav-item {{ request()->routeIs('view-product-dispatch') ? 'active' : '' }}">
              <a href="{{ route('view-product-dispatch') }}"
                class="nav-link ">
                <i class="bi bi-plus-circle nav-icon"></i>
                <p>View Outer</p>
              </a>
            </li>
          </ul>
        </li>


        {{-- Logout --}}
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">
            <i class="bi bi-box-arrow-right nav-icon"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
