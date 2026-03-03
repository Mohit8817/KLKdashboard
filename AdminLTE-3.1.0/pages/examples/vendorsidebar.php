@if (in_array('SRT', $categoryData) && in_array('installation', $typeData))
<li class="nav-item sidesEle {{ request()->routeIs('v-dashboard') ? 'activeside' : '' }}">
        <abbr href="{{ route('v-dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                SSL Dashboard
            </p>
            </a>
    </li>

<li class="nav-item sidesEle {{ request()->routeIs('ssl-installation-dashboard') ? 'activeside' : '' }}">
    <a href="{{ route('ssl-installation-dashboard') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            SSL Dashboard
        </p>
    </a>
</li>
@endif
@if (in_array('SRT', $categoryData) && in_array('installation', $typeData))
<li class="nav-item sidesEle {{ request()->routeIs('v-bihar-vendor-srt-installation-dashboard') ? 'activeside' : '' }}">
    <a href="{{ route('v-bihar-vendor-srt-installation-dashboard') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            SRT Dashboard
        </p>
    </a>
</li>

@endif
@if (in_array('SRT', $categoryData) && in_array('installation', $typeData))
<li
    class="nav-item sidesEle {{ request()->routeIs('v-srt.viewassignsite') || request()->routeIs('v-srt.installationsite') || request()->routeIs('v-srt.allassignsite') || request()->routeIs('v-srt.paymentVendor') ? 'menu-open' : '' }} ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Bihar SRT Install
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">
        <li class="nav-item sidesEle {{ request()->routeIs('v-srt.viewassignsite') ? 'activeside' : '' }} ">
            <a href="{{ route('v-srt.viewassignsite') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Request Accept</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item sidesEle {{ request()->routeIs('v-srt.installationsite') ? 'activeside' : '' }} ">
            <a href="{{ route('v-srt.installationsite') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Installation Details</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item sidesEle {{ request()->routeIs('v-srt.allassignsite') ? 'activeside' : '' }} ">
            <a href="{{ route('v-srt.allassignsite') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> View SRT Installation</p>
            </a>
        </li>
    </ul>
    @if (SESSION('loginId') == SESSION('parent_id'))
        <ul class="nav nav-treeview">
            <li class="nav-item sidesEle {{ request()->routeIs('v-srt.paymentVendor') ? 'activeside' : '' }} ">
                <a href="{{ route('v-srt.paymentVendor') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Claim Request</p>
                </a>
            </li>
        </ul>
    @endif
</li>
@endif
@if (in_array('SRT', $categoryData) && in_array('survey', $typeData))
<li
    class="nav-item sidesEle {{ request()->routeIs('bihar-srt200mw-survey') || request()->routeIs('bihar-srt200mw-view-survey') ? 'menu-open' : '' }} ">
    <a href="#" class="nav-link">
        <i class="nav-icon fa-solid fa-screwdriver-wrench"></i>
        <p>
            Bihar SRT 200MW Survey
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item sidesEle {{ request()->routeIs('bihar-srt200mw-survey') ? 'activeside' : '' }} ">
            <a href="{{ route('bihar-srt200mw-survey') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Survey 200MW</p>
            </a>
        </li>
        <li class="nav-item sidesEle {{ request()->routeIs('bihar-srt200mw-view-survey') ? 'activeside' : '' }} ">
            <a href="{{ route('bihar-srt200mw-view-survey') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Survey 200MW</p>
            </a>
        </li>
    </ul>
