@include('component.head')
@include('component.complaint-header')
@php
    $states = json_decode(session('StateAccess'), true);
@endphp
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Complaint Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Complaint Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            @section('content')
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                @if (in_array('kashmir', $states) || $role == '0')
                    <div class="row">
                        <div class="col-12 card pt-2 align-middle">
                            <h4 class="font-weight-bold">Kashmir</h4>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <a href="{{ route('view-kashmir-swp-complaint') }}" class="text-light">
                                        <h3>{{ $kashmir_swp_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            /
                                            {{ $kashmir_swp_com_open }}<sup style="font-size: 10px;"
                                                style="font-size:
                                            10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p>SWP Complaints</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-gantt"
                                        style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                </div>
                                <a href="{{ route('kashmir-swp-complaint') }}" class="small-box-footer">Add Complaint <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endif

                @if (in_array('jammu', $states) || $role == '0')
                    <div class="row">
                        <div class="col-12 card pt-2 align-middle">
                            <h4 class="font-weight-bold">Jammu</h4>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <a href="{{ route('view-jammu-ssl-complaint') }}" class="text-light">
                                        <h3>{{ $jammu_ssl_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            /{{ $jammu_ssl_com_open }}
                                            <sup style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p class="text-light">SSL Complaints</p>

                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-gantt"
                                        style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                </div>
                                <a href="{{ route('jammu-ssl-complaint') }}" class="small-box-footer"
                                    style="color:white !important">Add
                                    Complaint <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-primary" style="">
                                <div class="inner ">
                                    <a href="{{ route('view-jammu-srt-70mw-complaint') }}" class="text-light">
                                        <h3>{{ $jammu_srt_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            /
                                            {{ $jammu_srt_com_open }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p>SRT 70MW Complaints </p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-area"
                                        style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                </div>
                                <a href="{{ route('jammu-srt-70mw-complaint') }}" class="small-box-footer">Add
                                    Complaint <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-dark">
                                <div class="inner">
                                    <a href="{{ route('view-jammu-swp-complaint') }}" class="text-light">
                                        <h3>{{ $jammu_swp_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            /
                                            {{ $jammu_swp_com_open }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p>SWP Complaints</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="{{ route('jammu-swp-complaint') }}" class="small-box-footer">Add Complaint <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <a href="{{ route('view-jammu-shl-complaint') }}">
                                        <h3 class="text-light">{{ $jammu_shl_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            /
                                            {{ $jammu_shl_com_open }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p>SHL Complaints</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-line"
                                        style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                </div>
                                <a href="{{ route('jammu-shl-complaint') }}" class="small-box-footer">Add Complaint <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endif

                @if (in_array('himachal', $states) || $role == '0')
                    <div class="row">
                        <div class="col-12 card pt-2 align-middle">
                            <h4 class="font-weight-bold">Himachal Pradesh</h4>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <a href="{{ route('view-himachal-ssl-complaint') }}" class="text-light">
                                        <h3>{{ $himachal_ssl_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            /
                                            {{ $himachal_ssl_com_open }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p>SSL Complaints</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-gantt"
                                        style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                </div>
                                <a href="{{ route('himachal-ssl-complaint') }}" class="small-box-footer">Add
                                    Complaint <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <a href="{{ route('view-himachal-shl-complaint') }}">
                                        <h3 class="text-light">{{ $himachal_shl_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            /
                                            {{ $himachal_shl_com_open }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p class="text-light">SHL Complaints</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="{{ route('himachal-shl-complaint') }}" class="small-box-footer"
                                    style="color:white !important">Add
                                    Complaint <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endif

                @if (in_array('up', $states) || $role == '0')
                    <div class="row">
                        <div class="col-12 card pt-2 align-middle">
                            <h4 class="font-weight-bold">Uttar Pradesh</h4>
                        </div>
                        @if (SESSION('govt_status') != '1')
                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <a href="{{ route('view-up-ssl-complaint') }}" class="text-light">
                                            <h3>{{ $up_ssl_com_close }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                                /
                                                {{ $up_ssl_com_open }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                            </h3>
                                        </a>
                                        <p class="text-light">SSL Complaints</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="{{ route('up-ssl-complaint') }}" class="small-box-footer"
                                        style="color:white !important">Add
                                        Complaint <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-primary" style="">
                                    <div class="inner ">
                                        <a href="{{ route('view-up-power-pack-complaint') }}" class="text-light">
                                            <h3>{{ $up_powerpack_com_close }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                                /
                                                {{ $up_powerpack_com_open }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                            </h3>
                                        </a>
                                        <p>Power Pack Complaints </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-chart-area"
                                            style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                    </div>
                                    <a href="{{ route('up-power-pack-complaint') }}" class="small-box-footer">Add
                                        Complaint <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-dark">
                                    <div class="inner">
                                        <a href="{{ route('view-up-kusum-b-complaint') }}" class="text-light">
                                            <h3>{{ $up_kusumb_com_close }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                                / {{ $up_kusumb_com_open }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                            </h3>
                                        </a>
                                        <p>Kusum-B Complaints</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="{{ route('up-kusum-b-complaint') }}" class="small-box-footer">Add
                                        Complaint <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <a href="{{ route('up-kusum-c-complaint') }}">
                                            <h3 class="text-light">{{ $up_kusumc_com_close }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                                /
                                                {{ $up_kusumc_com_open }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                            </h3>
                                        </a>
                                        <p>Kusum-C Complaints</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-chart-line"
                                            style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                    </div>
                                    <a href="{{ route('up-kusum-c-complaint') }}" class="small-box-footer">Add
                                        Complaint <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <a href="{{ route('view-up-swp-complaint') }}">
                                            <h3 class="text-light">{{ $up_swp_com_open }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                                /
                                                {{ $up_swp_com_close }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                            </h3>
                                        </a>
                                        <p>SWP Complaints</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="{{ route('up-swp-complaint') }}" class="small-box-footer">Add
                                        Complaint
                                        <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <a href="{{ route('up-offgrid-complaint') }}">
                                            <h3 class="text-light">{{ $up_offgrid_com_close }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                                /
                                                {{ $up_offgrid_com_open }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                            </h3>
                                        </a>
                                        <p>UP OFF Grid Complaints</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-chart-line"
                                            style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                    </div>
                                    <a href="{{ route('up-offgrid-complaint') }}" class="small-box-footer">Add
                                        Complaint <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <a href="{{ route('view-up-ongrid-complaint') }}">
                                            <h3 class="text-light">{{ $up_ongrid_com_close }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                                /
                                                {{ $up_ongrid_com_open }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                            </h3>
                                        </a>
                                        <p>UP ON Grid Complaints</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-chart-line"
                                            style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                    </div>
                                    <a href="{{ route('up-ongrid-complaint') }}" class="small-box-footer">Add
                                        Complaint <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-primary" style="">
                                    <div class="inner ">
                                        <a href="{{ route('view-up-srlmsrt-complaint') }}" class="text-light">
                                            <h3>{{ $up_srlmsrt_com_close }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                                /
                                                {{ $up_srlmsrt_com_open }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                            </h3>
                                        </a>
                                        <p>SRLMSRT Complaints </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-chart-area"
                                            style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                    </div>
                                    <a href="{{ route('up-srlmsrt-complaint') }}" class="small-box-footer">Add
                                        Complaint
                                        <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-primary" style="">
                                    <div class="inner ">
                                        <a href="{{ route('up-srlmsrt-user-view-complaint') }}" class="text-light">
                                            <h3>{{ $up_srlmsrt_user_com_close }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                                /
                                                {{ $up_srlmsrt_user_com_open }}<sup
                                                    style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                            </h3>
                                        </a>
                                        <p>SRLMSRT Complaints </p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa-solid fa-chart-area"
                                            style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                    </div>
                                    <a href="{{ route('up-srlmsrt-user-add-complaint') }}" class="small-box-footer">Add
                                        Complaint
                                        <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        @endif
                    </div>

                @endif

                @if (in_array('bihar', $states) || $role == '0')
                    <div class="row">
                        <div class="col-12 card pt-2 align-middle">
                            <h4 class="font-weight-bold">Bihar</h4>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <a href="{{ route('view-bihar-ssl-complaint') }}" class="text-light">
                                        <h3>{{ $bihar_ssl_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            /
                                            {{ $bihar_ssl_com_open }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p>SSL Complaints</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-gantt"
                                        style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                </div>
                                <a href="{{ route('bihar-ssl-complaint') }}" class="small-box-footer">Add
                                    Complaint
                                    <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <a href="{{ route('view-bihar-srt-complaint') }}" class="text-light">
                                        <h3>{{ $bihar_srt_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            /
                                            {{ $bihar_srt_com_open }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p>SRT Complaints</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-gantt"
                                        style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                </div>
                                <a href="{{ route('bihar-srt-complaint') }}" class="small-box-footer">Add
                                    Complaint
                                    <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                @endif
                @if (in_array('karnataka', $states) || $role == '0')
                    <div class="row">
                        <div class="col-12 card pt-2 align-middle">
                            <h4 class="font-weight-bold">Karnataka</h4>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <a href="{{ route('view-karnataka-swp-complaint') }}" class="text-light">
                                        <h3>0<sup style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            / 0<sup
                                                style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p>SWP Complaints</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-gantt"
                                        style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                </div>
                                <a href="{{ route('karnataka-swp-complaint') }}" class="small-box-footer">Add
                                    Complaint <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endif

                @if (in_array('jharkhand', $states) || $role == '0')
                    <div class="row">
                        <div class="col-12 card pt-2 align-middle">
                            <h4 class="font-weight-bold">Jharkhand</h4>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <a href="{{ route('view-jharkhand-shl-complaint') }}" class="text-light">
                                        <h3>{{ $jharkhand_shl_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            / {{ $jharkhand_shl_com_open }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p>SHL Complaints</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-gantt"
                                        style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                </div>
                                <a href="{{ route('jharkhand-shl-complaint') }}" class="small-box-footer">Add
                                    Complaint <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endif

                @if (in_array('tripura', $states) || $role == '0')
                    <div class="row">
                        <div class="col-12 card pt-2 align-middle">
                            <h4 class="font-weight-bold">Tripura</h4>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <a href="{{ route('view-tripura-shl-complaint') }}" class="text-light">
                                        <h3>{{ $tripura_shl_com_close }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Resolved</sup>
                                            / {{ $tripura_shl_com_open }}<sup
                                                style="font-size: 10px; vertical-align: super !important;">Pending</sup>
                                        </h3>
                                    </a>
                                    <p>SHL Complaints</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-gantt"
                                        style="font-size: 50px; padding-top: 14px; padding-right: 2px;"></i>
                                </div>
                                <a href="{{ route('tripura-shl-complaint') }}" class="small-box-footer">Add
                                    Complaint
                                    <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </section>
    </div>

    @include('component.footer')
