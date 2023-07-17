<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    //
    public function __construct()
    {
    }

    public function index(){
        $front_hotel_data = DB::table('hotels')->get();
        $front_room_data = DB::table('room')->get();
        $front_region_data = DB::table('regions')->get();
        return view('front/index', compact('front_hotel_data', 'front_room_data', 'front_region_data'));
    }
    public function contact_us(){
        return view('front/contact_us');
    }
    public function search_list(Request $request){
        $front_region_data = DB::table('regions')->get();
        $search_region = $request['region'];
        $search_data = DB::table('hotels')->where('city', $search_region)->get();
        $search_checkIn = "";
        $search_checkOut = "";
        if (isset($request['check_in']) or isset($request['check_out'])){
            $search_checkIn = $request['check_in'];
            $search_checkOut = $request['check_out'];
        }
        $search_rooms = $request['rooms'];
        $search_adults = $request['adults'];
        $search_kids = $request['kids'];
        $hotel_main_images = array();
        foreach ($search_data as $search_datum) {
            $image_str = $search_datum->images;
            $images = explode(";", $image_str);
            array_push($hotel_main_images, $images[0]);
        }
//        var_dump($hotel_main_images);
        return view('front/search_list', compact('front_region_data','search_region', 'search_data', 'search_checkIn',
            'search_checkOut', 'search_rooms', 'search_adults', 'search_kids',
            'hotel_main_images'));
    }
    // Show Hotel Information with rooms
    public function hotel_detail(Request $request){
        $id = $request['hotel_id'];
        $checkIn = $request['check_in'];
        $checkOut = $request['check_out'];
        $rooms = $request['rooms'];
        $adults = $request['adults'];
        $kids = $request['kids'];
        $hotel_data = DB::table('hotels')->where('id', $id)->first();
        $hotel_images_string = $hotel_data->images;
        $hotel_images = explode(";", $hotel_images_string);
        $room_data = DB::table('room')->where('hotel_id', $id)->get();

        // Hotel Information : affects, services, features
        $hotel_information = DB::table('hotel_information')->where('hotel_id', $id)->first();
        $affect_ids = explode(",", $hotel_information->affect_ids);
        $affects = array();
        foreach ($affect_ids as $affect_id){
            $affect = DB::table('affect')->where('id', $affect_id)->first();
            array_push($affects, $affect);
        }
        $service_ids = explode(",", $hotel_information->service_ids);
        $services = array();
        foreach ($service_ids as $service_id){
            $service = DB::table('service')->where('id', $service_id)->first();
            array_push($services, $service);
        }
        $feature_ids = explode(",", $hotel_information->feature_ids);
        $features = array();
        foreach ($feature_ids as $feature_id){
            $feature = DB::table('feature')->where('id', $feature_id)->first();
            array_push($features, $feature);
        }

        // Room Information : affects, services, features
        $room_affects = array();
        $room_services = array();
        $room_features = array();
        foreach ($room_data as $room_datum){

            $info = DB::table('room_information')->where('room_id',$room_datum->id)->first();

            $affect_info_str = $info->affect_ids;
            $affect_info = explode(",",$affect_info_str);
            $room_affects_item = array();
            foreach ($affect_info as $item){
                $affect_0 = DB::table('affect')->where('id', $item)->first();
                array_push($room_affects_item, $affect_0);
            }
            array_push($room_affects, $room_affects_item);

            $service_info_str = $info->service_ids;
            $service_info = explode(",",$service_info_str);
            $room_services_item = array();
            foreach ($service_info as $item) {
                $service_0 = DB::table('service')->where('id', $item)->first();
                array_push($room_services_item, $service_0);
            }
            array_push($room_services, $room_services_item);

            $feature_info_str = $info->feature_ids;
            $feature_info = explode(",",$feature_info_str);
            $room_features_item = array();
            foreach ($feature_info as $item) {
                $feature_0 = DB::table('feature')->where('id',$item);
                array_push($room_features_item, $feature_0);
            }
            array_push($room_features, $room_features_item);
        }

        return view('front.hotel_room', compact('hotel_data','hotel_images','checkIn','checkOut','rooms',
            'adults','kids','room_data','affects','services','features','room_affects','room_services','room_features',
            'room_images'));
    }
    // Show Hotel when get method from a tag.
    public function display_hotel($id){
        $hotel = DB::table('hotels')->where('id', $id)->first();
        $hotel_images_string = $hotel->images;
        $hotel_images = explode(";", $hotel_images_string);

        $hotel_information = DB::table('hotel_information')->where('hotel_id', $id)->first();
        $affect_ids = explode(",", $hotel_information->affect_ids);
        $affects = array();
        foreach ($affect_ids as $affect_id){
            $affect = DB::table('affect')->where('id', $affect_id)->first();
            array_push($affects, $affect);
        }
        $service_ids = explode(",", $hotel_information->service_ids);
        $services = array();
        foreach ($service_ids as $service_id){
            $service = DB::table('service')->where('id', $service_id)->first();
            array_push($services, $service);
        }
        $feature_ids = explode(",", $hotel_information->feature_ids);
        $features = array();
        foreach ($feature_ids as $feature_id){
            $feature = DB::table('feature')->where('id', $feature_id)->first();
            array_push($features, $feature);
        }
        return view('front.hotel_detail', compact('hotel', 'hotel_images','affects','services','features'));
    }
}
