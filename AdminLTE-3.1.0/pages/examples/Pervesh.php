@include('component.head')
@include('component.upksb-header')
@php
$volfilter = request('volume') ?? 'all';
@endphp

<style>
/* cards css  */
.stat-card {
    background: white;
    border-radius: 8px;
    padding: 15px;
    /* box-shadow: rgba(15, 49, 64, 0.12) 0px 2px 4px 0px, rgba(141, 172, 185, 0.32) 0px 2px 16px 0px; */
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    position: relative;
    height: 100%;

}

.card-number {
    color: #1f2937;
    font-size: 16px;
    font-weight: 600;
    line-height: 0.6;
    /* margin-bottom: 5px; */
}

.card-info {
    color: #9ca3af;
    font-size: 14px;
}

.card-info.text-success {
    color: #10b981 !important;
    font-weight: 500;
}

.card-info.text-warning {
    color: #f59e0b !important;
    font-weight: 500;
}

.icon-circle {
    position: absolute;
    top: 35px;
    right: 24px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
}

.bg-blue-light {
    background-color: #dbeafe;
    color: #3b82f6;
}

.bg-green-light {
    background-color: #d1fae5;
    color: #10b981;
}

.bg-purple-light {
    background-color: #e9d5ff;
    color: #a855f7;
}

.bg-yellow-light {
    background-color: #fef3c7;
    color: #f59e0b;
}

.bg-orange-light {
    background-color: #fed7aa;
    color: #fb923c;
}

.bg-indigo-light {
    background-color: #e0e7ff;
    color: #6366f1;
}

/* cards css end  */
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="d-flex flex-row align-items-center justify-content-center">
                            <form id="volumeFilterFormId" method="POST" action="{{ route('kusumb-dash') }}">
                                @csrf
                                <select id="volumeFilterId" name="volume" class="form-control">
                                    <option disabled selected value="dis">Select Volume</option>
                                    <option value="all" {{ request('volume') == 'all' ? 'selected' : '' }}>All Volume
                                    </option>
                                    @foreach ($vol as $volume)
                                    <option value="{{ $volume }}" {{ request('volume') == $volume ? 'selected' : '' }}>
                                        {{ $volume }}
                                    </option>
                                    @endforeach
                                </select>
                            </form>
                        </li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            {{--<div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-map-marked"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Sites</span>
                            <span class="info-box-number">
                                <a href="{{ asset('/view-kusumb-survey/total/' . $volfilter) }}"
            style="text-decoration:none;color:black">{{ $jk_count }}</a></a>
            </span>
        </div>
        <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Material Supplied / Pending Supplied</span>
            <span class="info-box-number"><a href="{{ asset('/view-kusumb-survey/material-supplied/' . $volfilter) }}"
                    style="text-decoration:none;color:black">{{ $material_supply }} </a> /<a
                    href="{{ asset('/view-kusumb-survey/material-not-supplied/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $material_not_supply }} </a> </span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<!-- fix for small devices only -->
<div class="clearfix hidden-md-up"></div>

<div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-truck-loading"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Total Installed / Pending Installed</span>
            <span class="info-box-number"><a href="{{ asset('/view-kusumb-survey/install/' . $volfilter) }}"
                    style="text-decoration:none;color:black">{{ $total_install }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/not-install/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $total_not_install }} </a> </span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>


<div class="col-12 col-sm-6 col-md-6">
    <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-inbox"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">JCR Submitted / JCR Pending</span>
            <span class="info-box-number"><a href="{{ asset('/view-kusumb-survey/file-submit/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $file_submit }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/file-not-submit/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $file_not_submit }} </a> </span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->
<div class="col-12 col-sm-6 col-md-6">
    <div class="info-box">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-box"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">40% Done / 40% Pending / 35% Done / 35% Pending</span>
            <span class="info-box-number"><a href="{{ asset('/view-kusumb-survey/pay40/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $pay40 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/not-pay40/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $notpay40 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/pay35/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $pay35 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/not-pay35/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $notpay35 }} </a> </span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-12 col-sm-6 col-md-6">
    <div class="info-box">
        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-box"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">15% Done / 15% Pending / 10% Done / 10% Pending</span>
            <span class="info-box-number"><a href="{{ asset('/view-kusumb-survey/pay15/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $pay15 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/not-pay15/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $notpay15 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/pay10/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $pay10 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/not-pay10/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $notpay10 }} </a> </span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<!-- /.col -->

<div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-wrench"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Data Upload On Scada / Data Pending</span>
            <span class="info-box-number"><a
                    href="{{ asset('/view-kusumb-survey/data-upload-on-scada/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $scada_data }} </a>/ <a
                    href="{{ asset('/view-kusumb-survey/data-not-upload-on-scada/' . $volfilter) }}"
                    style="text-decoration:none;color:black">{{ $scada_pending }} </a></span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

</div>--}}


