<?php

namespace App\Http\Controllers\Backend;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BookingController extends Controller
{
    //
    public function __construct()
    {

        if (! Gate::allows('users_manage')){
            return "Permission is invalid";
        }
    }

    // List of bookings
    public function index(){
        $booking_data = DB::table('booking')->get();
        return view('admin.booking.index', compact('booking_data'));
    }
    // View details of booking
    public function booking_details(Request $request)
    {
        $booking_id = $request['booking_id'];
        $booking_data = DB::table('booking')->where('id', $booking_id)->first();
        $room_id = $booking_data->room_id;
        $room_data = DB::table('room')->where('id', $room_id)->first();
        $room_information = DB::table('room_information')->where('room_id', $room_id)->first();
        return view('admin.booking.details', compact('booking_data','room_data'));
    }
}
