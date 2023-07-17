<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('client')) {
            return view('client.dashboard');
        }
        else{
            return view('home');
        }
    }
    public function profile(){
        return view('client.profile');
    }
    public function edit_profile(Request $request){
        redirect('client/profile');
    }
    public function booking(){
        $user_id = Auth::user()->id;
        $booking_data = DB::table('booking')->where('user_id', $user_id)->get();
        $room_data = array();
        foreach ($booking_data as $booking_datum){
            $room = DB::table('room')->where('id', $booking_datum->room_id)->first();
            array_push($room_data, $room);
        }
        return view('client.booking', compact('booking_data','room_data'));
    }
    public function edit_booking(Request $request){
        redirect('client/booking');
    }
    public function delete_booking(Request $request){
        redirect('client/booking');
    }
    public function wishlist(){
        return view('client/wishlist');
    }
    public function delete_wishlist(Request $request){
        redirect('client.wishlist');
    }
    public function mycard(){
        return view('client.mycard');
    }
    public function create_mycard(Request $request){
        redirect('client/mycard');
    }
    public function edit_mycard(Request $request){
        redirect('client/mycard');
    }
    public function delete_mycard(Request $request){
        redirect('client/mycard');
    }
}
