<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from wrraptheme.com/templates/aero/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 05:54:31 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Aero Bootstrap4 Admin :: Sign Up</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
</head>

<body class="theme-blush">

<div class="authentication">    
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <form class="card auth_form" method="post" action="{{ route('host.register') }}">
                    @csrf
                    <div class="header">
                        <img class="logo" src="{{ asset('assets/images/searchstaylogo.webp') }}" alt="">
                        <h5>Sign Up</h5>
                        <span>Register as a Host</span>
                    </div>
                    <div class="body">
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                        </div>
                            @if ($errors->has('name'))
                                <span>
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="email" placeholder="Enter Email">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-email"></i></span>
                            </div>
                        </div>                        
                            @if ($errors->has('email'))
                                <span>
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="password" placeholder="Password">
                            <div class="input-group-append">                                
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>
                        </div>
                            @if ($errors->has('password'))
                                <span>
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                            </div>
                        </div>
                            @if ($errors->has('confirm_password'))
                                <span>
                                    <strong>{{ $errors->first('confirm_password') }}</strong>
                                </span>
                            @endif
                        <!-- <div class="checkbox">
                            <input id="remember_me" type="checkbox">
                            <label for="remember_me">I read and agree to the <a href="javascript:void(0);">terms of usage</a></label>
                        </div> -->
                        <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN UP</button>
                        <div class="signin_with mt-3">
                            <a class="link" href="{{ route('host.login.page') }}">Already a host?</a>
                        </div>
                    </div>
                </form>
                <!-- <div class="copyright text-center">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>,
                    <span>Designed by <a href="https://thememakker.com/" target="_blank">ThemeMakker</a></span>
                </div> -->
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <img src="{{ asset('assets/images/signup.svg') }}" alt="Sign Up" />
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
</body>

<!-- Mirrored from wrraptheme.com/templates/aero/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 05:54:32 GMT -->
</html>