</li>
@endif
@if (in_array('SSL', $categoryData) && in_array('installation', $typeData))
<li
    class="nav-item sidesEle {{ request()->routeIs('v-view-assigned-bihar-ssl-site') || request()->routeIs('v-install-bihar-ssl-site') || request()->routeIs('v-view-ssl-complete-site') || request()->routeIs('v-view-claim-request-deatils') || request()->routeIs('bihar-ssl-light-supply-inspection') || request()->routeIs('bihar-ssl-light-installation-inspection') ? 'menu-open' : '' }} ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Bihar SSL Installation
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item sidesEle {{ request()->routeIs('v-view-assigned-bihar-ssl-site') ? 'activeside' : '' }} ">
            <a href="{{ route('v-view-assigned-bihar-ssl-site') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Assigned Sites</p>
            </a>
        </li>
        <li class="nav-item sidesEle {{ request()->routeIs('v-install-bihar-ssl-site') ? 'activeside' : '' }} ">
            <a href="{{ route('v-install-bihar-ssl-site') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Install Site</p>
            </a>
        </li>
        <li class="nav-item sidesEle {{ request()->routeIs('v-view-ssl-complete-site') ? 'activeside' : '' }} ">
            <a href="{{ route('v-view-ssl-complete-site') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Installation Detail</p>
            </a>
        </li>
        {{-- <li
                class="nav-item sidesEle {{ request()->routeIs('v-view-claim-request-deatils') ? 'activeside' : '' }} ">
                <a href="{{ route('v-view-claim-request-deatils') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Claim Request</p>
                </a>
            </li> --}}
        <li
            class="nav-item sidesEle {{ request()->routeIs('bihar-ssl-light-supply-inspection') ? 'activeside' : '' }} ">
            <a href="{{ route('bihar-ssl-light-supply-inspection') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Supply Inspection</p>
            </a>
        </li>
        <li
            class="nav-item sidesEle {{ request()->routeIs('bihar-ssl-light-installation-inspection') ? 'activeside' : '' }} ">
            <a href="{{ route('bihar-ssl-light-installation-inspection') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Installation Inspection</p>
            </a>
        </li>

    </ul>
</li>
@endif
@if (in_array('SSL', $categoryData) && in_array('amc', $typeData))
<li
    class="nav-item sidesEle {{ request()->routeIs('v-edit-biharssl') || request()->routeIs('v-view-biharssl') || request()->routeIs('v-view-bihar-ssl-complaint') ? 'menu-open' : '' }} ">
    <a href="#" class="nav-link">
        <i class="nav-icon fa-solid fa-screwdriver-wrench"></i>
        <p>
            Bihar SSl AMC
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item sidesEle {{ request()->routeIs('v-edit-biharssl') ? 'activeside' : '' }} ">
            <a href="{{ route('v-edit-biharssl') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add AMC</p>
            </a>
        </li>
        <li class="nav-item sidesEle  {{ request()->routeIs('v-view-biharssl') ? 'activeside' : '' }} ">
            <a href="{{ route('v-view-biharssl') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View All</p>
            </a>
        </li>
        <li class="nav-item sidesEle {{ request()->routeIs('v-view-bihar-ssl-complaint') ? 'activeside' : '' }} ">
            <a href="{{ route('v-view-bihar-ssl-complaint') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Complaint Raised</p>
            </a>
        </li>
    </ul>
</li>
@endif
@if (in_array('SRT', $categoryData) && in_array('amc', $typeData))
<li
    class="nav-item sidesEle {{ request()->routeIs('v-bihar-add-srt-amc') || request()->routeIs('v-bihar-view-srt-amc') || request()->routeIs('v-bihar-view-srt-amc-complaint') ? 'menu-open' : '' }} ">
    <a href="#" class="nav-link">
        <i class="nav-icon fa-solid fa-screwdriver-wrench"></i>
        <p>
            Bihar SRT AMC
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item sidesEle {{ request()->routeIs('v-bihar-add-srt-amc') ? 'activeside' : '' }} ">
            <a href="{{ route('v-bihar-add-srt-amc') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add AMC</p>
            </a>
        </li>
        <li class="nav-item sidesEle {{ request()->routeIs('v-bihar-view-srt-amc') ? 'activeside' : '' }} ">
            <a href="{{ route('v-bihar-view-srt-amc') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View All</p>
            </a>
        </li>
        <li class="nav-item sidesEle {{ request()->routeIs('v-bihar-view-srt-amc-complaint') ? 'activeside' : '' }} ">
            <a href="{{ route('v-bihar-view-srt-amc-complaint') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>SRT Complaint Raised</p>
            </a>
        </li>
    </ul>
</li>
@endif

<!--<li class="nav-item sidesEle ">-->
<!--    <a href="#" class="nav-link">-->
<!--        <i class="nav-icon fa-solid fa-boxes-stacked"></i>-->
<!--        <p>-->
<!--            Bihar RM AMC SSL-->
<!--            <i class="fas fa-angle-left right"></i>-->
<!--        </p>-->
<!--    </a>-->
<!--    <ul class="nav nav-treeview">-->
<!--        <li class="nav-item sidesEle ">-->
<!--            <a href="{{ route('v-vendor-view-ssl-complaint') }}" class="nav-link">-->
<!--                <i class="far fa-circle nav-icon"></i>-->
<!--                <p>SSL AMC</p>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--</li>-->