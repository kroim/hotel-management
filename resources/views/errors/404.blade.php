<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
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
                        <li><a href="{{ url('/login') }}"><span><i class="fa fa-lock"></i></span>Login</a></li>
                        <li><a href="{{ url('/register') }}"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
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
                <li class="dropdown"><a href="#">Hotel Details</a></li>
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
                <a href="#" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Hotel Details</a>
                <a href="#" class="list-group-item" ><span><i class="fa fa-group link-icon"></i></span>Group</a>
                <a href="#" class="list-group-item" ><span><i class="fa fa-gift link-icon"></i></span>Gifts</a>
                <a href="#" class="list-group-item" ><span><i class="fa fa-address-card link-icon"></i></span>Help</a>
                <a href="{{ url('/contact_us') }}" class="list-group-item"><span><i class="fa fa-question-circle link-icon"></i></span>Contact Us</a>
            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->


<!--============= PAGE-COVER =============-->
<section class="page-cover" id="cover-login">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">This Route is not defined.</h1>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!-- Page Scripts Starts -->
<script src="{{ url('home_template/01/js/jquery.min.js') }}"></script>
<script src="{{ url('home_template/01/js/bootstrap.min.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-navigation.js') }}"></script>
<!-- Page Scripts Ends -->
</body>
</html>
