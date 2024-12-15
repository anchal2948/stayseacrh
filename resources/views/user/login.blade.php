<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>blog-detail</title>
        <link rel="stylesheet" href="assest/cdn/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css" />
        <link rel="stylesheet" href="assest/css/style.css" />
    </head>

    <body>
        <section class="header_wrapper">
            <div class="container">
                <nav class="navbar navbar-expand-lg fixed-top ssss">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="assest/images/SearchStay-logo.png" class="logo" width class="company-logo" alt="logo" /></a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Browse Rentals
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('properties', ['location' => 'Noida']) }}">Noida</a></li>
                                        <li><a class="dropdown-item" href="{{ route('properties', ['location' => 'New Delhi']) }}">New Delhi</a></li>
                                        <li><a class="dropdown-item" href="{{ route('properties', ['location' => 'Haryana']) }}">Haryana</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        List with Rove
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('findout') }}">Findout</a></li>
                                        <li><a class="dropdown-item" href="{{ route('luxury') }}">Luxury Management</a></li>
                                        <li><a class="dropdown-item" href="{{ route('properties') }}">Properties</a></li>
                                        <li><a class="dropdown-item" href="{{ route('termsconditions') }}">Terms & Conditions</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('blogs') }}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src="assest/images/call-icon.png" width="20" alt="call" /></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src="assest/images/mail-icon.png" width="20" alt="mail" /></a>
                                </li>
                            </ul>
                            <ul class="d-flex list-unstyled pe-lg-3 align-items-center mb-0">
                                <li class="nav-item">
                                    <a class="nav-link pe-2" href="{{ route('user.register.page') }}">Sign Up</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#">Login</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

        <main>
            <!-- <section class="blog_banner listin_banner">
            <h1>
 Login Now
            </h1>
        </section> -->
            <section class="login_wrappr my-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row justify-content-center mx-0">
                                <div class="col-lg-6 col-md-6 col-12 pe-0">
                                    <div>
                                        <img src="assest/images/login_img.jpg" class="login_img" alt />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 form_coluum">
                                    <div class="form_card">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <input type="hidden" autocomplete="off" />
                                            <h3 class="pb-3 login_heading">Login Your Account</h3>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control bol" name="email" id="email" aria-describedby="emailHelp" placeholder="Username" />
                                                @if ($errors->has('email'))
                                                    <span>
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="mb-3 mt-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control bol" name="password" id="password" placeholder="Password" />
                                                @if ($errors->has('password'))
                                                    <span>
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif 
                                            </div>
                                            <div class="mb-4 form-check d-flex">
                                                <input type="checkbox" class="form-check-input" id="remember" name="remember" />
                                                <label class="form-check-label ps-2 fs-6" for="remember">Remember Me</label>
                                                <a class="underline text-sm text-white text-end ms-auto forgot_text" href="#">
                                                    Forgot password?
                                                </a>
                                            </div>
                                            @if ($errors->has('error'))
                                                <span>
                                                    <strong>{{ $errors->first('error') }}</strong>
                                                </span>
                                            @endif
                                            
                                            <input type="hidden" name="user_type" value="user">
                                            
                                            <div class="text-center mt-3 mt-lg-0">
                                                <button type="submit" class="btn btn_send">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <hr />
        <footer class="footer_wrapper">
            <div class="container px-4 py-3">
                <div class="row">
                    <a class href="#"> <img src="assest/images/SearchStay-logo.png" class="footer_logo" alt="logo" /></a>

                    <div class="col-lg-5">
                        <div>
                            <h6>
                                NewsLetter
                            </h6>
                            <form class>
                                <div class="d-flex">
                                    <input class="form-control email_field w-50" type="search" placeholder="Email" aria-label="Search" />
                                    <button class="btn btn_right" type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                                <div>
                                    <div class="d-flex pt-2">
                                        <div class="form-check ps-0">
                                            <label class="form-check-label pe-2" for="flexRadioDefault1">
                                                I am a :
                                            </label>
                                        </div>
                                        <div class="form-check pe-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Renter
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Owner
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="list-unstyled ps-0 pt-3">
                                <li class="footer_li">
                                    <a href="https://soilsearch.in" class="footer_anchor">
                                        Contact Us
                                    </a>
                                </li>
                                <li class="footer_li">
                                    <a href="https://soilsearch.in/our-team" class="footer_anchor">
                                        Facebook
                                    </a>
                                </li>
                                <li class="footer_li">
                                    <a href="https://soilsearch.in/projects" class="footer_anchor">
                                        Instagram
                                    </a>
                                </li>
                                <li class="footer_li">
                                    <a href="https://soilsearch.in/blogs" class="footer_anchor">
                                        Call Us
                                    </a>
                                </li>
                                <li class="footer_li">
                                    <a href="https://soilsearch.in/contact-us" class="footer_anchor">
                                        Email Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="fw-bold">
                            Stay
                        </h5>
                        <ul class="list-unstyled ps-0">
                            <li class="footer_li">
                                <a href="https://soilsearch.in" class="footer_anchor">
                                    Contact Us
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/our-team" class="footer_anchor">
                                    Facebook
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/projects" class="footer_anchor">
                                    Instagram
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/blogs" class="footer_anchor">
                                    Call Us
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/contact-us" class="footer_anchor">
                                    Email Us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="fw-bold">
                            Stay
                        </h5>
                        <ul class="list-unstyled ps-0">
                            <li class="footer_li">
                                <a href="https://soilsearch.in" class="footer_anchor">
                                    Contact Us
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/our-team" class="footer_anchor">
                                    Facebook
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/projects" class="footer_anchor">
                                    Instagram
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/blogs" class="footer_anchor">
                                    Call Us
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/contact-us" class="footer_anchor">
                                    Email Us
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="fw-bold">
                            Stay
                        </h5>
                        <ul class="list-unstyled ps-0">
                            <li class="footer_li">
                                <a href="https://soilsearch.in" class="footer_anchor">
                                    Contact Us
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/our-team" class="footer_anchor">
                                    Facebook
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/projects" class="footer_anchor">
                                    Instagram
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/blogs" class="footer_anchor">
                                    Call Us
                                </a>
                            </li>
                            <li class="footer_li">
                                <a href="https://soilsearch.in/contact-us" class="footer_anchor">
                                    Email Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr />
            <div class="copyright">
                <div class="container-fluid">
                    <div class="d-flex justify-content-center align-items-center pt-2">
                        <p class="text-white footer_anchor pe-3">
                            Search-A-Stay©2024
                        </p>
                        <p>
                            <a href="https://leadpanther.com/" class="ps-3 border-start text-white footer_anchor">
                                Designed By Lead Panther
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="assest/cdn/bootstrap/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(window).scroll(function () {
                $("nav").toggleClass("scrolled", $(this).scrollTop() > 50);
            });
        </script>
    </body>
</html>
