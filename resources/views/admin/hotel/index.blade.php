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
    <link rel="stylesheet" href="{{ asset('home_template/02/custom/dataTables.min.css') }}">
    <style>
        select{
            display: inline-block;
            padding:0 10px;
            height: auto;
            line-height: 1;
            width: auto;
        }
        th, td{
            text-align: center;
        }
        td input[type="button"]{
            line-height: 20px;
            border-radius: 5px;
            padding: 5px 10px;
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
                    <li class="active"><a><i class="fa fa-building"></i> @lang('global.backend.hotel')</a>
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

        <!-- Content
        ================================================== -->
        <div class="dashboard-content">

            <!-- Titlebar -->
            <div id="titlebar">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Hotel Lists</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>Hotel Lists</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
            <div class="panel-body table-responsive">
                <table id="hotelListTable" class="display table" width="100%">
                    <thead>
                    <tr>
                        <th width="10%"><input type="checkbox" id="select-all" onchange="checkAll()" /></th>
                        <th width="10%">Id</th>
                        <th width="50%">Name</th>
                        <th width="30%"></th>
                    </tr>
                    </thead>
                    <tbody id="hotel_list_tbody">
                    @foreach($hotel_data as $hotel_item)
                        <tr id="hotel_item_tr_{{ $hotel_item->id }}">
                            <td><input type="checkbox" id="hotel_item_check_{{ $hotel_item->id }}"></td>
                            <td>{{ $hotel_item->id }}</td>
                            <td>{{ $hotel_item->name }}</td>
                            <td>
                                <form action="{{ url('/administrator/hotel/edit') }}" method="post" style="display: none">
                                    <input name="_token" value="{{ csrf_token() }}">
                                    <input type="text" name="hotel_id" value="{{ $hotel_item->id }}">
                                    <input type="submit" id="edit_{{ $hotel_item->id }}">
                                </form>
                                <form action="{{ url('/administrator/hotel/delete') }}" method="post" style="display: none">
                                    <input name="_token" value="{{ csrf_token() }}">
                                    <input type="text" name="hotel_id" value="{{ $hotel_item->id }}">
                                    <input type="submit" id="delete_{{ $hotel_item->id }}">
                                </form>
                                <input type="button" onclick="hotel_edit({{ $hotel_item->id }})" value="Edit">
                                <input type="button" onclick="hotel_delete({{ $hotel_item->id }})" value="Delete">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
                <input type="button" value="Delete Checked Items" onclick="delete_checkedAll()">
                <form action="{{ url('/administrator/hotel/delete') }}" method="post" style="display: none">
                    <input name="_token" value="{{ csrf_token() }}">
                    <input name="checkedAll" id="checkedAll" value="">
                    <input type="submit" id="delete_checkedAll">
                </form>
            </div>
        </div>
        <!-- Content / End -->
    </div>
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


<script type="text/javascript" src="{{ asset('home_template/02/custom/dataTables.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#hotelListTable').dataTable();
    });
    function hotel_edit(id){
        console.log(id);
        $("#edit_"+id).click();
    }
    function hotel_delete(id){
        console.log(id);
        $("#delete_"+id).click();
    }
    function checkAll() {
        var checkboxes = $("#hotel_list_tbody input[type=checkbox]");
        if($("#select-all").is(":checked")){
            for(var i = 0; i < checkboxes.length; i++){
                checkboxes[i].checked = true;
            }
        }else{
            for(var i = 0; i < checkboxes.length; i++){
                checkboxes[i].checked = false;
            }
        }
    }
    function delete_checkedAll(){
        var checkboxes = $("#hotel_list_tbody input[type=checkbox]");
        var checkedIds = "";
        for(var i = 0; i < checkboxes.length; i++){
            if(checkboxes[i].checked == true){
                var str = $(checkboxes[i]).attr('id');
                var id = str.substr(17, str.length-16);
                checkedIds = checkedIds + id + ",";
            }
        }
        checkedIds = checkedIds.slice(0,-1);
        $("#checkedAll").val(checkedIds);
        $("#delete_checkedAll").click();
    }
</script>

</body>
</html>