<div class="row">
    <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="stat-card">
            <div class="icon-circle bg-blue-light">
                <i class="fas fa-map-marked"></i>
            </div>
            <div class="text-secondary mb-3">Total Sites</div>
            <div class="card-number">
                <a href="{{ asset('/view-kusumb-survey/total/' . $volfilter) }}"
                    style="text-decoration:none;color:black">{{ $jk_count }}</a></a>
            </div>
            <div class="card-info">Total Sites</div>
        </div>
    </div>


    <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="stat-card">
            <div class="icon-circle bg-blue-light">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="text-secondary mb-3">Material Supplied</div>
            <div class="card-number"><a href="{{ asset('/view-kusumb-survey/material-supplied/' . $volfilter) }}"
                    style="text-decoration:none;color:black">{{ $material_supply }} </a> /<a
                    href="{{ asset('/view-kusumb-survey/material-not-supplied/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $material_not_supply }} </a></div>
            <div class="card-info"> Pending Supplied</div>
        </div>
    </div>

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="stat-card">
            <div class="icon-circle bg-green-light">
                <i class="fas fa-truck-loading"></i>
            </div>
            <div class="text-secondary mb-3">Total Installed</div>
            <div class="card-number"><a href="{{ asset('/view-kusumb-survey/install/' . $volfilter) }}"
                    style="text-decoration:none;color:black">{{ $total_install }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/not-install/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $total_not_install }} </a></div>
            <div class="card-info">Pending Installed</div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="stat-card">
            <div class="icon-circle bg-purple-light">
                <i class="fas fa-inbox"></i>
            </div>
            <div class="text-secondary mb-3">JCR Submitted</div>
            <div class="card-number"><a href="{{ asset('/view-kusumb-survey/file-submit/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $file_submit }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/file-not-submit/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $file_not_submit }} </a></div>
            <div class="card-info">JCR Pending</div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="stat-card">
            <div class="icon-circle bg-yellow-light">
                <i class="fas fa-box"></i>
            </div>
            <div class="text-secondary mb-3">40% Done / 35% Done</div>
            <div class="card-number"><a href="{{ asset('/view-kusumb-survey/pay40/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $pay40 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/not-pay40/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $notpay40 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/pay35/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $pay35 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/not-pay35/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $notpay35 }} </a></div>
            <div class="card-info">35% Pending / 40% Pending </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mt-3">
        <div class="stat-card">
            <div class="icon-circle bg-orange-light">
                <i class="fas fa-box"></i>
            </div>
            <div class="text-secondary mb-3">15% Done / 10% Done</div>
            <div class="card-number"><a href="{{ asset('/view-kusumb-survey/pay15/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $pay15 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/not-pay15/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $notpay15 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/pay10/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $pay10 }} </a> / <a
                    href="{{ asset('/view-kusumb-survey/not-pay10/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $notpay10 }} </a></div>
            <div class="card-info">15% Pending / 10% Pending</div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mt-3 ">
        <div class="stat-card">
            <div class="icon-circle bg-indigo-light">
                <i class="fas fa-wrench"></i>
            </div>
            <div class="text-secondary mb-3">Data Upload On Scada</div>
            <div class="card-number"><a href="{{ asset('/view-kusumb-survey/data-upload-on-scada/' . $volfilter) }}"
                    style="text-decoration:none;color:black"> {{ $scada_data }} </a>/ <a
                    href="{{ asset('/view-kusumb-survey/data-not-upload-on-scada/' . $volfilter) }}"
                    style="text-decoration:none;color:black">{{ $scada_pending }} </a></div>
            <div class="card-info">Data Pending</div>
        </div>
    </div>



</div>
</div>


</div>




</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.content-wrapper -->
@include('component.footer')
