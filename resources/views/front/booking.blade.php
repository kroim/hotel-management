<!doctype html>
<html lang="en">
<head>
    <title>Booking</title>
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
    <style>
        #booking-form .row{
            padding-bottom: 3%;
        }
        .btn{
            border-radius: 3px;
        }
    </style>
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
                        @if(Auth::check())
                            <li><a href="#logout" onclick="$('#logout').submit();"><span><i class="fa fa-lock"></i></span>Logout</a></li>
                        @else
                            <li><a href="{{ url('/login') }}"><span><i class="fa fa-lock"></i></span>Login</a></li>
                            <li><a href="{{ url('/register') }}"><span><i class="fa fa-plus"></i></span>Sign Up</a></li>
                        @endif
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
                <a href="{{ url('/contact_us') }}" class="list-group-item"><span><i class="fa fa-question-circle link-icon"></i></span>Contact Us</a>
            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->


<!--============= PAGE-COVER =============-->
<section class="page-cover" id="cover-byf-info">
    <div class="container">
        <div class="col-sm-12">
            <h1 class="page-title"> Welcome to Booking Page!</h1>
        </div><!-- end columns -->
    </div><!-- end container -->
</section><!-- end page-cover -->
<br>
<section class="innerpage-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12" style="background-color: rgb(236,236,236); padding: 5% 10%">
                <div class="row">
                    <h2>Room Details</h2>
                    <h5>{{ $room_data->name }} - Rooms: {{ $rooms }} - Adults: {{ $adults }} - Children: {{ $kids }}</h5>
                </div>
                <br>
                <div class="row">
                    <form id="booking-form" action="{{ url('/add_booking') }}" method="post">
                        <input name="_token" value="{{ csrf_token() }}" style="display: none;">
                        <input name="booking_room_id" value="{{ $room_id }}" style="display: none">
                        <input name="booking_rooms" value="{{ $rooms }}" style="display: none">
                        <input name="booking_adults" value="{{ $adults }}" style="display: none">
                        <input name="booking_kids" value="{{ $kids }}" style="display: none">
                        <div class="row">
                            <h3>User Details</h3>
                            <div class="col-md-6">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="phone" placeholder="Phone number" required>
                            </div> </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="Email: sample@sample.com" required>
                            </div> </div>
                        <div class="row">
                            <h4 style="border-bottom: solid 1px;">
                                <i class="fa fa-cc-paypal"></i> Payment Details
                            </h4>
                            <div class="col-md-12">
                                <input type="radio" name="payment" value="paypal" checked> PayPal<br>
                                <input type="radio" name="payment" value="giftcard"> Gift Card
                            </div>
                        </div>
                        <div class="row">
                            <h3><i class="fa fa-institution"></i> Billing Address</h3>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="address" placeholder="Full Address" required>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="zipcode" placeholder="ZipCode" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"><label>Arrival Date *</label><input class="form-control" type="date" name="arrival_date"  required> </div>
                            <div class="col-md-6"><label>Departure Date"  *</label><input class="form-control" type="date" name="departure_date" required> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Questions / Comments</h4>
                                <textarea class="form-control" name="comments" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4"><input type="submit" class="form-control btn btn-success" value="Submit"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" style="background-color: rgb(234,236,73); padding: 5% 3%">
                <h2 style="text-align: center"> Good Prices </h2>
                <div class="row">
                    <div class="col-md-12">
                        <label>Check In: &nbsp;&nbsp; <span style="color: darkgoldenrod">{{ $checkIn }}</span></label>
                        <br>
                        <label>Check Out: &nbsp;&nbsp; <span style="color: darkgoldenrod">{{ $checkOut }}</span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"><h4>&nbsp;&nbsp;
                            Average Night: ${{ $room_data->price }}</h4></div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-xs-9">
                        <h5>Wednesday, February 21, 2018</h5>
                        <h5>Thursday, February 22, 2018</h5>
                        <h5>Friday, February 23, 2018</h5>
                        <h5>Saturday, February 24, 2018</h5>
                        <h5>Sunday, February 25, 2018</h5>
                        <h5>Monday, February 26, 2018</h5>
                        <h5>Tuesday, February 27, 2018</h5>
                    </div>
                    <div class="col-md-3 col-xs-3" style="text-align: right">
                        <h5>$319.09</h5>
                        <h5>$169.05</h5>
                        <h5>$169.05</h5>
                        <h5>$169.05</h5>
                        <h5>$159.04</h5>
                        <h5>$279.08</h5>
                        <h5>$279.08</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"><h3>Total Price: $1,543.44</h3></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Page Scripts Starts -->
<script src="{{ url('home_template/01/js/jquery.min.js') }}"></script>
<script src="{{ url('home_template/01/js/bootstrap.min.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-navigation.js') }}"></script>
<!-- Page Scripts Ends -->
</body>
</html>
