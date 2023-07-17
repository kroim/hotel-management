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

                            <li><a href="#"><i class="fa fa-home"></i> Home Details</a></li>

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
                    <li class="active" ><a href="{{ url('admin/home') }}"><i class="sl sl-icon-settings"></i> @lang('global.app_dashboard')</a></li>
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
                    <li><a href="{{ route('administrator.booking.index') }}"><i class="fa fa-bookmark"></i> @lang('global.backend.booking')</a></li>
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

            <!-- Titlebar -->
            <div id="titlebar">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Dashboard</h2> <span>User Panel Dashboard</span>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Dashboard</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Notice -->
            <div class="row">
                <div class="col-md-12">
                    <div class="notification success closeable margin-bottom-30">
                        <p>Your listing <strong>Hotel Govendor</strong> has been approved!</p>
                        <a class="close" href="#"></a>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="row">

                <!-- Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-stat color-1">
                        <div class="dashboard-stat-content"><h4>6</h4> <span>Active Listings</span></div>
                        <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-stat color-2">
                        <div class="dashboard-stat-content"><h4>726</h4> <span>Total Views</span></div>
                        <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
                    </div>
                </div>


                <!-- Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-stat color-3">
                        <div class="dashboard-stat-content"><h4>95</h4> <span>Total Reviews</span></div>
                        <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-stat color-4">
                        <div class="dashboard-stat-content"><h4>126</h4> <span>Times Bookmarked</span></div>
                        <div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
                    </div>
                </div>
            </div>


            <div class="row">

                <!-- Recent Activity -->
                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-list-box with-icons margin-top-20">
                        <h4>Recent Activities</h4>
                        <ul>
                            <li>
                                <i class="list-box-icon sl sl-icon-layers"></i> Your listing <strong><a href="#">Hotel Govendor</a></strong> has been approved!
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review <div class="numerical-rating" data-rating="5.0"></div> on <strong><a href="#">Burger House</a></strong>
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger House</a></strong> listing!
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review <div class="numerical-rating" data-rating="3.0"></div> on <strong><a href="#">Airport</a></strong>
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger House</a></strong> listing!
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-star"></i> John Doe left a review <div class="numerical-rating" data-rating="4.0"></div> on <strong><a href="#">Burger House</a></strong>
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-star"></i> Jack Perry left a review <div class="numerical-rating" data-rating="2.5"></div> on <strong><a href="#">Tom's Restaurant</a></strong>
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Invoices -->
                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-list-box invoices with-icons margin-top-20">
                        <h4>Invoices</h4>
                        <ul>

                            <li><i class="list-box-icon sl sl-icon-doc"></i>
                                <strong>Professional Plan</strong>
                                <ul>
                                    <li class="unpaid">Unpaid</li>
                                    <li>Order: #00124</li>
                                    <li>Date: 20/07/2017</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="dashboard-invoice.html" class="button gray">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="list-box-icon sl sl-icon-doc"></i>
                                <strong>Extended Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #00108</li>
                                    <li>Date: 14/07/2017</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="dashboard-invoice.html" class="button gray">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="list-box-icon sl sl-icon-doc"></i>
                                <strong>Extended Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #00097</li>
                                    <li>Date: 10/07/2017</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="dashboard-invoice.html" class="button gray">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="list-box-icon sl sl-icon-doc"></i>
                                <strong>Basic Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #00091</li>
                                    <li>Date: 30/06/2017</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="dashboard-invoice.html" class="button gray">View Invoice</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>


                <!-- Copyrights -->
                <div class="col-md-12">
                    <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
                </div>
            </div>

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