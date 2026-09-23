<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KLK ERP</title>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


    <style>
        body {
            background-color: #f1f4fd !important;
            overflow-x: none;
        }
        
        .logo-heading{
          font-weight: bold; 
          letter-spacing: 1px; 
          font-size:22px;  
        }

        /* PROFILE IMAGE */
        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 3px solid #d7e9ff;
            padding: 2px;
            object-fit: cover;
            cursor: pointer;
        }

        /* NOTIFICATION ICON */
        .notif-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px dotted #c5c5c5;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            cursor: pointer;
        }

        .notif-btn i {
            font-size: 16px;
            color: #444;
        }

        .notif-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #ff4b4b;
            padding: 1px 6px;
            border-radius: 50px;
            font-size: 10px;
            color: white;
        }

        .notif-dropdown {
            width: 250px !important;
            border-radius: 12px;
        }

        /* TITLE */
        .notif-title {
            font-size: 14px;
            font-weight: 500;
        }

        /* HOVER EFFECT */
        .notif-dropdown .dropdown-item:hover {
            background: #f5f7ff;
            border-radius: 8px;
        }

        /* DOCUMENT BUTTON — LIGHT COLOR */
        .doc-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 6px 16px;
            border-radius: 50px;
            background: #e4edfd;
            color: #495467;
            font-weight: 500;
            font-size: 14px;
            border: 1px solid #e2e6ee;
            cursor: pointer;
            transition: 0.2s ease-in-out;
        }

        .doc-btn:hover {
            background: #ffffff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        /* DROPDOWN MENU */
        .dropdown-menu {
            width: 210px;
            border-radius: 10px;
            padding: 0;
        }

        .user-box {
            padding: 8px 15px !important;
            border-bottom: 1px solid #eee;
        }

        .user-box h6 {
            font-size: 15px;
            margin-bottom: 0;
            color: black;
        }

        .icon-blue,
        .icon-pink,
        .icon-gray,
        .icon-green,
        .icon-orange {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            border-radius: 50%;
        }

        .icon-blue {
            background: #e8f3ff;
            color: #4a8cff;
        }

        .icon-pink {
            background: #ffe8ef;
            color: #ff7aa2;
        }

        .icon-gray {
            background: #f1f1f1;
            color: #444444;
        }

        .icon-orange {
            background: #fef5e5;
            color: #ec9829;
        }

        .icon-green {
            background: #e8ffe8;
            color: #33a933;
        }

        .dropdown-item {
            font-size: 14px;
        }

        .dropdown-item:hover {
            background: #f4f7ff;
        }

        @media (max-width: 576px) {
            .header-actions {
                gap: 12px;
            }

            .doc-btn span {
                display: none;
            }
        }

        /* Welcome section  */

        .welcome-sub {
            font-size: 18px;
            font-weight: 500;
        }

        .welcome-title {
            font-size: 22px;
        }

        /* MOBILE Responsive */
        @media (max-width: 767px) {
            .welcome-icon {
                width: 40px !important;
                /* icon smaller on mobile */
            }

            .welcome-sub {
                font-size: 14px !important;
            }

            .welcome-title {
                font-size: 18px !important;
            }
        }

        /* ============================  card section  */

        .dashboard-container,
        .map-container,
        .footer-container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .stats-card {
            position: relative;
            border-radius: 50px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
            height: 110px;
        }

        .stats-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        /* Existing Background Circle */
        .stats-card::after {
            content: "";
            position: absolute;
            bottom: -30%;
            right: -20%;
            width: 200px;
            height: 200px;
            background: rgba(0, 0, 0, 0.08);
            border-radius: 50%;
            pointer-events: none;
        }

        .upper_div-circle {
            border: 0.2px solid rgb(240, 240, 240) !important;
            border-radius: 50px;
            position: relative;
            padding: 0 0 0 10px;
            display: flex;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(50px) !important;
            -webkit-backdrop-filter: blur(30px) !important;
            box-shadow: 0 10px 30px rgba(224, 14, 14, 0.15);
            overflow: hidden;
            height: 90px;
            width: 100%;
        }

        .icon-wrapper {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.3);
            border: 2px solid rgba(255, 255, 255, 0.6);
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
        }

        .circle-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .stats-content {
            flex: 1;
            position: relative;
            padding: 0 0 0 5px;
            z-index: 1;
        }

        .stats-label {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.95);
            margin-bottom: 2px;
            font-weight: 500;
        }





        /* Base footer text */
        .footer-text {
            font-size: 12px;
            color: #6c757d;
            letter-spacing: 0.3px;
            line-height: 1.4;
        }

        .brand-name {
            color: #000;
            font-weight: 700;
        }

        /* Responsive text for small devices */
        @media (max-width: 480px) {
            .footer-text {
                text-align: center;
                font-size: 12px;
                padding: 0 10px;
                display: block;
            }
        }
        
        
    @media (max-width: 780px) {
        .navbar .container-fluid {
          flex-wrap: nowrap !important; 
        }

        .navbar-brand {
          font-size: 13px !important;
          display: flex;
          align-items: center;
          gap:0;
          font-weight: 500;
        }

        .navbar-brand img {
          width: 32px !important;
        }

        .header-actions {
          gap: 10px !important;
        }

        .doc-btn {
          padding: 4px 10px !important;
          font-size: 12px !important;
        }

        .notif-btn,
        .profile-img {
          width: 32px !important;
          height: 32px !important;
        }

        .notif-badge {
          font-size: 8px !important;
          padding: 1px 4px !important;
        }
        
         .logo-heading{
          font-size:16px;  
        }
      }
    </style>
    
    
    <style>
