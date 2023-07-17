<!doctype html>
<html lang="en">
<head>
    <title>Hotel Rooms</title>
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

    <!-- Slick Stylesheet -->
    <link rel="stylesheet" id="cpswitch" href="{{ url('home_template/01/css/slick.css') }}">
    <link rel="stylesheet" href="{{ url('home_template/01/css/slick-theme.css') }}">

    <style>
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
                <li class="dropdown"><a href="{{ url('/client/booking') }}"><span><i class="fa fa-home link-icon"></i></span> Your Booking</a></li>
                <li class="dropdown"><a href="#"><span><i class="fa fa-group link-icon"></i></span> Group</a></li>
                <li class="dropdown"><a href="#"><span><i class="fa fa-gift link-icon"></i></span> Gifts</a></li>
                <li class="dropdown"><a href="#"><span><i class="fa fa-address-card link-icon"></i></span> Help</a></li>
                <li class="dropdown"><a href="{{ url('/contact_us') }}"><span><i class="fa fa-question-circle link-icon"></i></span> Contact Us</a></li>
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
<!--================ PAGE-COVER ===============-->
<section class="page-cover" id="cover-hotel-detail">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">{{ $hotel_data->name }}</h1>
                <ul class="breadcrumb">
                    <li>Check In - Check Out</li>
                    <li>Rooms</li>
                    <li>Adults</li>
                    <li>Kids</li>
                </ul>
                <ul class="breadcrumb">
                    <li>{{$checkIn}} - {{$checkOut}}</li>
                    <li>{{$rooms}}</li>
                    <li>{{$adults}}</li>
                    <li>{{$kids}}</li>
                </ul>
                <br>
                <ul><a class="btn btn-success" href="#restaurant">Book Now</a></ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->

