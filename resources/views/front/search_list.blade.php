<!doctype html>
<html lang="en">
<head>
    <title>Hotel Listing</title>
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

    <!--Jquery UI Stylesheet-->
    <link rel="stylesheet" href="{{ url('home_template/01/css/jquery-ui.min.css') }}">


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
        .datepicker{
            z-index: 9999 !important;
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
                <a href="{{ url('/client/booking') }}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span> Your Booking</a>
                <a href="#" class="list-group-item" ><span><i class="fa fa-group link-icon"></i></span> Group</a>
                <a href="#" class="list-group-item" ><span><i class="fa fa-gift link-icon"></i></span> Gifts</a>
                <a href="#" class="list-group-item" ><span><i class="fa fa-address-card link-icon"></i></span> Help</a>
                <a href="{{ url('/contact_us') }}" class="list-group-item" ><span><i class="fa fa-question-circle link-icon"></i></span>Contact Us</a>
            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->


<!--=================== PAGE-COVER =================-->
<section class="page-cover" id="cover-hotel-grid-list">
    <div class="container">
        <div class="row">
            <form action="{{ url('/search_list') }}" method="post">
                <input name="_token" value="{{ csrf_token() }}" style="display: none">
            <div class="col-lg-3 right-icon">
                <label>Destination</label>
                <input class="form-control" autocomplete="on" list="region" name="region"
                       placeholder="e. g  Region" value="{{ $search_region }}" required>
                <datalist id="region">
                    @foreach($front_region_data as $front_region_datum)
                        <option value="{{ $front_region_datum->name }}">
                    @endforeach
                </datalist>
            </div>
            <div class="col-lg-2 left-icon">
                <i class="fa fa-calendar"></i>
                <label>Check In</label>
                <input type="text" class="form-control dpd1" placeholder="Check In" name="check_in"
                       value="@if($search_checkIn != null) {{ $search_checkIn }} @endif">
            </div>
            <div class="col-lg-2 left-icon">
                <i class="fa fa-calendar"></i>
                <label>Check Out</label>
                <input type="text" class="form-control dpd1" placeholder="Check Out" name="check_out"
                       value="@if($search_checkOut != null) {{ $search_checkOut }} @endif">
            </div>
            <div class="col-lg-1 left-icon">
                <label>Rooms</label>
                <select class="form-control" name="rooms">
                    @for($i = 1; $i < 5; $i++)
                        <option @if(intval($search_rooms) == $i) selected @endif>{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="col-lg-1 left-icon">
                <label>Adults</label>
                <select class="form-control" name="adults">
                    @for($i = 1; $i < 5; $i++)
                        <option @if(intval($search_adults) == $i) selected @endif>{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="col-lg-1 left-icon">
                <label>Kids</label>
                <select class="form-control" name="kids">
                    @for($i = 1; $i < 5; $i++)
                        <option @if(intval($search_kids) == $i) selected @endif>{{$i}}</option>
                    @endfor
                </select>
            </div>
            <div class="col-lg-2">
                <label>Search</label>
                <input type="submit" class="form-control btn btn-success" value="Search">
            </div>
            </form>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<!--===== INNERPAGE-WRAPPER ====-->
<section class="innerpage-wrapper">
    <div id="hotel-listing" class="innerpage-section-padding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                    <div class="side-bar-block filter-block" style="background: #25a7da">
                        <h3>Sort By Filter</h3>
                        <p>Find your dream flights today</p>

                        <div class="panels-group">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a href="#panel-1" data-toggle="collapse" >Popular filters <span><i class="fa fa-angle-down"></i></span></a>
                                </div><!-- end panel-heading -->

                                <div id="panel-1" class="panel-collapse collapse">
                                    <div class="panel-body text-left">
                                        <ul class="list-unstyled">
                                            <li class="custom-check"><input type="checkbox" id="check01" name="checkbox"/>
                                                <label for="check01"><span><i class="fa fa-check"></i></span>Breakfast available</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check02" name="checkbox"/>
                                                <label for="check02"><span><i class="fa fa-check"></i></span>Garden</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check03" name="checkbox"/>
                                                <label for="check03"><span><i class="fa fa-check"></i></span>Outdoor pool</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check04" name="checkbox"/>
                                                <label for="check04"><span><i class="fa fa-check"></i></span>Smoking allowed</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check05" name="checkbox"/>
                                                <label for="check05"><span><i class="fa fa-check"></i></span>Free toiletries</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check06" name="checkbox"/>
                                                <label for="check06"><span><i class="fa fa-check"></i></span>Valet parking</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check07" name="checkbox"/>
                                                <label for="check07"><span><i class="fa fa-check"></i></span>Fitness center</label></li>
                                        </ul>
                                    </div><!-- end panel-body -->
                                </div><!-- end panel-collapse -->
                            </div><!-- end panel-default -->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a href="#panel-2" data-toggle="collapse" >Services<span><i class="fa fa-angle-down"></i></span></a>
                                </div><!-- end panel-heading -->

                                <div id="panel-2" class="panel-collapse collapse">
                                    <div class="panel-body text-left">
                                        <ul class="list-unstyled">
                                            <li class="custom-check"><input type="checkbox" id="check08" name="checkbox"/>
                                                <label for="check08"><span><i class="fa fa-check"></i></span>Golfing nearby</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check09" name="checkbox"/>
                                                <label for="check09"><span><i class="fa fa-check"></i></span>Bathroom</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check10" name="checkbox"/>
                                                <label for="check10"><span><i class="fa fa-check"></i></span>Shower</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check11" name="checkbox"/>
                                                <label for="check11"><span><i class="fa fa-check"></i></span>Parking</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check12" name="checkbox"/>
                                                <label for="check12"><span><i class="fa fa-check"></i></span>Coffee/tea maker</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check13" name="checkbox"/>
                                                <label for="check13"><span><i class="fa fa-check"></i></span>Wi-fi</label></li>
                                        </ul>
                                    </div><!-- end panel-body -->
                                </div><!-- end panel-collapse -->
                            </div><!-- end panel-default -->

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a href="#panel-3" data-toggle="collapse" >Rating <span><i class="fa fa-angle-down"></i></span></a>
                                </div><!-- end panel-heading -->

                                <div id="panel-3" class="panel-collapse collapse">
                                    <div class="panel-body text-left">
                                        <ul class="list-unstyled">
                                            <li class="custom-check"><input type="checkbox" id="check14" name="checkbox"/>
                                                <label for="check14"><span><i class="fa fa-check"></i></span>1 Star</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check15" name="checkbox"/>
                                                <label for="check15"><span><i class="fa fa-check"></i></span>2 Star</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check16" name="checkbox"/>
                                                <label for="check16"><span><i class="fa fa-check"></i></span>3 Star</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check17" name="checkbox"/>
                                                <label for="check17"><span><i class="fa fa-check"></i></span>4 Star</label></li>
                                            <li class="custom-check"><input type="checkbox" id="check18" name="checkbox"/>
                                                <label for="check18"><span><i class="fa fa-check"></i></span>5 Star</label></li>
                                        </ul>
                                    </div><!-- end panel-body -->
                                </div><!-- end panel-collapse -->
                            </div><!-- end panel-default -->

                        </div><!-- end panel-group -->

                        <div class="price-slider">
                            <p><input type="text" id="amount" readonly></p>
                            <div id="slider-range"></div>
                        </div><!-- end price-slider -->
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

                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                    @foreach($search_data as $search_datum)
                        <div class="list-block main-block h-list-block">

                            <div class="list-content">
                                <div class="main-img list-img h-list-img">
                                    <a href="{{ url('/search_list/hotel_detail', ['id'=>$search_datum->id]) }}" target="_blank">
                                        <img src="{{ $hotel_main_images[$loop->index] }}" class="img-responsive" alt="hotel-img" />
                                    </a>
                                    <div class="main-mask">
                                        <ul class="list-unstyled list-inline offer-price-1">
                                            <li class="price">$568.00<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                            <li class="rating">
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star orange"></i></span>
                                                <span><i class="fa fa-star lightgrey"></i></span>
                                            </li>
                                        </ul>
                                    </div><!-- end main-mask -->
                                </div><!-- end h-list-img -->

                                <div class="list-info h-list-info">
                                    <h3 class="block-title">
                                        <a href="{{ url('/search_list/hotel_detail', ['id'=>$search_datum->id]) }}" target="_blank">
                                            {{$search_datum->name}}</a>
                                    </h3>
                                    <h5 class="">From: {{ $search_datum->address }}</h5>
                                    <p> {{ $search_datum->description }} </p>
                                    @if($search_checkIn != null && $search_checkOut != null)
                                        <button class="btn btn-success btn-lg" onclick="choose_room({{$loop->index}})">
                                            Choose Room</button>
                                    @else
                                        <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal_{{$loop->index}}">
                                            View More</button>
                                    @endif
                                </div><!-- end h-list-info -->
                            </div><!-- end list-content -->
                        </div><!-- end h-list-block -->
                        <!-- Modal -->
                        <div class="modal fade" id="myModal_{{$loop->index}}" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">{{ $search_datum->name }}</h4>
                                    </div>
                                    <form action="{{ url('/search_list/hotel_detail') }}" method="post">
                                        <input name="_token" value="{{ csrf_token() }}" style="display: none">
                                    <div class="modal-body">
                                        <p>Enter your stay dates</p>
                                        <input id="m_hotel_{{$loop->index}}" name="hotel_id" value="{{ $search_datum->id }}" style="display: none">
                                        <div class="row">
                                            <div class="col-md-6 modal-datepicker">
                                                <i class="fa fa-calendar"></i> <label> Check In</label>
                                                <input type="text" class="form-control dpd1" name="check_in"
                                                       value="@if($search_checkIn != null) {{ $search_checkIn }} @endif" required>
                                            </div>
                                            <div class="col-md-6 modal-datepicker">
                                                <i class="fa fa-calendar"></i> <label> Check Out</label>
                                                <input type="text" class="form-control dpd1" name="check_out"
                                                       value="@if($search_checkOut != null) {{ $search_checkOut }} @endif" required>
                                            </div>
                                        </div>
                                        {{-- datepicker for next datepicker --}}
                                        <input type="text" class="dpd2" style="display: none">
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Rooms</label>
                                                <select class="form-control" name="rooms">
                                                    @for($i = 1; $i < 5; $i++)
                                                        <option @if(intval($search_rooms) == $i) selected @endif>{{$i}}</option>
                                                        @endfor
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Adults</label>
                                                <select class="form-control" name="adults">
                                                    @for($i = 1; $i < 5; $i++)
                                                        <option @if(intval($search_adults) == $i) selected @endif>{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Childrens</label>
                                                <select class="form-control" name="kids">
                                                    @for($i = 1; $i < 5; $i++)
                                                        <option @if(intval($search_kids) == $i) selected @endif>{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success" id="m_sub_{{$loop->index}}" value="Continue">
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                    </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    @endforeach

                    {{--<div class="pages">--}}
                        {{--<ol class="pagination">--}}
                            {{--<li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>--}}
                            {{--<li class="active"><a href="#">1</a></li>--}}
                            {{--<li><a href="#">2</a></li>--}}
                            {{--<li><a href="#">3</a></li>--}}
                            {{--<li><a href="#">4</a></li>--}}
                            {{--<li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>--}}
                        {{--</ol>--}}
                    {{--</div><!-- end pages -->--}}
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end hotel-listing -->
</section><!-- end innerpage-wrapper -->


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
<script src="{{ url('home_template/01/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('home_template/01/js/jquery-ui.min.js') }}"></script>
<script src="{{ url('home_template/01/js/bootstrap.min.js') }}"></script>
<script src="{{ url('home_template/01/js/jquery.flexslider.js') }}"></script>
<script src="{{ url('home_template/01/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('home_template/01/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-flex.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-navigation.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-date-picker.js') }}"></script>
<script src="{{ url('home_template/01/js/custom-price-slider.js') }}"></script>

<script>
    function choose_room(id){
        $("#m_sub_" + id).click();
    }
</script>

<!-- Page Scripts Ends -->
</body>
</html>
