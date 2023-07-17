<!doctype html>
<html lang="en">
<head>
    <title>Hotel Homepage</title>
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

    <!-- Owl Carousel Stylesheet -->
    <link rel="stylesheet" href="{{ url('home_template/01/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('home_template/01/css/owl.theme.css') }}">

    <!-- Flex Slider Stylesheet -->
    <link rel="stylesheet" href="{{ url('home_template/01/css/flexslider.css') }}" type="text/css" />

    <!--Date-Picker Stylesheet-->
    <link rel="stylesheet" href="{{ url('home_template/01/css/datepicker.css') }}">

    <!-- Magnific Gallery -->
    <link rel="stylesheet" href="{{ url('home_template/01/css/magnific-popup.css') }}">

    <style>
        @media (min-width: 768px) {
            .main-img img{
                height: 240px;
            }
        }

    </style>
</head>


<body id="hotel-homepage">

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


<!--========================= FLEX SLIDER =====================-->
<section class="flexslider-container" id="flexslider-container-3">

    <div class="header-absolute">
        <nav class="navbar navbar-default main-navbar navbar-custom navbar-transparent" id="mynavbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" id="menu-button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{--<div class="header-search hidden-lg">--}}
                        {{--<a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>--}}
                    {{--</div>--}}
                    <a href="{{ url('/') }}" class="navbar-brand"><span><i class="fa fa-hotel"></i>HOTEL</span> RESERVE</a>
                </div><!-- end navbar-header -->

                <div class="collapse navbar-collapse" id="myNavbar1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="{{ url('/client/booking') }}"><span><i class="fa fa-home link-icon"></i></span> Your Booking</a></li>
                        <li class="dropdown"><a href="#"><span><i class="fa fa-group link-icon"></i></span> Group</a></li>
                        <li class="dropdown"><a href="#"><span><i class="fa fa-gift link-icon"></i></span> Gifts</a></li>
                        <li class="dropdown"><a href="#"><span><i class="fa fa-address-card link-icon"></i></span> Help</a></li>
                        <li class="dropdown"><a href="{{ url('/contact_us') }}"><span><i class="fa fa-question-circle link-icon"></i></span> Contact Us</a></li>
                        <li></li>
                    </ul>
                </div><!-- end navbar collapse -->
            </div><!-- end container -->
        </nav><!-- end navbar -->
    </div><!-- end header-absolute -->

    <div class="sidenav-content">
        <div id="mySidenav" class="sidenav" >
            <h2 id="web-name"><span><i class="fa fa-hotel"></i></span>Hotel Reserve</h2>

            <div id="main-menu">
                <div class="closebtn">
                    <button class="btn btn-default" id="closebtn">&times;</button>
                </div><!-- end close-btn -->

                <div class="list-group panel">
                    <a href="{{ url('/client/booking') }}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span> Your Booking</a>
                    <a href="#" class="list-group-item" ><span><i class="fa fa-group link-icon"></i></span> Group</a>
                    <a href="#" class="list-group-item" ><span><i class="fa fa-gift link-icon"></i></span> Gifts</a>
                    <a href="#" class="list-group-item" ><span><i class="fa fa-address-card link-icon"></i></span> Help</a>
                    <a href="{{ url('/contact_us') }}" class="list-group-item" ><span><i class="fa fa-question-circle link-icon"></i></span> Contact Us</a>
                </div><!-- end list-group -->
            </div><!-- end main-menu -->
        </div><!-- end mySidenav -->
    </div><!-- end sidenav-content -->

    <div class="flexslider slider" id="slider-3">
        <ul class="slides">

            <li class="item-1 back-size" style="background:	linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url({{ url('home_template/01/images/hotel-slider-1.jpg') }}) 50% 65%;
	background-size:cover;
	height:100%;">
            </li><!-- end item-1 -->

            <li class="item-2 back-size" style="background:	linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url({{ url('home_template/01/images/hotel-slider-1.jpg') }}) 50% 65%;
	background-size:cover;
	height:100%;">
            </li><!-- end item-2 -->

        </ul>
    </div><!-- end slider -->

    <div class="search-tabs" id="search-tabs-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 no-pd-r">

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#hotels" data-toggle="tab"><span><i class="fa fa-building"></i></span><span class="st-text">Hotels</span></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="hotels" class="tab-pane in active">
                            <form action="{{ url('/search_list') }}" method="post">
                                <input name="_token" value="{{ csrf_token() }}" style="display: none">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="form-group right-icon">
                                                    <label>Where to?</label><i class="fa fa-cloud"></i>
                                                    <input class="form-control" autocomplete="on" list="region" name="region" placeholder="e. g  Region" required>
                                                    <datalist id="region">
                                                        @foreach($front_region_data as $front_region_datum)
                                                        <option value="{{ $front_region_datum->name }}">
                                                        @endforeach
                                                    </datalist>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group left-icon">
                                                    <label>Check In</label>
                                                    <input type="text" class="form-control dpd1" placeholder="Check In" name="check_in">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div><!-- end columns -->
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group left-icon">
                                                    <label>Check Out</label>
                                                    <input type="text" class="form-control dpd2" placeholder="Check Out" name="check_out">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group right-icon">
                                                    <label>Rooms</label>
                                                    <select class="form-control" name="rooms">
                                                        <option selected>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group right-icon">
                                                    <label>Adults</label>
                                                    <select class="form-control" name="adults">
                                                        <option selected>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group right-icon">
                                                    <label>Kids</label>
                                                    <select class="form-control" name="kids">
                                                        <option selected>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div><!-- end columns -->

                                        </div><!-- end row -->
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search-btn">
                                        <button type="submit" class="btn btn-orange">Search</button>
                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </form>
                        </div><!-- end hotels -->
                    </div><!-- end tab-content -->

                </div><!-- end columns -->

                <div class="hidden-xs hidden-sm col-md-6">
                    <div class="welcome-message">
                        <h2>Find Your Perfect Plan</h2>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas,ad duo fugit aeque fabulas,ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper, imeam mnesarchum at, pro an eros perpetua ullamcorper.</p>
                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis.</p>

                        <a href="#" class="btn btn-w-border">Explore More</a>
                    </div>
                </div>

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end search-tabs -->