.yt-wrapper {
    position: relative;
    overflow: hidden;
}

/* Transparent overlay */
.yt-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: transparent;

    /* This blocks everything... */
    pointer-events: auto;
}

/* ...except the center area where play & volume button live */
.yt-overlay::after {
    content: "";
    position: absolute;

    /* center box helps Play + Sound buttons pass clicks */
    top: 30%;
    left: 30%;
    width: 40%;
    height: 40%;

    /* This area allows clicking */
    pointer-events: none;
}
.card-12 {
                background: linear-gradient(135deg, #e977e1 0%, #ec1ce5 100%);
            }
</style>

</head>

@include('component.main-header')

    <!-- WELCOME SECTION -->
    <section class="welcome-section py-4 px-3">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- LEFT SIDE -->
                <div class="col-md-2 col-lg-6 d-flex align-items-center gap-3 mb-3 mb-md-0">
                    <img src="{{asset('images/logistics.svg')}}" class="welcome-icon" style="width: 55px" />
                    <div>
                        <div class="welcome-sub">Welcome to,</div>
                        <h2 class="welcome-title m-0 fw-bold">KLK ERP Dashboard</h2>
                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-md-10 col-lg-6 col-sm">
                    <div class="row justify-content-md-end justify-content-center align-items-center">
                        <!-- Vendor -->
                      <?php if($role == '0' || $role == '1'){ ?>
                         <a href="{{ route('dle.dashboard') }}" class="col-4 text-decoration-none text-dark">
                        <div class="d-flex flex-md-row flex-column text-center text-md-start pointer">
                            <img src="{{ asset('images/icon (3).svg') }}" class="d-block mx-auto mx-md-0"
                                style="width: 45px; height: 45px"
                                onload="if(window.innerWidth < 768){this.style.width='28px';this.style.height='28px';}" />

                            <div class="ms-md-2 mt-md-0">
                                <h6 class="m-0 fw-bold d-flex align-items-center justify-content-center justify-content-md-start"
                                    style="font-size: 17px">
                                    DLE
                                    <i class="bi bi-arrow-up-right fs-5 ms-1 text-info"></i>
                                </h6>
                                <p class="m-0 text-secondary" style="font-size: 13px">
                                    View more
                                </p>
                            </div>
                        </div>
                    </a>
                        <a href="{{ route('vendor-dashboard') }}" class="col-4 text-decoration-none text-dark">
                            <div class="d-flex flex-md-row flex-column text-center text-md-start pointer">
                                <img src="{{asset('images/icon (2).svg')}}" class="d-block mx-auto mx-md-0"
                                    style="width: 45px; height: 45px"
                                    onload="if(window.innerWidth < 768){this.style.width='28px';this.style.height='28px';}" />

                                <div class="ms-md-2 mt-md-0">
                                    <h6 class="m-0 fw-bold d-flex align-items-center justify-content-center justify-content-md-start"
                                        style="font-size: 17px">
                                        Vendor
                                        <i class="bi bi-arrow-up-right fs-5 ms-1 text-info"></i>
                                    </h6>
                                    <p class="m-0 text-secondary" style="font-size: 13px">
                                        View more
                                    </p>
                                </div>
                            </div>
                        </a>



                        <!-- Gallery -->
                        <a href="{{ route('gallary') }}" class="col-4 text-decoration-none text-dark">
                            <div
                                class="d-flex align-items-center flex-md-row flex-column text-center text-md-start pointer">
                                <img src="{{asset('images/icon (4).svg')}}" class="d-block mx-auto mx-md-0"
                                    style="width: 45px; height: 45px"
                                    onload="if(window.innerWidth < 768){this.style.width='28px';this.style.height='28px';}" />

                                <div class="ms-md-2 mt-md-0">
                                    <h6 class="m-0 fw-bold d-flex align-items-center justify-content-center justify-content-md-start"
                                        style="font-size: 17px">
                                        Gallery
                                        <i class="bi bi-arrow-up-right fs-5 ms-1 text-info"></i>
                                    </h6>
                                    <p class="m-0 text-secondary" style="font-size: 13px">
                                        View more
                                    </p>
                                </div>
                            </div>
                        </a>
                        
                                                <!-- Complaints -->
                        <a href="{{ route('complaint-dashboard') }}" class="col-4 text-decoration-none text-dark">
                            <div
                                class="d-flex align-items-center flex-md-row flex-column text-center text-md-start pointer">
                                <img src="{{asset('images/icon (3).svg')}}" class="d-block mx-auto mx-md-0"
                                    style="width: 45px; height: 45px"
                                    onload="if(window.innerWidth < 768){this.style.width='28px';this.style.height='28px';}" />

                                <div class="ms-md-2 mt-md-0">
                                    <h6 class="m-0 fw-bold d-flex align-items-center justify-content-center justify-content-md-start"
                                        style="font-size: 17px">
                                        Complaints
                                        <i class="bi bi-arrow-up-right fs-5 ms-1 text-info"></i>
                                    </h6>
                                    <p class="m-0 text-secondary" style="font-size: 13px">
                                        View more
                                    </p>
                                </div>
                            </div>
                        </a>
                         <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cards section  -->
    <section class="dashboard-container">
        <div class="row">
            
            
          @php
    $states = json_decode(session('StateAccess'), true);
    $states = is_array($states) ? $states : [];

    // Function for grayscale + access check
    function stateStyle($stateName, $role, $states, $gradientClass) {
        $hasAccess = in_array($stateName, $states);
        $specialCase = false;

        // SPECIAL LOGIC FOR KASHMIR & JAMMU (as in your old code)
        if($stateName == 'kashmir') {
            if($role != '0' && !in_array('kashmir', $states)) {
                if(in_array('jammu', $states) && $role == '1') $specialCase = true;
                else return $gradientClass . ' grayscale-card';
            }
        }

        if($stateName == 'jammu') {
            if($role != '0' && !in_array('jammu', $states)) {
                if(in_array('kashmir', $states) && $role == '1') $specialCase = true;
                else return $gradientClass . ' grayscale-card';
            }
        }

        // For other states
        if($role != '0' && !$hasAccess) {
            return $gradientClass . ' grayscale-card';
        }

        return $gradientClass;
    }

    // Function for generating link with old conditions
    function stateLink($stateName, $routeName, $role, $states) {

        // Special case Kashmir
        if($stateName == 'kashmir') {
            if($role != '0' && !in_array('kashmir', $states)) {
                return (in_array('jammu', $states) && $role == '1') ? route($routeName) : '#';
            }
        }

        // Special case Jammu
        if($stateName == 'jammu') {
            if($role != '0' && !in_array('jammu', $states)) {
                return (in_array('kashmir', $states) && $role == '1') ? route($routeName) : '#';
            }
        }

        // General logic
        if($role != '0' && !in_array($stateName, $states)) {
            return "#";
        }

        return route($routeName);
    }
@endphp

<style>
    .grayscale-card { filter: grayscale(1); }

    /* Add gradient classes */
    .card-1-bg { background: linear-gradient(135deg, #50aefa 0%, #0487ef 100%); }
    .card-2-bg { background: linear-gradient(135deg, #f9526b 0%, #c4001a 100%); }
    .card-3-bg {  background: linear-gradient(135deg, #9486ff 0%, #3822fd 100%); }
    .card-4-bg { background: linear-gradient(135deg, #467fe7 0%, #07275b 100%); }
    .card-5-bg { background: linear-gradient(135deg, #56de6f 0%, #198129 100%); }
    .card-6-bg {  background: linear-gradient(135deg, #f9c26b 0%, #945b00 100%);}
    .card-7-bg { background: linear-gradient(135deg, #5dd88d 0%, #19aa56 100%);}
    .card-8-bg { background: linear-gradient(135deg, #ff966c 0%, #c03802 100%); }
    .card-9-bg { background: linear-gradient(135deg, #ffbafc 0%, #7d0076 100%); }
    .card-10-bg { background: linear-gradient(135deg, #77faff 0%, #002729 100%); }
    .card-11{
      background: linear-gradient(135deg, #a18cd1 0%, #3f2b96 100%);
    }
</style>

<!-- Kashmir -->
<div class="col-lg-3 col-md-6">
    <a href="{{ stateLink('kashmir','kashmir-solartype',$role,$states) }}" class="text-decoration-none">
        <div class="stats-card {{ stateStyle('kashmir',$role,$states,'card-1-bg') }}">
            <div class="upper_div-circle">
                <div class="icon-wrapper">
                    <img src="{{asset('images/j&K.webp')}}" class="circle-img" />
                </div>
                <div class="stats-content">
                    <div class="stats-label">Kashmir</div>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Jammu -->
<div class="col-lg-3 col-md-6">
    <a href="{{ stateLink('jammu','jammu-solartype',$role,$states) }}" class="text-decoration-none">
        <div class="stats-card {{ stateStyle('jammu',$role,$states,'card-2-bg') }}">
            <div class="upper_div-circle">
                <div class="icon-wrapper">
                    <img src="{{asset('images/j&K.webp')}}" class="circle-img" />
                </div>
                <div class="stats-content">
                    <div class="stats-label">Jammu</div>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Himachal -->
<div class="col-lg-3 col-md-6">
    <a href="{{ stateLink('himachal','himachal-solartype',$role,$states) }}" class="text-decoration-none">
        <div class="stats-card {{ stateStyle('himachal',$role,$states,'card-3-bg') }}">
            <div class="upper_div-circle">
                <div class="icon-wrapper">
                    <img src="{{asset('images/hp.webp')}}" class="circle-img" />
                </div>
                <div class="stats-content">
                    <div class="stats-label">Himachal Pradesh</div>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Haryana (always grayscale in your old code) -->
<div class="col-lg-3 col-md-6">
    <a href="#" class="text-decoration-none">
        <div class="stats-card card-4-bg grayscale-card">
            <div class="upper_div-circle">
                <div class="icon-wrapper">
                    <img src="{{asset('images/hr.webp')}}" class="circle-img" />
                </div>
                <div class="stats-content">
                    <div class="stats-label">Haryana</div>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- UP -->
<div class="col-lg-3 col-md-6">
    <a href="{{ stateLink('up','up-solartype',$role,$states) }}" class="text-decoration-none">
        <div class="stats-card {{ stateStyle('up',$role,$states,'card-5-bg') }}">
            <div class="upper_div-circle">
                <div class="icon-wrapper">
                    <img src="{{asset('images/up.webp')}}" class="circle-img" />
                </div>
                <div class="stats-content">
                    <div class="stats-label">Uttar Pradesh</div>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Bihar -->
<div class="col-lg-3 col-md-6">
    <a href="{{ stateLink('bihar','solartype',$role,$states) }}" class="text-decoration-none">
        <div class="stats-card {{ stateStyle('bihar',$role,$states,'card-6-bg') }}">
            <div class="upper_div-circle">
                <div class="icon-wrapper">
                    <img src="{{asset('images/bh.webp')}}" class="circle-img" />
                </div>
                <div class="stats-content">
                    <div class="stats-label">Bihar</div>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Karnataka -->
<div class="col-lg-3 col-md-6">
    <a href="{{ stateLink('karnataka','Karnataka-solartype',$role,$states) }}" class="text-decoration-none">
        <div class="stats-card {{ stateStyle('karnataka',$role,$states,'card-7-bg') }}">
            <div class="upper_div-circle">
                <div class="icon-wrapper">
                    <img src="{{asset('images/tr.webp')}}" class="circle-img" />
                </div>
                <div class="stats-content">
                    <div class="stats-label">Karnataka</div>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Jharkhand -->
<div class="col-lg-3 col-md-6">
    <a href="{{ stateLink('jharkhand','jharkhand-solartype',$role,$states) }}" class="text-decoration-none">
        <div class="stats-card {{ stateStyle('jharkhand',$role,$states,'card-8-bg') }}">
            <div class="upper_div-circle">
                <div class="icon-wrapper">
                    <img src="{{asset('images/bh.webp')}}" class="circle-img" />
                </div>
                <div class="stats-content">
                    <div class="stats-label">Jharkhand</div>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Tripura -->
<div class="col-lg-3 col-md-6">
    <a href="{{ stateLink('tripura','tripura-solartype',$role,$states) }}" class="text-decoration-none">
        <div class="stats-card {{ stateStyle('tripura',$role,$states,'card-9-bg') }}">
            <div class="upper_div-circle">
                <div class="icon-wrapper">
                    <img src="{{asset('images/up.webp')}}" class="circle-img" />
                </div>
                <div class="stats-content">
                    <div class="stats-label">Tripura</div>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- Assam -->
<div class="col-lg-3 col-md-6">
    <a href="{{ stateLink('assam','assam-solartype',$role,$states) }}" class="text-decoration-none">
        <div class="stats-card {{ stateStyle('assam',$role,$states,'card-10-bg') }}">
            <div class="upper_div-circle">
                <div class="icon-wrapper">
                    <img src="{{asset('images/assam.webp')}}" class="circle-img" />
                </div>
                <div class="stats-content">
                    <div class="stats-label">Assam</div>
                </div>
            </div>
        </div>
    </a>
</div>


<!-- GOA  -->
      <div class="col-lg-3 col-md-6">
        <a href="{{ stateLink('goa','goa-solartype',$role,$states) }}" class="text-decoration-none">
          <div class="stats-card {{ stateStyle('goa',$role,$states,'card-11') }}">
            <div class="upper_div-circle">
              <div class="icon-wrapper">
                <img src="{{asset('images/goa.jpeg')}}" alt="Goa" class="circle-img" />
              </div>
              <div class="stats-content">
                <div class="stats-label">Goa</div>
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- Arunachal Pradesh -->
        <div class="col-lg-3 col-md-6">
            <a href="{{ stateLink('arunachal', 'arunachal-solartype', $role, $states) }}"
                class="text-decoration-none">
                <div class="stats-card {{ stateStyle('arunachal', $role, $states, 'card-1-bg') }}">
                    <div class="upper_div-circle">
                        <div class="icon-wrapper">
                            <img src="{{ asset('images/arunachal.png') }}" alt="Arunachal" class="circle-img" />
                        </div>
                        <div class="stats-content">
                            <div class="stats-label">Arunachal Pradesh</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
      <!-- Punjab -->
        <div class="col-lg-3 col-md-6">
            <a href="{{ stateLink('punjab', 'punjab-solartype', $role, $states) }}"
                class="text-decoration-none">
                <div class="stats-card {{ stateStyle('punjab', $role, $states, 'card-3-bg') }}">
                    <div class="upper_div-circle">
                        <div class="icon-wrapper">
                            <img src="{{ asset('images/punjab.png') }}" alt="Punjab" class="circle-img" />
                        </div>
                        <div class="stats-content">
                            <div class="stats-label">Punjab</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

            
            
            
        </div>
    </section>

    <!-- hr line  -->
    <section class="container">
        <div class="row">
            <hr />
        </div>
    </section>

    <!-- map and card section  -->
    <section class="map-container mb-3">
        <div class="row">
            <!-- LEFT SIDE -->
            <div class="col-lg-6">
                <div class="card border-2 p-4 shadow rounded-4 overflow-hidden">
                    <h5 class="fw-bold text-dark m-0" style="letter-spacing: 0.5px">
                        Geo Location
                    </h5>
                    <hr />
                    <!--<iframe-->
                    <!--    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112092.35102763707!2d77.275344!3d28.6031975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce56c15555555%3A0xe34818fa9bfd0b86!2sKLK%20Ventures%20Private%20Limited!5e0!3m2!1sen!2sin!4v1763545370195!5m2!1sen!2sin"-->
                    <!--    width="100%" height="410" style="border: 0" allowfullscreen="" loading="lazy"-->
                    <!--    referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                    <div id="map" style="height: 410px;"></div>
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-6 mt-3 mt-sm-0 mt-md-0">
                <div class="card border-2 p-4 shadow rounded-4 overflow-hidden">
                    <h5 class="fw-bold text-dark m-0" style="letter-spacing: 0.5px">
                        KLK Ventures
                    </h5>
                    <hr />
                    <!--<img height="410" src="{{asset('images/comingsooming.jpg')}}" alt="">-->
<iframe
    id="myVideo"
    height="410"
    frameborder="0"
    allow="autoplay; encrypted-media; picture-in-picture"
    allowfullscreen
    style="pointer-events:none; width:100%;">
</iframe>



                </div>
            </div>

        </div>
    </section>

    <!-- hr line  -->
    <section class="container">
        <div class="row">
            <hr />
        </div>
    </section>

    <!-- footer section -->
    <section class="">
        <div class="container mx-lg-5">
            <div class="row">
                <footer class="footer-area py-2">
                    <p class="m-0 fw-semibold text-secondary small footer-text">
                        Copyright © <span id="year"></span> KLK ERP — By
                        <span class="text-primary fw-bold">ETS NETWORKS.</span>
                        All rights reserved.
                    </p>
                </footer>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>
<script>
    const indiaCenter = [22.9734, 78.6569];

    var map = L.map('map', {
        center: indiaCenter,
        zoom: 4,
        minZoom: 4,
        maxZoom: 7,
        zoomControl: true,
        maxBounds: [
            [40.0, 60.0],
            [5.0, 100.0]
        ],
        maxBoundsViscosity: 1.0
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18
    }).addTo(map);

    fetch("/india_states.geojson")
        .then(response => response.json())
        .then(data => {

            L.geoJson(data, {
                style: function (feature) {

                    // Print state names in console
                    console.log("State Found:", feature.properties);

                    return {
                        fillColor: getStateColor(feature.properties.NAME_1), // <-- change key here
                        fillOpacity: 0.7,
                        color: "#333",
                        weight: 1
                    };
                },
                onEachFeature: function (feature, layer) {

                    layer.bindPopup("<b>" + feature.properties.NAME_1 + "</b>");

                    layer.on("click", function () {
                        alert("State: " + feature.properties.NAME_1);
                        map.setView(indiaCenter, 5, { animate: true });
                    });
                }
            }).addTo(map);
        });

    function getStateColor(state) {

       let colors = {
        "Jammu and Kashmir": "#ffaa00",
        "Himachal Pradesh": "#ffcc33",
        "Bihar": "#00aaff",
        "Assam": "#33cc99",
        "Haryana": "#ff9933",
        "Karnataka": "#66bb6a",
        "Tripura": "#cc6699",
        "Jharkhand": "#aa66ff",
        "Uttar Pradesh": "#ff6666"
    };

        return colors[state] || "#00000000";
    }
</script>

<script>
function isMobileDevice() {
    return /Android|iPhone|iPad|iPod|Opera Mini|IEMobile|Mobile/i.test(navigator.userAgent);
}

let videoID = "HxSPgWlFAHg";
let iframe = document.getElementById("myVideo");

if (isMobileDevice()) {
    // Mobile/Tablet → autoplay muted
    iframe.src = "https://www.youtube.com/embed/" + videoID +
        "?autoplay=1&mute=1&playsinline=1&loop=1&playlist=" + videoID + "&controls=0";
} else {
    // Desktop/Laptop → autoplay with sound
    iframe.src = "https://www.youtube.com/embed/" + videoID +
        "?autoplay=1&mute=0&loop=1&playlist=" + videoID + "&controls=0";
}
</script>



<script>
document.addEventListener('DOMContentLoaded', function () {
  // Elements
  const changeBtn = document.getElementById("changePassBtn");
  const passFields = document.getElementById("passwordFields");
  const profileInfo = document.querySelector(".profile-info");
  const cancelBtn = document.getElementById("cancelPassBtn");
  const profileModal = $('#profileModal');


  // Reset function (global in this scope)
  function resetProfileModal() {
    passFields.style.display = "none";
    profileInfo.style.display = "block";
    changeBtn.style.display = "block";

    const np = document.getElementById("newPass");
    const cp = document.getElementById("confirmPass");
    if (np) np.value = "";
    if (cp) cp.value = "";
  }

  // Initial reset (in case modal exists on page load)
  resetProfileModal();

  // Open "Change Password" inside modal
  changeBtn.addEventListener("click", function () {
    passFields.style.display = "block";
    profileInfo.style.display = "none";
    changeBtn.style.display = "none";
  });

  // Cancel inside modal -> reset to initial state
  cancelBtn.addEventListener("click", function (e) {
    e.preventDefault();
    resetProfileModal();

  });

  // Password show/hide toggles
  document.querySelectorAll(".password-toggle").forEach(icon => {
    icon.addEventListener("click", () => {
      const targetId = icon.getAttribute("data-target");
      const input = document.getElementById(targetId);
      if (!input) return;
      if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      } else {
        input.type = "password";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      }
    });
  });

  profileModal.on('shown.bs.modal', function () {
    resetProfileModal();
  });

  profileModal.on('hidden.bs.modal', function () {
    resetProfileModal();
  });


});
</script>




</body>

</html>