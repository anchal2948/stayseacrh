<section class="header_wrapper ">
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top ssss">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('homepage') }}"><img src="{{ asset('assest/images/SearchStay-logo.png') }}" class="logo" width=""
                        class="company-logo" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Browse Rentals
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('properties', ['location' => 'Noida']) }}">Noida</a></li>
                                <li><a class="dropdown-item" href="{{ route('properties', ['location' => 'New Delhi']) }}">New Delhi</a></li>
                                <li><a class="dropdown-item" href="{{ route('properties', ['location' => 'Haryana']) }}">Haryana</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                List with Search-Stay
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
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="#"><img src="{{ asset('assest/images/call-icon.png') }}" width="20"
                                    alt="call"></a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="#"><img src="{{ asset('assest/images/mail-icon.png') }}" width="20"
                                    alt="mail"></a>
                        </li>
                    </ul>
                    <ul class="d-lg-flex list-unstyled pe-lg-3 align-items-center text-center mb-0">
                        <li class="nav-item">

                            <a class="nav-link pe-2" href="{{ route('user.register.page') }}">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.login.page') }}">Login</a>
                        </li>
                    <div class="d-flex d-block d-lg-none ps-4 pt-3">
                          <a class="nav-link" href="#"><img src="{{ asset('assest/images/call-icon.png') }}" width="20"
                                    alt="call"></a>
                                     <a class="nav-link ps-4" href="#"><img src="{{ asset('assest/images/mail-icon.png') }}" width="20"
                                    alt="mail"></a>
                    </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>