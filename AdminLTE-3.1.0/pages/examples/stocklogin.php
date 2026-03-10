<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Stock</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <style>
    .full{
        height: 100%;
        width: 100%;
    }
    .img-container{
        max-height: 100vh;
    }
    .image-part{
        display: flex;
        flex-direction: column;
    }
    .header{
        padding-top: 6rem;
        text-align: center;
    }
    .main-image{
        width: 100%;
        height: 100%;
        min-height: 18rem;
    }
    .main-heading{
        font-weight: bold;
        letter-spacing: 1px;
    }
    .login-box{
        width: 100%;
        height: 100%;
    }
    .company-name{
        padding-top: 5rem;
        text-align: center;
        font-weight: bold;
        letter-spacing: 4px;
    }
    .login-text{
        font-size: 14     rem;
        text-align: center;
        font-weight: 700;
        margin-bottom: 0px;
    }
    .btn{
        width: 100%;
        font-size: 1.1rem;
        letter-spacing: 1px;
        font-weight: 700;
    }
    .remember-box{
        display: flex;
        flex-direction: row;
        align-items: center;
        float: left;
    }
    .checkbox{
        height: 1rem;
        width: 1rem;
    }
    .forgot-link{
        float: right;
        font-weight: 500;
    }

    @media (max-width: 500px) {
        .header{
            padding-top: 1rem;
            text-align: center;
        }
        .company-name{
            padding-top: 1rem;
        }
    }
    
    .password-box{
        display: flex;
        flex-direction: row;
    }
    .password-box input{
        flex-grow: 1;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
    }
    .btn-default{
        width: max-content;
        font-size: initial;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 0px;
    }
  </style>
</head>
<body class="hold-transition login-page" style="background: #fff;">
    <section class="main-content full">
        <div class="row m-0 p-0 full">
            <div class="col-12 col-md-8 img-container">
                <div class="image-part full">
                    <div class="header">
                        <h2 class="main-heading">STOCK MANGEMENT</h2>
                    </div>
                    <img src="{{asset('dist/img/manufacturer/1.jpg')}}" alt="logo" class="main-image">
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card login-box">
                    <div class="card-body">
                        <h1 class="company-name mb-3">KL<span class="text-danger">K</span></h1>
                        <p class="login-text">Welcome !</p>
                        <p class="login-text mb-4">Login to your dashboard.</p>
                        
                        
      @if(session()->has('status'))
                <div class="text-danger">
                    {{session('status')}}
                </div>
                @endif

      @if ($errors->any())
     @foreach ($errors->all() as $error)
     <div class="text-danger">
                 {{ $error }}
           </div>
    @endforeach
@endif
                      <form action="{{route('loginuser')}}" method="post"  enctype="multipart/form-data">
                         @csrf
                            <div class="form-group mb-3">
                                <label>User ID</label>
                                <input type="text" name="employee_id" id="email" class="form-control" placeholder="Enter User Id" required>
                            </div>
                            <div class="form-group mb-4">
                                <label>Password</label>
                                <div class="password-box">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
                                    <button class="btn btn-default" type="button" onclick="showPass()"><i class="fa fa-eye"></i></button>
                                </div>
                            </div>
                            <button  type="submit" class="btn btn-primary mb-3">Login</button>
                            
                            <div class="form-group mb-3">
                                <div class="remember-box">
                                    <input type="checkbox" name="remember" id="remember" class="checkbox">
                                    <span>&nbsp;Remember me</span>
                                </div>
                                <a href="#" class="forgot-link"><i class="fa fa-lock"></i> Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>
  function showPass(){
    document.getElementById('password').type = "text";
    setTimeout(() => {
    document.getElementById('password').type = "password";
    },2000);
  }
</script>
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>