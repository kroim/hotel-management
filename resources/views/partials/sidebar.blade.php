@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/admin/home') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            
            @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
                <li class="{{ $request->segment(1) == 'booking' ? 'active active-sub' : ''}}">
                    <a href="{{ route('administrator.region.index') }}">
                        <i class="fa fa-street-view"></i>
                        <span class="title">@lang('global.backend.regions')</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-building"></i>
                        <span class="title">@lang('global.backend.hotel')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ $request->segment(2) == 'hotel' ? 'active active-sub' : '' }}">
                            <a href="{{ route('administrator.hotel.index') }}">
                                <i class="fa fa-hourglass"></i>
                                <span class="title">@lang('global.backend.hotel_lists')</span>
                            </a>
                        </li>
                        <li class="{{ $request->segment(2) == 'add_hotel' ? 'active active-sub' : '' }}">
                            <a href="{{ route('administrator.hotel.add') }}">
                                <i class="fa fa-plus-square"></i>
                                <span class="title">@lang('global.backend.add_hotel')</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="">
                        <i class="fa fa-building-o"></i>
                        <span class="title">@lang('global.backend.room')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="{{ $request->segment(2) == 'room' ? 'active active-sub' : '' }}">
                            <a href="{{ route('administrator.room.index') }}">
                                <i class="fa fa-hourglass-2"></i>
                                <span class="title">@lang('global.backend.room_lists')</span>
                            </a>
                        </li>
                        <li class="{{ $request->segment(2) == 'add_room' ? 'active active-sub' : '' }}">
                            <a href="{{ route('administrator.room.add') }}">
                                <i class="fa fa-plus-circle"></i>
                                <span class="title">@lang('global.backend.add_room')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ $request->segment(1) == 'booking' ? 'active active-sub' : ''}}">
                    <a href="{{ route('administrator.booking.index') }}">
                        <i class="fa fa-bookmark"></i>
                        <span class="title">@lang('global.backend.booking')</span>
                    </a>
                </li>
            @endcan

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-power-off"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{{--{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}--}}
{{--<button type="submit">@lang('global.logout')</button>--}}
{{--{!! Form::close() !!}--}}
