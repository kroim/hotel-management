<?php
//Route::get('/', function () { return redirect('/admin/home'); });
Route::get('/', 'Front\HomeController@index');
Route::get('/contact_us', 'Front\HomeController@contact_us');
Route::post('/search_list', 'Front\HomeController@search_list');
Route::post('/search_list/hotel_detail', 'Front\HomeController@hotel_detail');
Route::get('/search_list/hotel_detail/{id}', 'Front\HomeController@display_hotel');
Route::post('/booking', 'Front\BookController@index');
Route::post('/add_booking', 'Front\BookController@add_booking');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
$this->post('register', 'Auth\RegisterController@register')->name('auth.register');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// User Management System
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
});

// Admin Management System
Route::group(['prefix' => 'administrator', 'as' => 'administrator.'], function (){
    Route::get('/regions', ['uses' => 'Backend\RegionController@index', 'as' => 'region.index']);
    Route::get('/regions/add', ['uses' => 'Backend\RegionController@add_region', 'as' => 'region.add']);
    Route::post('/regions/add', ['uses' => 'Backend\RegionController@add_region']);
    Route::post('/regions/edit', ['uses' => 'Backend\RegionController@edit_region', 'as' => 'region.edit']);
    Route::post('/regions/delete', ['uses' => 'Backend\RegionController@delete_region', 'as' => 'region.delete']);

    Route::get('/hotel', ['uses' => 'Backend\HotelController@index', 'as' => 'hotel.index']);
    Route::get('/hotel/add', ['uses' => 'Backend\HotelController@add_hotel', 'as' => 'hotel.add']);
    Route::post('/hotel/add', ['uses' => 'Backend\HotelController@add_hotel']);
    Route::post('/hotel/edit', 'Backend\HotelController@edit_hotel');
    Route::post('/hotel/update', 'Backend\HotelController@update_hotel');
    Route::post('/hotel/delete', 'Backend\HotelController@delete_hotel');
    Route::post('/hotel/upload_images', ['uses' => 'Backend\HotelController@upload_images', 'as' => 'hotel.upload_images']);
    Route::post('/hotel/delete_images', ['uses' => 'Backend\HotelController@delete_images']);

    Route::get('/room', ['uses' => 'Backend\RoomController@index', 'as' => 'room.index']);
    Route::get('/room/add', ['uses' => 'Backend\RoomController@add_room', 'as' => 'room.add']);
    Route::post('/room/add', ['uses' => 'Backend\RoomController@add_room']);
    Route::post('/room/edit', 'Backend\RoomController@edit_room');
    Route::post('/room/update', 'Backend\RoomController@update_room');
    Route::post('/room/delete', 'Backend\RoomController@delete_room');
    Route::post('/room/upload_images', ['uses' => 'Backend\RoomController@upload_images', 'as' => 'room.upload_images']);
    Route::post('/room/delete_images', ['uses' => 'Backend\RoomController@delete_images']);

    Route::get('/booking', ['uses' => 'Backend\BookingController@index', 'as' => 'booking.index']);
    Route::post('/booking/details', 'Backend\BookingController@booking_details');
});

// Client Dashboard
Route::group(['prefix' => 'client',], function(){
    Route::get('/profile', 'HomeController@profile');
    Route::post('/edit_profile', 'HomeController@edit_profile');
    Route::get('/booking', 'HomeController@booking');
    Route::post('/edit_booking', 'HomeController@edit_booking');
    Route::post('/delete_booking', 'HomeController@delete_booking');
    Route::get('/wishlist', 'HomeController@wishlist');
    Route::post('/delete_wishlist', 'HomeController@delete_wishlist');
    Route::get('/mycard', 'HomeController@mycard');
    Route::post('/create_mycard', 'HomeController@create_mycard');
    Route::post('/edit_mycard', 'HomeController@edit_mycard');
    Route::post('/delete_mycard', 'HomeController@delete_mycard');
});