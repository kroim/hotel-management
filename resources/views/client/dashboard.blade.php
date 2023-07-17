<!doctype html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{ url('home_template/01/images/hotel-icon-01.jpg') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="{{ url('home_template/01/css/my-font-family.css') }}" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ url('home_template/01/css/bootstrap.min.css') }}">

    <!-- Font Awesome Stylesheet -->
    <link rel="stylesheet" href="{{ url('home_template/01/css/font-awesome.min.css') }}">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="{{ url('home_template/01/css/style.css') }}">
    <link rel="stylesheet" id="cpswitch" href="{{ url('home_template/01/css/orange.css') }}">
    <link rel="stylesheet" href="{{ url('home_template/01/css/responsive.css') }}">
</head>


<body>

<!--====== LOADER =====-->
<div class="loader"></div>

<!--============= TOP-BAR ===========-->
<div id="top-bar" class="tb-text-grey">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="info">
                    <ul class="list-unstyled list-inline">
                        <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                        <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                    </ul>
                </div><!-- end info -->
            </div><!-- end columns -->

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div id="links">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#logout" onclick="$('#logout').submit();"><span><i class="fa fa-lock"></i></span>Logout</a></li>
                        {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
                        <button type="submit">@lang('global.logout')</button>
                        {!! Form::close() !!}
                        <li>
                            <form>
                                <ul class="list-inline">
                                    <li>
                                        <div class="form-group currency">
                                            <span><i class="fa fa-angle-down"></i></span>
                                            <select class="form-control">
                                                <option value="">$</option>
                                                <option value="">₫</option>
                                                <option value="">¥</option>
                                            </select>
                                        </div><!-- end form-group -->
                                    </li>

                                    <li>
                                        <div class="form-group language">
                                            <span><i class="fa fa-angle-down"></i></span>
                                            <select class="form-control">
                                                <option value="">EN</option>
                                                <option value="">VI</option>
                                                <option value="">CN</option>
                                            </select>
                                        </div><!-- end form-group -->
                                    </li>
                                </ul>
                            </form>
                        </li>
                    </ul>
                </div><!-- end links -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end top-bar -->

<nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" id="menu-button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand"><span><i class="fa fa-hotel"></i>HOTEL</span> RESERVE</a>
        </div><!-- end navbar-header -->

        <div class="collapse navbar-collapse" id="myNavbar1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="{{ url('/client/booking') }}">Your Booking</a></li>
                <li class="dropdown"><a href="#">Group</a></li>
                <li class="dropdown"><a href="#">Gifts</a></li>
                <li class="dropdown"><a href="#">Help</a></li>
                <li class="dropdown"><a href="{{ url('/contact_us') }}">Contact Us</a></li>

            </ul>
        </div><!-- end navbar collapse -->
    </div><!-- end container -->
</nav><!-- end navbar -->

<div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >
        <h2 id="web-name"><span><i class="fa fa-hotel"></i></span>Hotel Reserve</h2>

        <div id="main-menu">
            <div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->

            <div class="list-group panel">
                <a href="{{ url('/client/booking') }}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Your Booking</a>
                <a href="#" class="list-group-item" ><span><i class="fa fa-group link-icon"></i></span>Group</a>
                <a href="#" class="list-group-item" ><span><i class="fa fa-gift link-icon"></i></span>Gifts</a>
                <a href="#" class="list-group-item" ><span><i class="fa fa-address-card link-icon"></i></span>Help</a>
                <a href="{{ url('/contact_us') }}" class="list-group-item" ><span><i class="fa fa-question-circle link-icon"></i></span>Contact Us</a>
            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->

<!--========== PAGE-COVER =========-->
<section class="page-cover dashboard">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">My Account</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">My Account</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="dashboard" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="dashboard-heading">
                        <h2>Travel <span>Profile</span></h2>
                        <p>Hi Lisa, Welcome to Star Travels!</p>
                        <p>All your trips booked with us will appear here and you'll be able to manage everything!</p>
                    </div><!-- end dashboard-heading -->

                    <div class="dashboard-wrapper">
                        <div class="row">

                            <div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                <ul class="nav nav-tabs nav-stacked text-center">
                                    <li class="active"><a href="{{ url('/admin/home') }}"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li>
                                    <li><a href="{{ url('client/profile') }}"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                    <li><a href="{{ url('client/booking') }}"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                    <li><a href="{{ url('client/wishlist') }}"><span><i class="fa fa-heart"></i></span>Wishlist</a></li>
                                    <li><a href="{{ url('client/mycard') }}"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li>
                                </ul>
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content">
                                <h2 class="dash-content-title">Total Traveled</h2>
                                <div class="row info-stat">

                                    <div class="col-sm-6 col-md-3">
                                        <div class="stat-block">
                                            <span><i class="fa fa-tachometer"></i></span>
                                            <h3>1548</h3>
                                            <p>Miles</p>
                                        </div><!-- end stat-block -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-6 col-md-3">
                                        <div class="stat-block">
                                            <span><i class="fa fa-globe"></i></span>
                                            <h3>12%</h3>
                                            <p>World</p>
                                        </div><!-- end stat-block -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-6 col-md-3">
                                        <div class="stat-block">
                                            <span><i class="fa fa-building"></i></span>
                                            <h3>312</h3>
                                            <p>Cities</p>
                                        </div><!-- end stat-block -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-6 col-md-3">
                                        <div class="stat-block">
                                            <span><i class="fa fa-paper-plane"></i></span>
                                            <h3>102</h3>
                                            <p>Trips</p>
                                        </div><!-- end stat-block -->
                                    </div><!-- end columns -->

                                </div><!-- end row -->

                                <div class="dashboard-listing recent-activity">
                                    <h3 class="dash-listing-heading">Recent Activites</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                            <tr>
                                                <td class="dash-list-icon recent-ac-icon"><i class="fa fa-bars"></i></td>
                                                <td class="dash-list-text recent-ac-text">Your listing <span>The Star Travel</span> has been approved!</td>
                                                <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                                            </tr>

                                            <tr>
                                                <td class="dash-list-icon recent-ac-icon"><i class="fa fa-star"></i></td>
                                                <td class="dash-list-text recent-ac-text">Kathy Brown left a review on <span>The Star Travel</span></td>
                                                <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                                            </tr>

                                            <tr>
                                                <td class="dash-list-icon recent-ac-icon"><i class="fa fa-bookmark"></i></td>
                                                <td class="dash-list-text recent-ac-text">Someone bookmarked your Norma <span>Spa Center</span> listing!</td>
                                                <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                                            </tr>

                                            <tr>
                                                <td class="dash-list-icon recent-ac-icon"><i class="fa fa-star"></i></td>
                                                <td class="dash-list-text recent-ac-text">Kathy Brown left a review on <span>Auto Repair Shop</span></td>
                                                <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                                            </tr>

                                            <tr>
                                                <td class="dash-list-icon recent-ac-icon"><i class="fa fa-bookmark"></i></td>
                                                <td class="dash-list-text recent-ac-text">Someone bookmarked your <span>The Star Apartment</span> listing!</td>
                                                <td class="dash-list-btn del-field"><button class="btn">X</button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- end table-responsive -->
                                </div><!-- end recent-activity -->

                                <div class="dashboard-listing invoices">
                                    <h3 class="dash-listing-heading">Invoices</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                            <tr>
                                                <td class="dash-list-icon invoice-icon"><i class="fa fa-bars"></i></td>
                                                <td class="dash-list-text invoice-text">
                                                    <h4 class="invoice-title">Professional Plan</h4>
                                                    <ul class="list-unstyled list-inline invoice-info">
                                                        <li class="invoice-status red">Unpaid</li>
                                                        <li class="invoice-order"> Order: #00214</li>
                                                        <li class="invoice-date"> Date: 25/08/2017</li>
                                                    </ul>
                                                </td>
                                                <td class="dash-list-btn"><button class="btn btn-orange">View Invoice</button></td>
                                            </tr>

                                            <tr>
                                                <td class="dash-list-icon invoice-icon"><i class="fa fa-bars"></i></td>
                                                <td class="dash-list-text invoice-text">
                                                    <h4>Extended Plan</h4>
                                                    <ul class="list-unstyled list-inline invoice-info">
                                                        <li class="invoice-status green">Paid</li>
                                                        <li class="invoice-order"> Order: #00214</li>
                                                        <li class="invoice-date"> Date: 25/08/2017</li>
                                                    </ul>
                                                </td>
                                                <td class="dash-list-btn"><button class="btn btn-orange">View Invoice</button></td>
                                            </tr>

                                            <tr>
                                                <td class="dash-list-icon invoice-icon"><i class="fa fa-bars"></i></td>
                                                <td class="dash-list-text invoice-text">
                                                    <h4>Extended Plan</h4>
                                                    <ul class="list-unstyled list-inline invoice-info">
                                                        <li class="invoice-status red">Unpaid</li>
                                                        <li class="invoice-order"> Order: #00214</li>
                                                        <li class="invoice-date"> Date: 25/08/2017</li>
                                                    </ul>
                                                </td>
                                                <td class="dash-list-btn"><button class="btn btn-orange">View Invoice</button></td>
                                            </tr>

                                            <tr>
                                                <td class="dash-list-icon invoice-icon"><i class="fa fa-bars"></i></td>
                                                <td class="dash-list-text invoice-text">
                                                    <h4>Basic Plan</h4>
                                                    <ul class="list-unstyled list-inline invoice-info">
                                                        <li class="invoice-status red">Unpaid</li>
                                                        <li class="invoice-order"> Order: #00214</li>
                                                        <li class="invoice-date"> Date: 25/08/2017</li>
                                                    </ul>
                                                </td>
                                                <td class="dash-list-btn"><button class="btn btn-orange">View Invoice</button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- end table-responsive -->
                                </div><!-- end invoices -->
                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end dashboard-wrapper -->
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end dashboard -->
</section><!-- end innerpage-wrapper -->


<!--========================= NEWSLETTER-1 ==========================-->
<section id="newsletter-1" class="section-padding back-size newsletter">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2>Subscribe Our Newsletter</h2>
                <p>Subscibe to receive our interesting updates</p>
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                            <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                        </div>
                    </div>
                </form>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end newsletter-1 -->


<!--======================= FOOTER =======================-->
<section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

    <div id="footer-top" class="banner-padding ftr-top-black ftr-text-white">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                    <h3 class="footer-heading">CONTACT US</h3>
                    <ul class="list-unstyled">
                        <li><span><i class="fa fa-map-marker"></i></span>29 Land St, Lorem City, CA</li>
                        <li><span><i class="fa fa-phone"></i></span>+00 123 4567</li>
                        <li><span><i class="fa fa-envelope"></i></span>info@starhotel.com</li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                    <h3 class="footer-heading">COMPANY</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Hotel</a></li>
                        <li><a href="#">Group</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                    <h3 class="footer-heading">RESOURCES</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                    <h3 class="footer-heading">ABOUT US</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                    <ul class="social-links list-inline list-unstyled">
                        <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                    </ul>
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-top -->

    <div id="footer-bottom" class="ftr-bot-black">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                    <p>© 2017 <a href="#">StarTravel</a>. All rights reserved.</p>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-bottom -->

</section><!-- end footer -->


<!-- Page Scripts Starts -->
<script src="{{ url('home_template/01/js/jquery.min.js') }}"></script>
<script src="{{ url('home_template/01/js/bootstrap.min.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-navigation.js') }}"></script>
<!-- Page Scripts Ends -->
</body>
</html>
