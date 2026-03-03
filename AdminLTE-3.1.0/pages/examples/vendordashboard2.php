{{-- @include('vendor.vportal.component.head') --}}
@include('vendor.vportal.component.table-head')


  <!-- Dashboard css  -->
  <style>
    .welcome-sub {
      font-size: 15px;
      font-weight: bold;
      color: #231262;
    }

    .welcome-title {
      font-weight: 600;
      font-size: 22px;
      color: #333;
    }


    @media (max-width: 767px) {
      .welcome-title {
        font-size: 18px;
      }

      .welcome-sub {
        font-size: 13px;
      }

      .welcome-icon {
        width: 35px !important;
      }

      .select-wrapper {
        padding: 0 0 0 15px;
        font-size: 12px;
      }
    }

    .stat-card-img {
      border-radius: 30px;
      color: #fff;
      padding: 20px;
      position: relative;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.081);
      transition: 0.3s ease;
      overflow: hidden;
      display: flex;
      align-items: center;
      gap: 15px;
      height: 130px;
    }

    .stat-card-img:hover {
      transform: scale(1.02);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.30);
    }

    .icon-circle-img {
      min-width: 60px;
      min-height: 60px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.177);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
    }

    .card-content {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .card-content h2 {
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 4px;
    }

    .card-content h5 {
      font-size: 18px;
      margin: 0;
      font-weight: 500;
    }

    .card-content .line {
      width: 60%;
      height: 2px;
      background: rgba(255, 255, 255, 0.6);
      margin: 4px 0;
    }

    .card-content p {
      font-size: 13px;
      margin: 0;
    }

    .c1 {
      background: linear-gradient(135deg, #004F8C, #2979FF);
    }

    .c2 {
      background: linear-gradient(135deg, #9C0D47, #3E0EC2);
    }

    .c3 {
      background: linear-gradient(135deg, #3FA46C, #004F56);
    }

    .c4 {
      background: linear-gradient(135deg, #CE7902, #E94000);
    }

    .c5 {
      background: linear-gradient(135deg, #008080, #005f73);
    }
    .c6 {
      background: linear-gradient(135deg, #7B1FA2, #512DA8);
    }
    .c7{
      background: linear-gradient(135deg, #0F9B0F, #0B6623);
    }
    .c8{
      background: linear-gradient(135deg, #581389, #6A5ACD);
    }
    .c9 {
      background: linear-gradient(135deg, #105378, #00B0FF);
    }

    .c10 {
      background: linear-gradient(135deg, #488706, #AEEA00);
    }


   .chart-card {
      overflow: hidden;
      border-radius: 12px;
      transition: 0.3s;
      position: relative;
      padding: 0;
      border: 0;
      border: 1.5px solid transparent !important;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);

    }

    .chart-header {
      background: linear-gradient(135deg, #001945, #7200A1);
      color: #ffffff;
      padding: 12px 18px;
      font-size: 16px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 12px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 12px 12px 0 0;
    }


    .chart-header i {
      width: 32px;
      height: 32px;
      background: rgba(255, 255, 255, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-size: 16px;
      color: #ffffff;
      transition: 0.3s;
    }

    .chart-header i:hover {
      background: rgba(255, 255, 255, 0.4);
      transform: scale(1.1);
    }


    .chart-container {
      padding: 20px;
      background: #ffffff;
      border-radius: 0 0 12px 12px;
    }


    #donutChart {
      transition: transform 0.3s;
    }

    #donutChart:hover {
      transform: scale(1.02);
    }

    .chart-container {
      position: relative;
      height: 350px;
      padding: 10px;
    }

    @media (max-width: 768px) {
      .chart-container {
        height: 300px;
      }

      .chart-header {
        font-size: 15px !important;
        padding: 10px 16px;
      }

      .chart-header i {
        width: 38px;
        height: 38px;
        font-size: 16px;
      }

      .nav-tabs .nav-link {
        font-size: 9px !important;
        padding: 10px 12px !important;
      }
    }



    /*  Table css --------------------------------------------- */
    .modern-table {
      border-collapse: separate;
      border-spacing: 0;
      border-radius: 12px;
      overflow: hidden;
      font-size: 14px;
      border: none;
      border: 2px solid #e4e4e4;

    }


    .modern-table thead th {
      font-weight: 600;
      letter-spacing: .5px;
      padding: 14px;
      border: none;
    }

    .modern-table td {
      padding: 12px;
      border-bottom: 1px solid #e7e7e7;
    }

    .nav-tabs .nav-link {
      font-size: 15px;
      font-weight: 600;
      padding: 10px 15px;
      border-radius: 8px 8px 0 0;
      transition: 0.3s;
      background: #e1e0f1;
      margin-right: 4px;
    }

    .nav-tabs .nav-link.active {
      background: #231262;
      color: white !important;
      border-color: transparent !important;
    }

    .tab-content {
      background: #fff;
      border-radius: 0 0 12px 12px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    .status-icon {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      display: inline-block;
      margin-right: 6px;
    }

    .status-active {
      background: #28a745;
    }

    .status-pending {
      background: #ffc107;
    }
    .right-modal .modal-dialog {
      position: fixed;
      right: 0;
      top: 0;
      margin: 0;
      height: 100%;
      max-width: 340px;
      width: 100%;
      transform: translateX(100%);
      transition: transform .35s ease-out;
    }

    .right-modal.show .modal-dialog {
      transform: translateX(0);
    }

    .modal-backdrop.show {
      opacity: .1 !important;
    }

    .profile-modal {
      height: 100vh;
      border-radius: 0;
      padding-top: 30px;
      position: relative;
    }

    .close-btn {
      position: absolute;
      left: 15px;
      top: 15px;
      background: #f2f2f2;
      border-radius: 50%;
      width: 33px;
      height: 33px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 9999;
    }

    .profile-photo {
      width: 85px;
      height: 85px;
      border-radius: 50%;
      border: 3px solid #eee;
      object-fit: cover;
    }

    .user-name {
      font-size: 18px;
      font-weight: 600;
    }

    .user-email {
      font-size: 13px;
      color: gray;
    }

    .profile-info p {
      background: #f8f8f8;
      padding: 8px 10px;
      font-size: 14px;
      border-radius: 8px;
      margin-bottom: 7px;
      text-align: left;
    }

    .password-wrapper {
      position: relative;
    }

    .password-wrapper .password-toggle {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }
  </style>
@include('vendor.vportal.component.header')

<div class="content-wrapper pt-5 mt-4">

    <section class="content">
        <!-- welcome Section here  -->
        <section class="py-1">
            <div class="container-fluid">
                <div class="row align-items-center g-2">
                    <!-- LEFT -->
                    <div class="col-md-6 col-12 d-flex align-items-center gap-2">
                        <img src="{{ asset('images/icon (2).svg') }}" class="welcome-icon mx-1" style="width: 50px" />
                        <div>
                            <div class="welcome-sub">Welcome to,</div>
                            <h2 class="welcome-title m-0">
                                Bihar SRT Installation Dashboard
                            </h2>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </section>

        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row g-3">
                    <!-- Total Sites -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="stat-link">
                            <div class="stat-card-img c1">
                                <div class="icon-circle-img"><i class="fas fa-globe-asia"></i></div>
                                <div class="card-content">
                                    <h5>Total Sites Assigned</h5>
                                    <h2>
                                        <a href="{{ asset('/v/bihar/vendor-view-dashboard/total') }}" class="stat-link">{{ $srtdatas->site_count }}</a>
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Installation Status -->
                    <div class="col-md-4 mb-3">
                        <div class="stat-card-img c2">
                            <div class="icon-circle-img"><i class="fas fa-building "></i></div>
                            <div class="card-content">
                                <h5>Sites</h5>

                                <h2>
                                    <a href="{{ asset('/v/bihar/vendor-view-dashboard/complete') }}" class="stat-link">{{ $srtdatas->complete }}</a> / <a
                                        href="{{ asset('/v/bihar/vendor-view-dashboard/pending') }}" class="stat-link">{{ $srtdatas->pending }}</a>

                                </h2>

                                <p>Installed / Pending</p>
                            </div>
                        </div>
                    </div>

                    <!--  Status -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="stat-link">
                            <div class="stat-card-img c3">
                                <div class="icon-circle-img"><i class="fas fa-check-circle"></i></div>
                                <div class="card-content">
                                    <h5>Verification Status</h5>
                                    <h2><a href="{{ asset('/v/bihar/vendor-view-dashboard/verify_approved') }}" class="stat-link">{{ $srtdatas->verify_approved }}</a> / <a
                                            href="{{ asset('/v/bihar/vendor-view-dashboard/verify_pending') }}" class="stat-link">{{ $srtdatas->verify_pending }}</a> / <a
                                            href="{{ asset('/v/bihar/vendor-view-dashboard/verify_reject') }}" class="stat-link">{{ $srtdatas->verify_reject }}</a>
                                    </h2>
                                    <p>Approved / Pending / Rejected</p>
                                </div>
                            </div>
                        </a>
                    </div>


                    <!-- Verification Status -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="stat-link">
                            <div class="stat-card-img c4">
                                <div class="icon-circle-img"><i class="fas fa-check-circle"></i></div>
                                <div class="card-content">
                                    <h5>Sites Status</h5>
                                    <h2><a href="{{ asset('/v/bihar/vendor-view-dashboard/inpection_complete') }}" class="stat-link">{{ $srtdatas->inpection_complete }}</a> / <a
                                            href="{{ asset('/v/bihar/vendor-view-dashboard/inpection_pending') }}" class="stat-link">{{ $srtdatas->inpection_pending }}</a>
                                    </h2>
                                    <p>Inspected / Pending</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Inspection Status -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="stat-link">
                            <div class="stat-card-img c5">
                                <div class="icon-circle-img"><i class="fas fa-search"></i></div>
                                <div class="card-content">
                                    <h5>Claim Status</h5>
                                    <h2><a href="{{ asset('/v/bihar/vendor-view-dashboard/claim_applicable') }}" class="stat-link">{{ $srtdatas->claim_applicable }}</a> / <a
                                            href="{{ asset('/v/bihar/vendor-view-dashboard/claim_raised') }}" class="stat-link">{{ $srtdatas->claim_raised }}</a>

                                    </h2>
                                    <p>Applicable / Raised</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Claim Status -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="stat-link">
                            <div class="stat-card-img c6">
                                <div class="icon-circle-img"><i class="fas fa-file-invoice-dollar"></i></div>
                                <div class="card-content">
                                    <h5>Document Status</h5>
                                    <h2><a href="{{ asset('/v/bihar/vendor-view-dashboard/inst_doc_complete') }}" class="stat-link">{{ $srtdatas->inst_doc_complete }}</a> / <a
                                            href="{{ asset('/v/bihar/vendor-view-dashboard/inst_doc_pending') }}" class="stat-link">{{ $srtdatas->inst_doc_pending }}</a>
                                    </h2>
                                    <p>Submitted / Pending</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Documents Approval -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="stat-link">
                            <div class="stat-card-img c7">
                                <div class="icon-circle-img"><i class="fas fa-clipboard-check"></i></div>
                                <div class="card-content">
                                    <h5>Payment Amount Claimed Status</h5>
                                    <h2><a href="{{ asset('/v/bihar/vendor-view-dashboard/inst_pay1_amount') }}" class="stat-link">{{ $srtdatas->inst_pay1_amount ?? 0 }}</a>
                                        / <a href="{{ asset('/v/bihar/vendor-view-dashboard/inst_pay2_amount') }}"
                                            class="stat-link">{{ $srtdatas->inst_pay2_amount ?? 0 }}</a> / <a
                                            href="{{ asset('/v/bihar/vendor-view-dashboard/inst_pay3_amount') }}" class="stat-link">{{ $srtdatas->inst_pay3_amount ?? 0 }}</a>
                                    </h2>
                                    <p>1nd / 2nd / 3nd</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Payment Claimed (Numbers) -->
                    <div class="col-md-4 mb-3">
                        <a href="#" class="stat-link">
                            <div class="stat-card-img c8">
                                <div class="icon-circle-img"><i class="fas fa-rupee-sign"></i></div>
                                <div class="card-content">
                                    <h5>Payment Claimed (Numbers)</h5>
                                    <h2><a href="{{ asset('/v/bihar/vendor-view-dashboard/inst_pay1') }}" class="stat-link">{{ $srtdatas->inst_pay1 }}</a> / <a
                                            href="{{ asset('/v/bihar/vendor-view-dashboard/inst_pay2') }}" class="stat-link">{{ $srtdatas->inst_pay2 }}</a> / <a
                                            href="{{ asset('/v/bihar/vendor-view-dashboard/inst_pay3') }}" class="stat-link">{{ $srtdatas->inst_pay3 }}</a>

                                    </h2>
                                    <p>1st / 2st / 3st</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                <!-- chart section start  -->
                <div class="container-fluid mt-2">
                    <div class="row">
                        <!-- Donut Chart -->
                        <div class="col-12 col-lg-6">
                            <div class="card chart-card shadow-sm">
                                <div class="chart-header">
                                    <i class="fas fa-chart-pie"></i>
                                    District Installation

                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="donutChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bar Chart -->
                        <div class="col-12 col-lg-6">
                            <div class="card chart-card shadow-sm">
                                <div class="chart-header">
                                    <i class="fas fa-chart-bar"></i>
                                    Monthly Installation

                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="barChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-12">
                    <div class="card chart-card card-primary card-outline card-outline-tabs">
                        <div class=" p-0 border-bottom-0">
                            <div class="card-header table-title border-0 p-0">
                                <div class="chart-header">
                                    <i class="fas fa-table"></i> Installation Status Details
                                </div>
                            </div>

                            <nav class="px-3 pt-2">
                                <div class="nav nav-tabs" id="table-tab" role="tablist">
                                    <a class="nav-item nav-link active text-dark" id="district-tab" data-toggle="tab"
                                        href="#district" role="tab" aria-controls="district"
                                        aria-selected="true">
                                        District Wise Bifurcation
                                    </a>
                                </div>
                            </nav>

                            <div class="card-body p-0">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-four-profile"
                                        role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <table id="example1"
                                                    class="table modern-table table-hover text-center mb-0 table-striped d-block"
                                                    style="overflow-x: auto;">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>District</th>
                                                            <th>Total allocation</th>
                                                            <th>Total Installed</th>
                                                            <th>Pending Installation</th>
                                                            <th>Pay1 Complete</th>
                                                            <th>Pay2 Complete</th>
                                                            <th>Pay3 Complete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($districtwise as $districtwises)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td><a href="{{ asset('/v/bihar/vendor-districtwise-dashboard/total/'. $districtwises->district) }}" class="text-dark">{{ $districtwises->district }}</a></td> 
                                                                <td><a href="{{ asset('/v/bihar/vendor-districtwise-dashboard/total_assigned/'.$districtwises->district) }}" class="text-dark">{{ $districtwises->total_assigned }}</a></td>
                                                                <td><a href="{{ asset('/v/bihar/vendor-districtwise-dashboard/inst_complete/'.$districtwises->district) }}" class="text-dark">{{ $districtwises->inst_complete }}</a></td>
                                                                <td><a href="{{ asset('/v/bihar/vendor-districtwise-dashboard/inst_pending/'.$districtwises->district) }}" class="text-dark">{{ $districtwises->inst_pending }}</a></td>
                                                                <td><a href="{{ asset('/v/bihar/vendor-districtwise-dashboard/inst_pay1/'.$districtwises->district) }}" class="text-dark">{{ $districtwises->inst_pay1 }}</a></td>
                                                                <td><a href="{{ asset('/v/bihar/vendor-districtwise-dashboard/inst_pay2/'.$districtwises->district) }}" class="text-dark">{{ $districtwises->inst_pay2 }}</a></td>
                                                                <td><a href="{{ asset('/v/bihar/vendor-districtwise-dashboard/inst_pay3/'.$districtwises->district) }}" class="text-dark">{{ $districtwises->inst_pay3 }}</a></td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                     <tr>
                                                            <th>Sr. No.</th>
                                                            <th>District</th>
                                                            <th>Total allocation</th>
                                                            <th>Total Installed</th>
                                                            <th>Pending Installation</th>
                                                            <th>Pay1 Complete</th>
                                                            <th>Pay2 Complete</th>
                                                            <th>Pay3 Complete</th>
                                                        </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@include('vendor.vportal.component.footer')

<!-- Chart.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.min.js"></script>

<script>
    const donutCtx = document.getElementById("donutChart").getContext("2d");
    new Chart(donutCtx, {
        type: "doughnut",
        data: {
            labels: [
                @foreach ($district_install as $install)
                    "{{ $install->district }}",
                @endforeach
            ],
            datasets: [{
                data: [
                    @foreach ($district_install as $install)
                        {{ $install->inst_complete }},
                    @endforeach
                ],
                backgroundColor: [
     "#1E6DF2", 
              "#7200A1", 
              "#1F7A5D", 
              "#E96D0C", 
              "#007B7F",
              "#6F2DBD", 
              "#1E6DF2",
              "#7200A1",
              "#1F7A5D",
              "#E96D0C"
                ],
                borderColor: "#ffffff",
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: "bottom",
                    labels: {
                        padding: 10,
                        font: {
                            size: 12
                        },
                        usePointStyle: true,
                    },
                },
                tooltip: {
                    backgroundColor: "#ff7e5f",
                    titleColor: "#ffffff",
                    bodyColor: "#ffffff",
                    borderColor: "#ff8b66",
                    borderWidth: 1,
                },
            },
        },
    });
</script>


<script>
    const barCtx = document.getElementById("barChart").getContext("2d");

    // JS array for data (Laravel se aa raha)
    const monthlyData = [
        @foreach ($district_installation_month as $install)
            {{ $install->monthly_installations }},
        @endforeach
    ];

    const maxValue = Math.max(...monthlyData);

    new Chart(barCtx, {
        type: "bar",
        data: {
            labels: [
                @foreach ($district_installation_month as $install)
                    "{{ $install->month_year }}",
                @endforeach
            ],
            datasets: [{
                label: "Monthly Installation",
                data: monthlyData,
                backgroundColor: [
              "#0e1750",
              "#6c019c",
              "#0e1750",
              "#6c019c",
              "#0e1750",
              "#6c019c"
                ],
                borderColor: "#ffffff",
                borderWidth: 1,
                borderRadius: 6,
                borderSkipped: false,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    max: Math.ceil(maxValue * 1.2),
                    grid: {
                        color: "rgba(0,0,0,0.05)"
                    },
                    ticks: {
                        color: "#0e1750"
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: "#0e1750"
                    }
                }
            },

            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
            backgroundColor: "#6c019c",
            titleColor: "#fff",
            bodyColor: "#fff",
            borderColor: "#0e1750",
            borderWidth: 1,
          },
            }
        }
    });
</script>