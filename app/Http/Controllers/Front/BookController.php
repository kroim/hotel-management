<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

use DB;
use Auth;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        if (Gate::allows('user_manager')){
            redirect('administrator/dashboard');
        }
    }
    public function index(Request $request){
        $room_id = $request['booking_room_id'];
        $room_data = DB::table('room')->where('id', $room_id)->first();
        $checkIn = $request['booking_checkIn'];
        $checkOut = $request['booking_checkOut'];
        $rooms = $request['booking_rooms'];
        $adults = $request['booking_adults'];
        $kids = $request['booking_kids'];

        return view('front.booking', compact('room_id','room_data','checkIn','checkOut','rooms','adults','kids'));
    }
    // Add Booking Information
    public function add_booking(Request $request){
        $room_id = $request['booking_room_id'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $phone = $request['phone'];
        $email = $request['email'];
        $payment = $request['payment'];
        $address = $request['address'];
        $zipcode = $request['zipcode'];
        $arrival_date = $request['arrival_date'];
        $departure_date = $request['departure_date'];
        $comments = $request['comments'];
        $user_id = Auth::user()->id;
        $today = date("Y-m-d");
        $booking_rooms = $request['booking_rooms'];
        $booking_adults = $request['booking_adults'];
        $booking_kids = $request['booking_kids'];
        DB::table('booking')->insert(['room_id'=>$room_id,'user_id'=>$user_id,'f_name'=>$first_name,'l_name'=>$last_name,
            'phone'=>$phone,'email'=>$email,'payment'=>$payment,'address'=>$address,'zipcode'=>$zipcode,
            'c_date'=>$today,'a_date'=>$arrival_date,'d_date'=>$departure_date,'comments'=>$comments,
            'b_rooms'=>$booking_rooms,'b_adults'=>$booking_adults,'b_kids'=>$booking_kids]);
        return redirect('/client/booking');
    }
}