<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="hotel-details" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                    <div class="detail-slider">
                        <div class="feature-slider">
                            @foreach($hotel_images as $hotel_image)
                                <div><img src="{{ asset($hotel_image) }}" class="img-responsive" alt="feature-img"/></div>
                            @endforeach
                        </div><!-- end feature-slider -->

                        <div class="feature-slider-nav" id="detail-tabs-link">
                            @foreach($hotel_images as $hotel_image)
                                <div><img src="{{ asset($hotel_image) }}" class="img-responsive" alt="feature-thumb"/></div>
                            @endforeach
                        </div><!-- end feature-slider-nav -->
                    </div>  <!-- end detail-slider -->

                    <div class="detail-tabs">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#hotel-overview" data-toggle="tab">Hotel Overview</a></li>
                            <li><a href="#pick-up" data-toggle="tab">Hotel information</a></li>
                            <li><a href="#luxury-gym" data-toggle="tab">Room information</a></li>
                            <li><a href="#sports-club" data-toggle="tab">Features</a></li>
                        </ul>

                        <div class="tab-content">

                            <div id="hotel-overview" class="tab-pane in active">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="{{ asset($hotel_images[0]) }}" class="img-responsive" alt="flight-detail-img" />
                                        <p style="text-align: center">{{ $hotel_data->name }}</p>
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">
                                        <h3>Hotel Overview</h3>
                                        <p>{{ $hotel_data->description }}</p>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                                <br>
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <h4 style="color: #21a5e6">Main amenities</h4>
                                        @foreach($affects as $affect)
                                            @if($affect->category == "amenities")
                                                <li style="list-style-type: disc">{{ $affect->content }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <h4 style="color: #21a5e6">For families</h4>
                                        @foreach($affects as $affect)
                                            @if($affect->category == "families")
                                                <li style="list-style-type: disc">{{ $affect->content }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <h4 style="color: #21a5e6">What's around</h4>
                                        @foreach($affects as $affect)
                                            @if($affect->category == "around")
                                                <li style="list-style-type: disc">{{ $affect->content }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- end hotel-overview -->

                            <div id="pick-up" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="{{ asset($hotel_images[0]) }}" class="img-responsive" alt="flight-detail-img" />
                                        <p style="text-align: center">{{ $hotel_data->name }}</p>
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">
                                        <h3>Hotel information</h3>
                                        @foreach($services as $service)
                                            @if($service->category == "In the hotel")
                                                <li style="list-style-type: disc">
                                                    {{ $service->content }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end pick-up -->

                            <div id="luxury-gym" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="{{ asset($hotel_images[0]) }}" class="img-responsive" alt="flight-detail-img" />
                                        <p style="text-align: center">{{ $hotel_data->name }}</p>
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">
                                        <h3>Room Information</h3>
                                        @foreach($services as $service)
                                            @if($service->category == "In the hotel")
                                                <li style="list-style-type: disc">
                                                    {{ $service->content }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end luxury-gym -->

                            <div id="sports-club" class="tab-pane">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 tab-img">
                                        <img src="{{ asset($hotel_images[0]) }}" class="img-responsive" alt="flight-detail-img" />
                                        <p style="text-align: center">{{ $hotel_data->name }}</p>
                                    </div><!-- end columns -->

                                    <div class="col-sm-8 col-md-8 tab-text">
                                        <h3>Features</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>On Site</h4>
                                                @foreach($features as $feature)
                                                    @if($feature->category == "On Site")
                                                        <li>
                                                            <span style="color: red">{{ $feature->title }}</span>
                                                             / {{ $feature->content }}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="col-md-6">
                                                <h4>Nearby</h4>
                                                @foreach($features as $feature)
                                                    @if($feature->category == "Nearby")
                                                        <li>
                                                            <span style="color: red">{{ $feature->title }}</span>
                                                            / {{ $feature->content }}
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end sports-club -->

                        </div><!-- end tab-content -->
                    </div><!-- end detail-tabs -->
                    <div class="row">
                        <h2 style="color: blue; text-align: center;">Room Type</h2>
                        <hr style="border-style: solid; border-width: 3px;">
                        <div class="col-md-12">
                            <div id="restaurant">
                                @foreach($room_data as $room_datum)
                                    @php
                                        $room_images_string = $room_datum->images;
                                        $room_images = explode(";", $room_images_string);
                                    @endphp

                                    <div class="row" style="padding-bottom: 5%;">
                                        <div class="col-sm-4 col-md-4 tab-img">
                                            <img src="{{ asset($room_images[0]) }}" class="img-responsive" alt="flight-detail-img" />
                                        </div><!-- end columns -->

                                        <div class="col-sm-8 col-md-8 tab-text">
                                            <h3 style="text-align: center">{{ $room_datum->name }}</h3>
                                            <p>{{ $room_datum->description }}</p>
                                            <div style="text-align: center">
                                                <button class="btn btn-info" data-toggle="modal" data-target="#room_modal_{{$loop->index}}">More Detail</button>
                                                <button class="btn btn-danger" onclick="booking_click({{ $room_datum->id }})">Book Now</button>
                                            </div>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                    <!-- Modal Fade for Room Information -->
                                    <div class="modal fade" id="room_modal_{{$loop->index}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">{{ $room_datum->name }}</h4>
                                                </div>
                                                <div class="modal-body room-modal">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <!--begin carousel-->
                                                            <div id="myGallery_{{$loop->index}}" class="carousel slide" data-interval="false">
                                                                <div class="carousel-inner">
                                                                    @foreach($room_images as $image)
                                                                        <div class="item @if($loop->index == 0) active @endif">
                                                                            <img src="{{ asset($image) }}" alt="item0">
                                                                        </div>
                                                                @endforeach
                                                                <!--end carousel-inner--></div>
                                                                <!--Begin Previous and Next buttons-->
                                                                <a class="left carousel-control" href="#myGallery_{{$loop->index}}" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a>
                                                                <a class="right carousel-control" href="#myGallery_{{$loop->index}}" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
                                                                <!--end carousel--></div>
                                                        </div>
                                                        <div class="col-md-5">{{ $room_datum->description }}</div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <h4 style="padding-left: 10%; color: darkgreen;">Room overview</h4>
                                                        <div class="col-md-4">
                                                            <h5 style="color: #21a5e6">Main amenities</h5>
                                                            @foreach($room_affects[$loop->index] as $room_affect)
                                                                @if($room_affect->category == "amenities")
                                                                    <li style="list-style-type: disc">{{ $room_affect->content }}</li>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h5 style="color: #21a5e6">For families</h5>
                                                            @foreach($room_affects[$loop->index] as $room_affect)
                                                                @if($room_affect->category == "families")
                                                                    <li style="list-style-type: disc">{{ $room_affect->content }}</li>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h5 style="color: #21a5e6">What's around</h5>
                                                            @foreach($room_affects[$loop->index] as $room_affect)
                                                                @if($room_affect->category == "families")
                                                                    <li style="list-style-type: disc">{{ $room_affect->content }}</li>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <h4 style="padding-left: 10%; color: darkgreen;">Services</h4>
                                                        <div class="col-md-12">
                                                            @foreach($room_services[$loop->index] as $room_service)
                                                                @if($room_service->category == "In the hotel")
                                                                    <li style="list-style-type: disc">
                                                                        {{ $room_service->content }}
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div><!-- end restaurant -->
                        </div>
                    </div>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">

                    <div class="side-bar-block">
                        <h3 class="selected-price" style="text-align: center; color: #cc3e51">From $125 </h3>

                    </div><!-- end side-bar-block -->
                    <div class="side-bar-block booking-form-block">
                        <h2 class="selected-price">Very Good <span>( stars )</span></h2>
                    </div><!-- end side-bar-block -->

                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="side-bar-block support-block" style="background: green; color: black">
                                <h3>Need Help</h3>
                                <h4 style="color: rgba(0,0,0,0.77)">You can contact to here for learn more.</h4>
                                <div class="support-contact">
                                    <span><i class="fa fa-phone"></i></span>
                                    <p style="color: black">+1 123 1234567</p>
                                </div><!-- end support-contact -->
                            </div><!-- end side-bar-block -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end hotel-details -->
</section><!-- end innerpage-wrapper -->

{{--Form Submit for Booking--}}
<form method="post" action="{{ url('/booking') }}" style="display: none">
    <input name="_token" value="{{ csrf_token() }}" style="display: none">
    <input name="booking_room_id" id="booking_room_id">
    <input name="booking_checkIn" value="{{ $checkIn }}">
    <input name="booking_checkOut" value="{{ $checkOut }}">
    <input name="booking_rooms" value="{{ $rooms }}">
    <input name="booking_adults" value="{{ $adults }}">
    <input name="booking_kids" value="{{ $kids }}">
    <input type="submit" name="booking-submit" id="btn_booking_submit">
</form>

<!--======================= BEST FEATURES =====================-->
<section id="best-features" class="banner-padding black-features">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-dollar"></i></span>
                    <h3>Best Price Guarantee</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-lock"></i></span>
                    <h3>Safe and Secure</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-thumbs-up"></i></span>
                    <h3>Best Travel Agents</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->

            <div class="col-sm-6 col-md-3">
                <div class="b-feature-block">
                    <span><i class="fa fa-bars"></i></span>
                    <h3>Travel Guidelines</h3>
                    <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>
                </div><!-- end b-feature-block -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end best-features -->


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


<!-- Page Scripts Starts -->
<script src="{{ url('home_template/01/js/jquery.min.js') }}"></script>
<script src="{{ url('home_template/01/js/bootstrap.min.js') }}"></script>
<script src="{{ url('home_template/01/js/slick.min.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-navigation.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-slick.js') }}"></script>

<script>
function booking_click(id){
    @if(Auth::check())
    $("#booking_room_id").val(id);
    $("#btn_booking_submit").click();
    @else
    window.alert("You have to login for booking");
    @endif

}
</script>
<!-- Page Scripts Ends -->
</body>
</html>
