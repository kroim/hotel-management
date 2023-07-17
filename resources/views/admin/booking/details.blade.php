<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" href="{{ url('home_template/01/images/hotel-icon-01.jpg') }}" type="image/x-icon">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('home_template/02/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('home_template/02/css/colors/main.css') }}" id="colors">

    <style>
        .dashboard-content li{
            list-style-type: circle;
        }
        .dashboard-content span{
            font-weight: 500;
            color: black;
        }
    </style>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fixed fullwidth dashboard">

        <!-- Header -->
        <div id="header" class="not-sticky">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('home_template/01/images/logo.png') }}" alt=""></a>
                        <a href="{{ url('/') }}" class="dashboard-logo"><img src="{{ asset('home_template/01/images/logo.png') }}" alt=""></a>
                    </div>

                    <!-- Mobile Navigation -->
                    <div class="menu-responsive">
                        <i class="fa fa-reorder menu-trigger"></i>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">

                            <li><a href="{{ url('/client/booking') }}"><i class="fa fa-home"></i> Your Booking</a></li>

                            <li><a href="#"><i class="fa fa-group"></i> Group</a></li>

                            <li><a href="#"><i class="fa fa-gift"></i> Gift</a></li>

                            <li><a href="#"><i class="fa fa-question"></i> Help</a></li>

                        </ul>
                    </nav>
                {{--<div class="clearfix"></div>--}}
                <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->
                <div class="right-side">
                    <!-- Header Widget -->
                    <div class="header-widget">

                        <!-- User Menu -->
                        <div class="user-menu">
                            <div class="user-name">
                                {{ Auth::user()->name }}
                            </div>
                            <ul>
                                <li><a href="#logout" onclick="$('#logout').submit();"><i class="sl sl-icon-power"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Dashboard -->
    <div id="dashboard">

        <!-- Navigation
        ================================================== -->

        <!-- Responsive Navigation Trigger -->
        <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

        <div class="dashboard-nav">
            <div class="dashboard-nav-inner">

                <ul data-submenu-title="Main">
                    <li><a href="{{ url('admin/home') }}"><i class="sl sl-icon-settings"></i> @lang('global.app_dashboard')</a></li>
                    <li><a><i class="sl sl-icon-user-follow"></i> @lang('global.user-management.title')</a>
                        <ul>
                            <li><a href="{{ route('admin.permissions.index') }}"><i class="sl sl-icon-briefcase"></i> @lang('global.permissions.title')</a></li>
                            <li><a href="{{ route('admin.roles.index') }}"><i class="sl sl-icon-briefcase"></i> @lang('global.roles.title')</a></li>
                            <li><a href="{{ route('admin.users.index') }}"><i class="sl sl-icon-user"></i> @lang('global.users.title')</a></li>
                        </ul>
                    </li>
                </ul>

                <ul data-submenu-title="Listings">
                    <li><a href="{{ route('administrator.region.index') }}"><i class="fa fa-street-view"></i> @lang('global.backend.regions')</a></li>
                    <li><a><i class="fa fa-building"></i> @lang('global.backend.hotel')</a>
                        <ul>
                            <li><a href="{{ route('administrator.hotel.index') }}"><i class="fa fa-hourglass"></i> @lang('global.backend.hotel_lists')</a></li>
                            <li><a href="{{ route('administrator.hotel.add') }}"><i class="fa fa-plus-square"></i> @lang('global.backend.add_hotel')</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-building-o"></i> @lang('global.backend.room')</a>
                        <ul>
                            <li><a href="{{ route('administrator.room.index') }}"><i class="fa fa-hourglass-2"></i> @lang('global.backend.room_lists')</a></li>
                            <li><a href="{{ route('administrator.room.add') }}"><i class="fa fa-plus-circle"></i> @lang('global.backend.add_room')</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="{{ route('administrator.booking.index') }}"><i class="fa fa-bookmark"></i> @lang('global.backend.booking')</a></li>
                </ul>

                <ul data-submenu-title="Account">
                    <li><a href="{{ route('auth.change_password') }}"><i class="fa fa-key"></i> Change password</a></li>
                    <li><a href="#logout" onclick="$('#logout').submit();"><i class="sl sl-icon-power"></i> Logout</a></li>
                </ul>

            </div>
        </div>
        <!-- Navigation / End -->


        <!-- Content
        ================================================== -->
        <div class="dashboard-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>User Information</h2>
                            <li><span>Name: </span>{{ $booking_data->f_name }} {{ $booking_data->l_name }}</li>
                            <li><span>Email: </span>{{ $booking_data->email }}</li>
                            <li><span>Phone: </span>{{ $booking_data->phone }}</li>
                            <li><span>Address: </span>{{ $booking_data->address }}</li>
                            <li><span>ZipCode: </span>{{ $booking_data->zipcode }}</li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Booking Information</h2>
                            <li><span>Booking Date: </span>{{ $booking_data->c_date }}</li>
                            <li><span>Arrival Date: </span>{{ $booking_data->a_date }}</li>
                            <li><span>Departure Date: </span>{{ $booking_data->d_date }}</li>
                            <li><span>Rooms: </span>{{ $booking_data->b_rooms }}</li>
                            <li><span>Adults: </span>{{ $booking_data->b_adults }}</li>
                            <li><span>Children: </span>{{ $booking_data->b_kids }}</li>
                            <li><span>Comments: </span>{{ $booking_data->comments }}</li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Room Information</h2>
                            <li><span>Hotel Id: </span>{{ $room_data->hotel_id }}</li>
                            <li><span>Room Name: </span>{{ $room_data->name }}</li>
                            <li><span>Room Description: </span>{{ $room_data->description }}</li>
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="copyrights">© 2018 Hotel Management. All Rights Reserved.</div>
                </div>
            </div>
            <!-- Copyrights -->

        </div>
        <!-- Content / End -->
    </div>
    <!-- Dashboard / End -->


</div>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{ url('home_template/02/scripts/jquery-2.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ url('home_template/02/scripts/jpanelmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ url('home_template/02/scripts/chosen.min.js') }}"></script>
<script type="text/javascript" src="{{ url('home_template/02/scripts/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ url('home_template/02/scripts/rangeslider.min.js') }}"></script>
<script type="text/javascript" src="{{ url('home_template/02/scripts/magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ url('home_template/02/scripts/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ url('home_template/02/scripts/counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ url('home_template/02/scripts/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ url('home_template/02/scripts/tooltips.min.js') }}"></script>
<script type="text/javascript" src="{{ url('home_template/02/scripts/custom.js') }}"></script>


</body>
</html>