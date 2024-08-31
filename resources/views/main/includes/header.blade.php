<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    @yield('keywords')
    <link rel="icon" href="images/favicon.png" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }} " />
    <link rel="stylesheet" href="{{ asset('css/style-liberty.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,400;1,100&display=swap"
        rel="stylesheet" />
</head>

<body>
    <!-- Start login modal popup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-light font-weight-bold" id="exampleModalLabel">
                        <img src="{{ asset('images/logo-2.png') }}" width="200px"
                            alt="grand tax filers logo" />
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if (session('login_error'))
                        <div class="alert alert-danger">
                            {{ session('login_error') }}
                        </div>
                    @endif
                    <form action="{{ url('/login') }}" id="loginForm" method="post" class="p-3" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-none">Email or Username</label>
                            <input type="text" class="form-control" placeholder="Email or Username" name="username"
                                required="" />
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                required="" />
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control font-weight-bold" value="Login" />
                        </div>
                        <div class="row sub-w3l my-3">
                            <div class="col forgot-w3l text-right">
                                <a href="#" data-toggle="modal" aria-pressed="false"
                                data-target="#exampleModal2">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center dont-do">
                            Don't have an account?
                            <a href="" id="loginRegisterNow" data-toggle="modal"
                                data-target="#exampleModal1">Register
                                Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End login popup-->
    <!-- Start register modal popup -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-light font-weight-bold" id="exampleModalLabel">
                        <img src="{{ asset('images/logo-2.png') }}" width="200px"
                            alt="grand tax filers logo" />
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <img src="https://www.grandtaxfilers.com/frontend/images/modal.jpeg" alt="" class="img-fluid" /> -->
                    <!-- <form action="#" method="post" class="p-3"> -->
                    <div id="message"></div>
                    <form action="{{ url('/register') }}" id="registerForm" method="post"
                        accept-charset="utf-8">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('register_success'))
                            <div class="alert alert-success">
                                {{ session('register_success') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" Enter username "
                                name="username" id="recipient-rname" value="{{ old('username') }}" required="" />
                            <span id="username_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter email " name="email"
                                id="recipient-email" value="{{ old('email') }}" />
                            <span id="email_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="password"
                                id="recipient-password" />
                            <span id="password_error"></span>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Phone Number"
                                name="phone" id="recipient-phone" value="{{ old('phone') }}" />
                            <span id="phone_error"></span>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" id="btn-register" class="form-control font-weight-bold"
                                value="Register" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- forget password modal popup --}}
    <!-- Start register modal popup -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-light font-weight-bold" id="exampleModalLabel">
                        <img src="{{ asset('images/logo-2.png') }}" width="200px"
                            alt="grand tax filers logo" />
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <img src="https://www.grandtaxfilers.com/frontend/images/modal.jpeg" alt="" class="img-fluid" /> -->
                    <!-- <form action="#" method="post" class="p-3"> -->
                    <div id="message"></div>
                    <form action="{{ route('forget.password.post') }}" class="p-3" method="post" accept-charset="utf-8">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('forget_success'))
                            <div class="alert alert-success">
                                {{ session('forget_success') }}
                            </div>
                        @endif
                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End register modal popup -->
    <!--  top nav -->
    <section class="py-2 top_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 agileits-social top_content">
                    <div class="d-none d-lg-block">
                        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                            <img src="images/logo-2.png" width="170px" alt="" class="mr-1" />
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="text-center">
                        <a href="mailto:contact@grandtaxfilers.com" class="text-light mr-1 mr-md-2 mr-xl-3">
                            <i class="fa fa-envelope text-warning"></i>
                            contact@grandtaxfilers.com
                        </a>
                        <a href="tel:3159616434" class="text-light">
                            <i class="fa fa-phone text-warning"></i> +1-3159616434
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="grandtax_top_header mt-2 mt-md-0">
                        <ul class="m-0 d-flex justify-content-center justify-lg-content-end align-items-center">
                            <li>
                                <a href="" target="_blank">
                                    <img src="images/IRS-logo-2.png" height="50px" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" aria-pressed="false"
                                    data-target="#exampleModal">
                                    <i class="fa fa-user" aria-hidden="true"></i> Login
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" aria-pressed="false"
                                    data-target="#exampleModal2">
                                    <i class="fa fa-user" aria-hidden="true"></i> Reset Password
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#exampleModal1">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Register
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end top nav -->
    <!--header-->
    <header id="site-header">
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg stroke p-0">
                <a class="navbar-brand d-lg-none" href="#index.html">
                    <img src="images/logo-2.png" alt="Your logo" title="Your logo" width="100px" />
                </a>
                <button class="navbar-toggler collapsed bg-gradient mr-3" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about_us')}}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/individual_taxes') }}">Individual Taxes</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('/business_taxes') }}">Business Taxes</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="{{ url('/business_taxes') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                Business Taxes <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ url('/business_incorporation') }}">Business Incorporation</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ url('/business_tax_filing') }}">Business Tax Filing</a>
                            </div>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/indian_tax_filing') }}">Indian Tax Filing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/data_security') }}">Data Security</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/refund_status') }}">Refund Status</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  href="{{ url('/Audit_Support') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                Audit Support <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ url('/audit_support_for_irs') }}">Audit Support for IRS</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ url('/state_audit') }}">State Audit</a>
                            </div>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact_us') }}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="clearfix"></div>
    <!--//header-->
    @yield('content')
    <!-- footer -->
    <footer class="w3l-footer-22 position-relative mt-5 pt-5">
        <div class="footer-sub">
            <div class="container">
                <div class="text-txt">
                    <div class="right-side" data-aos="fade-up">
                        <!-- form section -->
                        <div class="row align-items-center w3l-forms-9">
                            <div class="main-midd col-lg-6">
                                <h4 class="title-head mb-lg-2">
                                    Subscribe us to join our community
                                </h4>
                                <p>Newsletter</p>
                            </div>
                            <div class="main-midd-2 col-lg-6 mt-md-0 mt-4">
                                <form action="#url" method="GET" class="rightside-form">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter your email" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <!-- //form section -->
                    </div>
                    <div class="row sub-columns">
                        <div class="col-xl-2 col-sm-6 sub-two-right" data-aos="fade-up">
                            <h6>Quick links</h6>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">
                                        <span class="fa fa-angle-double-right mr-2"></span>Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/refund_status') }}">
                                        <span class="fa fa-angle-double-right mr-2"></span>Refund
                                        Status
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/indian_tax_filing') }}">
                                        <span class="fa fa-angle-double-right mr-2"></span>Indian
                                        Tax Filing
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/view_all_services') }}">
                                        <span class="fa fa-angle-double-right mr-2"></span>Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/terms_conditions') }}">
                                        <span class="fa fa-angle-double-right mr-2"></span>Terms & Conditins
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-sm-6 sub-two-right pl-lg-5 mt-sm-0 mt-4" data-aos="fade-up">
                            <h6>Help & Support</h6>
                            <ul>
                                <li>
                                    <a href="{{ url('/contact_us') }}">
                                        <span class="fa fa-angle-double-right mr-2"></span>Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/about_us') }}">
                                        <span class="fa fa-angle-double-right mr-2"></span>About
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/data_security') }}">
                                        <span class="fa fa-angle-double-right mr-2"></span>Data
                                        Security
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/refer_friend') }}">
                                        <span class="fa fa-angle-double-right mr-2"></span>Refer
                                        Your Friend
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-sm-6 sub-one-left mt-lg-0 mt-sm-5 mt-4" data-aos="fade-up">
                            <h6>Contact</h6>
                            <div class="column2">
                                <div class="href1">
                                    <span class="fa fa-envelope" aria-hidden="true"></span>
                                    <a href="mailto:contact@grandtaxfilers.com">contact@grandtaxfilers.com</a>
                                </div>
                                <div class="href2">
                                    <span class="fa fa-phone" aria-hidden="true"></span>
                                    <a href="tel:3159616434">+1-3159616434</a>
                                </div>
                                <div>
                                    <p class="contact-para">
                                        <span class="fa fa-map-marker" aria-hidden="true"></span>Edmond, OK 73003 USA
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 sub-one-left ab-right-cont pl-lg-5 mt-lg-0 mt-sm-5 mt-4"
                            data-aos="fade-up">
                            <h6>About</h6>
                            <p class="text-justify">
                                Grand tax filers existence is the one and only reason for the
                                tax payers to get back their unnecessary taxes which are being
                                paid to the IRS and State Income Tax Departments, due to
                                inefficient online tax tools, inexperienced or substandard tax
                                consultants.
                            </p>
                            <div class="columns-2">
                                <ul class="social">
                                    <li>
                                        <a href="https://www.facebook.com/GrandTaxFilers" target="_blank">
                                            <span class="fa fa-facebook" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/grand-tax-filers/" target="_blank">
                                            <span class="fa fa-linkedin" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/grandtaxfilers/" target="_blank">
                                            <span class="fa fa-instagram" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/GrandTaxFilers" target="_blank">
                                            <span class="fa fa-twitter" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright-footer text-center">
            <div class="container">
                <div class="columns text-light font-weight-bold">
                    <p>@2022 Grandtax Filers. All Rights Reserved.</p>
                </div>
            </div>
        </div>
        <!-- //copyright -->
    </footer>
    <!-- //footer -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/main_index.js') }}"></script>
    <!-- register form script -->
    <!-- <script src="js/forms/register.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
    </script>
    @if (session('register_success'))
        <script>
            $(document).ready(function() {
                $('#exampleModal1').modal('show')
            })
        </script>
    @elseif ($errors->any())
        <script>
            $(document).ready(function() {
                $('#exampleModal1').modal('show')
            })
        </script>
    @elseif (session('login_error'))
        <script>
            $(document).ready(function() {
                $('#exampleModal').modal('show')
            })
        </script>
    @endif
    <!-- table -->
</body>

</html>
