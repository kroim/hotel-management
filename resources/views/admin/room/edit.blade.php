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
                    <li class="active"><a><i class="fa fa-building-o"></i> @lang('global.backend.room')</a>
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
            <div id="titlebar">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Edit Room Type</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>Edit Room Type</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <div id="add-listing">

                        <form action="{{ url('administrator/room/update') }}" method="post">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            <input name="hidden_roomId" value="{{ $room_data->id }}" style="display: none">
                            <!-- Section -->
                            <div class="add-listing-section">

                                <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-doc"></i> Room Informations</h3>
                                </div>

                                <!-- Title -->
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <h5>Type of Room <i class="tip" data-tip-content="Type of Room"></i></h5>
                                        <input class="search-field" type="text" name="room_type_name" value="{{ $room_data->name }}" required/>
                                    </div>
                                </div>
                                <!-- Row -->
                                <div class="row with-forms">

                                    <!-- Status -->
                                    <div class="col-md-6">
                                        <h5>Hotel Name</h5>
                                        <select class="chosen-select-no-single" name="select_hotel"  required>
                                            <option value="" selected disabled hidden>Select Hotel</option>
                                            @foreach($hotel_data as $hotel_item)
                                                <option value="{{ $hotel_item->id }}" @if($hotel_item->id == $room_data->hotel_id) selected @endif>{{ $hotel_item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <!-- Row / End -->

                            </div>
                            <!-- Section / End -->

                            <!-- Section -->
                            <div class="add-listing-section margin-top-45">

                                <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-docs"></i> Details</h3>
                                </div>

                                <!-- Description -->
                                <div class="form">
                                    <h5>Description</h5>
                                    <textarea class="WYSIWYG" name="room_description" cols="40" rows="3" spellcheck="true">{{ $room_data->description }}
                                    </textarea>
                                </div>

                                <!-- Checkboxes -->
                                <h4 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h4>
                                <div class="checkboxes in-row margin-bottom-20">
                                    @foreach($amenities as $amenity)
                                        <input id="check-a-{{ $loop->index }}" type="checkbox" name="amenities_check[]" value="{{ $amenity }}"
                                               @if(!is_bool(array_search($amenity, $checked_amenities))) checked @endif>
                                        <label for="check-a-{{ $loop->index }}">{{ $amenity }}</label>
                                    @endforeach
                                </div>
                                <!-- Checkboxes / End -->
                                <!-- Checkboxes -->
                                <h4 class="margin-top-30 margin-bottom-10">Families <span>(optional)</span></h4>
                                <div class="checkboxes in-row margin-bottom-20">
                                    @foreach($families as $family)
                                        <input id="check-f-{{ $loop->index }}" type="checkbox" name="families_check[]" value="{{ $family }}"
                                               @if(!is_bool(array_search($family, $checked_families))) checked @endif>
                                        <label for="check-f-{{ $loop->index }}">{{ $family }}</label>
                                    @endforeach
                                </div>
                                <!-- Checkboxes / End -->
                                <!-- Checkboxes -->
                            {{--<h5 class="margin-top-30 margin-bottom-10">What's around <span>(optional)</span></h5>--}}
                            {{--<div class="checkboxes in-row margin-bottom-20">--}}
                            {{--@foreach($around as $around_item)--}}
                            {{--<input id="check-w-{{ $loop->index }}" type="checkbox" name="amenities_check[]" value="{{ $around_item }}">--}}
                            {{--<label for="check-w-{{ $loop->index }}">{{ $around_item }}</label>--}}
                            {{--@endforeach--}}
                            {{--</div>--}}
                            <!-- Checkboxes / End -->
                                <!-- Checkboxes -->
                                <h4 class="margin-top-30 margin-bottom-10">Services <span>(optional)</span></h4>
                                <div class="checkboxes in-row margin-bottom-20">
                                    @foreach($room_services as $room_service)
                                        <input id="check-s-{{ $loop->index }}" type="checkbox" name="services_check[]" value="{{ $room_service }}"
                                               @if(!is_bool(array_search($room_service, $checked_services))) checked @endif>
                                        <label for="check-s-{{ $loop->index }}">{{ $room_service }}</label>
                                    @endforeach
                                </div>
                                <h4 class="margin-top-30 margin-bottom-10">Features <span>(optional)</span></h4>
                                <div class="checkboxes in-row margin-bottom-20">
                                    @foreach($room_features as $room_feature)
                                        <input id="check-ft-{{ $loop->index }}" type="checkbox" name="features_check[]" value="{{ $room_feature }}"
                                               @if(!is_bool(array_search($room_feature, $checked_features))) checked @endif>
                                        <label for="check-ft-{{ $loop->index }}">{{ $room_feature }}</label>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Section / End -->
                            <!-- Section -->
                            <div class="add-listing-section margin-top-45">

                                <!-- Headline -->
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-book-open"></i> Pricing</h3>
                                    <!-- Switcher -->
                                    <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                                </div>

                                <!-- Switcher ON-OFF Content -->
                                <div class="switcher-content">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <table id="pricing-list-container">
                                                <tr class="pricing-list-item pattern">
                                                    <td>
                                                        <div class="fm-input pricing-name"><input type="text" placeholder="Title" /></div>
                                                        <div class="fm-input pricing-ingredients"><input type="text" placeholder="Description" /></div>
                                                        <div class="fm-input pricing-price">
                                                            <input type="text" placeholder="Price" data-unit="USD" name="room_price" value="{{ $room_data->price }}" required/></div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <!-- Switcher ON-OFF Content / End -->

                            </div>
                            <!-- Section / End -->

                            <input type="submit" id="update_room" name="update_room" style="display: none" value="Edit Room">
                        </form>
                        <!-- Section -->
                        <div class="add-listing-section margin-top-45">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-picture"></i> Room Gallery</h3>
                            </div>

                            <!-- Dropzone -->
                            <div class="submit-section">
                                {!! Form::open([ 'route' => [ 'administrator.room.upload_images' ], 'files' => true, 'class' => 'dropzone','id'=>"image-upload"]) !!}
                                {!! Form::close() !!}
                                {{--<form action="{{ url('administrator/hotel/upload_images') }}" class="dropzone" id="image-upload"></form>--}}
                            </div>

                        </div>
                        <!-- Section / End -->
                        {{--<input type="submit" value="Create Hotel" name="create_hotel">--}}
                        <a href="#" class="button preview" onclick="edit_room()">Edit Room <i class="fa fa-arrow-circle-right"></i></a>
                        <a href="#" class="button preview" onclick="cancel_room()">Cancel Room</a>
                        <form id="cancel_edit_room" action="{{ url('administrator/room/update') }}" method="post" style="display: none">
                            <input name="_token" value="{{ csrf_token() }}">
                            <input type="submit" name="cancel_update_room" id="cancel_edit_submit">
                        </form>
                    </div>
                </div>

                <!-- Copyrights -->
                <div class="col-md-12">
                    <div class="copyrights">© 2018 Room Management. All Rights Reserved.</div>
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
<input id="field" data-field-id="{{json_encode($image_names)}}" style="display: none">

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

<script type="text/javascript" src="{{ url('home_template/02/scripts/dropzone.js') }}"></script>
<script type="text/javascript">
    Dropzone.options.imageUpload = {
        maxFilesize  : 1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks : true,
        removedfile: function(file) {
            var name = file.name;
            $.ajax({
                type: 'POST',
                url: '/administrator/room/delete_images',
                data:{
                    _token : "<?php echo csrf_token() ?>",
                    id: name
                },
                dataType: 'html'
            });
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        },
        init: function() {
            var image_names = JSON.parse($('#field').attr("data-field-id"));
            for(var i=0; i<image_names.length; i++) {
                var mockFile = {name: image_names[i], size: 12345, accepted: true, kind: "image"};
                this.files.push(mockFile);
                this.emit('addedfile', mockFile);
                this.createThumbnailFromUrl(mockFile, "/images/"+image_names[i]);
                this.emit('complete', mockFile);
                this._updateMaxFilesReachedClass();
            }
        }
    };
    function edit_room(){
        $("#update_room").click();
    }
    function cancel_room(){
        $("#cancel_edit_submit").click();
    }
</script>

</body>
</html>