</section><!-- end flexslider-container -->


<!--======================= BEST FEATURES ======================-->
<section id="best-features" class="banner-padding orange-features">
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


<!--=============== HOTEL OFFERS ===============-->
<section id="hotel-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading white-heading">
                    <h2>Hotels Offers</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->

                <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
                    @foreach($front_hotel_data as $datum)
                        @if($loop->index == 4 || $loop->index == 5) @continue @endif
                        @if($loop->index > 9) @break @endif
                        <div class="item">
                            <div class="main-block hotel-block">
                                <div class="main-img">
                                    <a href="{{ url('/search_list/hotel_detail', ['id'=>$datum->id]) }}" target="_blank">
                                        @php
                                            $hotel_images = explode(";", $datum->images);
                                        @endphp
                                        <img src="{{ asset($hotel_images[0]) }}" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div>
                                <div class="main-info hotel-info">
                                    <div class="arrow">
                                        <a href="{{ url('/search_list/hotel_detail', ['id'=>$datum->id]) }}" target="_blank"><span><i class="fa fa-angle-right"></i></span></a>
                                    </div><!-- end arrow -->

                                    <div class="main-title hotel-title">
                                        <a href="{{ url('/search_list/hotel_detail', ['id'=>$datum->id]) }}" target="_blank">{{ $datum->name }}</a>
                                        <p>From: {{ $datum->city }}</p>
                                    </div><!-- end hotel-title -->
                                </div><!-- end hotel-info -->
                            </div>
                        </div>

                    @endforeach

                </div><!-- end owl-hotel-offers -->

                <div class="view-all text-center">
                    <a href="#" class="btn btn-orange">View All</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hotel-offers -->


