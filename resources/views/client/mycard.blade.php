<!doctype html>
<html lang="en">
<head>
    <title>My Cards</title>
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
                                    <li><a href="{{ url('/admin/home') }}"><span><i class="fa fa-cogs"></i></span>Dashboard</a></li>
                                    <li><a href="{{ url('client/profile') }}"><span><i class="fa fa-user"></i></span>Profile</a></li>
                                    <li><a href="{{ url('client/booking') }}"><span><i class="fa fa-briefcase"></i></span>Booking</a></li>
                                    <li><a href="{{ url('client/wishlist') }}"><span><i class="fa fa-heart"></i></span>Wishlist</a></li>
                                    <li class="active"><a href="{{ url('client/mycard') }}"><span><i class="fa fa-credit-card"></i></span>My Cards</a></li>
                                </ul>
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content my-cards">
                                <h2 class="dash-content-title">Credit/Debit Cards</h2>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="card-block">
                                            <h2 class="card-number">xxxx xxxx xxxx 1234</h2>
                                            <h3 class="card-expiry">Vaild Thru 06/17</h3>
                                            <div class="card-name">
                                                <h4>Name On Card</h4>
                                                <h3 class="user-name">Lisa</h3>
                                            </div><!-- end card-name -->

                                            <ul class="list-unstyled list-inline">
                                                <li class="card-img"><img src="{{ asset('home_template/01/images/default/master-card.png') }}" class="img-responsive" alt="card-img" /></li>
                                                <li class="card-links"><button class="btn" data-toggle="modal" data-target="#edit-card" ><span><i class="fa fa-pencil"></i></span></button><button class="btn"><span><i class="fa fa-close"></i></span></button></li>
                                            </ul>
                                        </div><!-- end card-block -->
                                    </div><!-- end columns -->

                                    <div class="col-sm-12 col-md-6">
                                        <a href="#add-card" data-toggle="modal">
                                            <div class="card-block add-card">
                                                <span><i class="fa fa-plus-circle"></i></span>
                                                <h4>Add New Card</h4>
                                            </div><!-- end card-block -->
                                        </a>
                                    </div><!-- end columns -->

                                </div><!-- end row -->
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
                        <li><a href="#">Flight</a></li>
                        <li><a href="#">Hotel</a></li>
                        <li><a href="#">Tours</a></li>
                        <li><a href="#">Cruise</a></li>
                        <li><a href="#">Cars</a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                    <h3 class="footer-heading">RESOURCES</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Site Map</a></li>
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

<div id="add-card" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">New Card</h3>
            </div><!-- end modal-header -->

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" class="form-control" placeholder="XXXX XXXX XXXX XXXX" />
                    </div><!-- end form-group -->

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Cardholder Name</label>
                                <input  type="text" class="form-control" placeholder="Your Name" />
                            </div><!-- end form-group -->
                        </div><!-- end columns -->

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Valid Thru</label>
                                <input  type="text" class="form-control" placeholder="mm/yy" />
                            </div><!-- end form-group -->
                        </div><!-- end columns -->
                    </div><!-- end row -->

                    <div class="custom-check"><input type="checkbox" id="check01" name="checkbox"/>
                        <label for="check01"><span><i class="fa fa-check"></i></span>Set as primary</label>
                    </div><!-- end checkbox -->

                    <button class="btn btn-orange">Add Card</button>
                </form>
            </div><!-- end modal-bpdy -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end add-card -->

<div id="edit-card" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Edit Card</h3>
            </div><!-- end modal-header -->

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Old Card Number</label>
                        <input type="text" class="form-control" placeholder="XXXX XXXX XXXX 1234" readonly/>
                    </div><!-- end form-group -->

                    <div class="form-group">
                        <label>New Card Number</label>
                        <input type="text" class="form-control" placeholder="XXXX XXXX XXXX XXXX" />
                    </div><!-- end form-group -->

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Cardholder Name</label>
                                <input  type="text" class="form-control" placeholder="Your Name" />
                            </div><!-- end form-group -->
                        </div><!-- end columns -->

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Valid Thru</label>
                                <input  type="text" class="form-control" placeholder="mm/yy" />
                            </div><!-- end form-group -->
                        </div><!-- end columns -->
                    </div><!-- end row -->

                    <div class="custom-check"><input type="checkbox" id="check02" name="checkbox"/>
                        <label for="check02"><span><i class="fa fa-check"></i></span>Set as primary</label>
                    </div><!-- end checkbox -->

                    <button class="btn btn-orange">Save Changes</button>
                </form>
            </div><!-- end modal-bpdy -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end edit-card -->


<!-- Page Scripts Starts -->
<script src="{{ url('home_template/01/js/jquery.min.js') }}"></script>
<script src="{{ url('home_template/01/js/bootstrap.min.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-navigation.js') }}"></script>
<!-- Page Scripts Ends -->
</body>
</html>