<!--=============== LUXURY ROOMS ===============-->
<section id="luxury-rooms" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 luxury-img luxury-room-imgs">
                <div class="row">
                    @foreach($front_room_data as $room_datum)
                        @if($loop->index > 3) @break @endif
                    @php
                        $room_images = explode(";", $room_datum->images);
                    @endphp
                        <div class="col-xs-6 col-sm-6 luxury-room-block">
                            <a href="{{ url($room_images[0]) }}" title="image-7" class="with-caption gallery image-link">
                                <img class="img-responsive" src="{{ asset($room_images[0]) }}" alt="luxury-room-img">
                            </a>
                        </div>
                    @endforeach

                </div>

            </div><!-- end columns -->

            <div class="col-sm-12 col-md-12 col-lg-6 luxury-text luxury-room-text">
                <h2>Luxurious Rooms</h2>
                <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri.</p>
                <a href="#" class="btn btn-black">From $99/Day</a>
                <a href="#" class="btn btn-o-border">View Details</a>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end luxury-rooms -->


<!--=============== TESTIMONIALS ===============-->
<section id="testimonials" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading white-heading">
                    <h2>Testimonials</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->

                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <div class="carousel-inner text-center">

                        <div class="item active">
                            <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                            <div class="rating">
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                            </div><!-- end rating -->

                            <small>Jhon Smith</small>
                        </div><!-- end item -->

                        <div class="item">
                            <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                            <div class="rating">
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star lightgrey"></i></span>
                            </div><!-- end rating -->

                            <small>Jhon Smith</small>
                        </div><!-- end item -->

                        <div class="item">
                            <blockquote>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper.</blockquote>
                            <div class="rating">
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star orange"></i></span>
                                <span><i class="fa fa-star lightgrey"></i></span>
                            </div><!-- end rating -->

                            <small>Jhon Smith</small>
                        </div><!-- end item -->

                    </div><!-- end carousel-inner -->

                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img src="{{ url('uploads/users/client-1.jpg') }}" class="img-responsive"  alt="client-img">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img src="{{ url('uploads/users/client-2.jpg') }}" class="img-responsive"  alt="client-img">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img src="{{ url('uploads/users/client-3.jpg') }}" class="img-responsive"  alt="client-img">
                        </li>
                    </ol>

                </div><!-- end quote-carousel -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end testimonials -->


<!--============== HIGHLIGHTS =============-->
<section id="highlights" class="highlights-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div id="boxes">

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="highlight-box">
                                <div class="h-icon">
                                    <span><i class="fa fa-plane"></i></span>
                                </div><!-- end h-icon -->

                                <div class="h-text">
                                    <span class="numbers">2496</span>
                                    <p>Outstanding Tours</p>
                                </div><!-- end h-text -->
                            </div><!-- end highlight-box -->
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="highlight-box">
                                <div class="h-icon">
                                    <span><i class="fa fa-ship"></i></span>
                                </div><!-- end h-icon -->

                                <div class="h-text cruise">
                                    <span class="numbers">1906</span>
                                    <p>Worldwide Cruise</p>
                                </div><!-- end h-text -->
                            </div><!-- end highlight-box -->
                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="highlight-box">
                                <div class="h-icon">
                                    <span><i class="fa fa-taxi"></i></span>
                                </div><!-- end h-icon -->

                                <div class="h-text taxi">
                                    <span class="numbers">2033</span>
                                    <p>Luxury Car Booking</p>
                                </div><!-- end h-text -->
                            </div><!-- end highlight-box -->
                        </div><!-- end columns -->

                    </div><!-- end boxes -->
                </div><!-- end row -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end highlights -->

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
<section id="footer" class="ftr-heading-w ftr-heading-mgn-2">

    <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-grey">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 footer-widget ftr-about ftr-our-company">
                    <h3 class="footer-heading">OUR COMPANY</h3>
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

                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 footer-widget ftr-map">
                    <div class="map">
                        <iframe src=		"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509729.487836256!2d-123.77686152799836!3d37.1864783963941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia!5e0!3m2!1sen!2s!4v1490695907554" allowfullscreen></iframe>
                    </div>
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
<script src="{{ url('home_template/01/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('home_template/01/js/bootstrap.min.js') }}"></script>
<script src="{{ url('home_template/01/js/jquery.flexslider.js') }}"></script>
<script src="{{ url('home_template/01/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('home_template/01/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-navigation.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-flex.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-owl.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-date-picker.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-gallery.js') }}"></script>
<!-- Page Scripts Ends -->

</body>
</html>