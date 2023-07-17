<?php

namespace App\Http\Controllers\Backend;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RoomController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        if (! Gate::allows('users_manage')){
            return "Permission is invalid";
        }
    }
    // Image Moving from source folder to destination folder
    public function moving_room_images_edit($sour, $des){
        $files = scandir(public_path($sour));
        // Identify directories
        $source = public_path($sour.'/');
        $destination = public_path($des.'/');
        // Cycle through all source files
        foreach ($files as $file) {
            if (in_array($file, array(".",".."))) continue;
            // If we copied this successfully, mark it for deletion
            if (copy($source.$file, $destination.$file)) {
                $delete[] = $source.$file;
            }
        }
    }
    // Image Moving from source folder to destination folder
    public function moving_room_images_create($sour, $des){
        $files = scandir(public_path($sour));
        // Identify directories
        $source = public_path($sour.'/');
        $destination = public_path($des.'/');
        // Cycle through all source files
        foreach ($files as $file) {
            if (in_array($file, array(".",".."))) continue;
            // If we copied this successfully, mark it for deletion
            if (copy($source.$file, $destination.$file)) {
                $delete[] = $source.$file;
            }
        }
        // Delete all successfully-copied files
        if(isset($delete)){
            foreach ($delete as $file) {
                unlink($file);
            }
        }
    }
    // List of rooms
    public function index(){
        $room_data = DB::table('room')->get();
        return view('admin.room.index',compact('room_data'));
    }
    // Create new room
    public function add_room(Request $request){
        if (isset($request['create_room_submit'])){
            $select_hotel_id = $request['select_hotel'];
            $room_affects = "";
            if (isset($request['amenities_check'])){
                foreach ($request['amenities_check'] as $amenity){
                    $amenity_id = DB::table('affect')->where([['category', 'amenities'], ['content', $amenity]])->first()->id;
                    $room_affects = $room_affects.(string)$amenity_id.",";
                }
            }
            if (isset($request['families_check'])){
                foreach ($request['families_check'] as $family){
                    $family_id = DB::table('affect')->where([['category', 'families'], ['content', $family]])->first()->id;
                    $room_affects = $room_affects.(string)$family_id.",";
                }
                $room_affects = substr($room_affects, 0, -1);
            }
            $room_services = "";
            if (isset($request['services_check'])){
                foreach ($request['services_check'] as $service){
                    $service_id = DB::table('service')->where([['category', 'In the hotel'], ['content', $service]])->first()->id;
                    $room_services = $room_services.(string)$service_id.",";
                }
                $room_services = substr($room_services, 0, -1);
            }
            $room_features = "";
            if (isset($request['features_check'])){
                foreach ($request['features_check'] as $feature){
                    $feature_id = DB::table('feature')->where('content', $feature)->first()->id;
                    $room_features = $room_features.(string)$feature_id.",";
                }
                $room_features = substr($room_features, 0, -1);
            }

            // File Moving
            $hotel_folder = 'uploads/room/'.$select_hotel_id;
            $room_folder = $hotel_folder.'/'.$request['room_type_name'];
            if(!is_dir($hotel_folder)){
                mkdir($hotel_folder);
            }
            if (!is_dir($room_folder)){
                mkdir($room_folder);
            }
            $source = 'images';
            $destination = $room_folder;
            $this->moving_room_images_create($source, $destination);
            // End File Moving

            // Get image urls
            $image_names = DB::table('image_cache')->get();
            $image_urls = "";
            foreach ($image_names as $image_name){
                $image_urls = $image_urls.$room_folder.'/'.$image_name->image_name.';';
            }
            $image_urls = substr($image_urls, 0, -1);

//             Insert Room in Database
            $id = DB::table('room')->insertGetId(['hotel_id'=>$select_hotel_id,'name'=>$request['room_type_name'],
                'images'=>$image_urls, 'description'=>$request['room_description'], 'price'=>$request['room_price']]);
            DB::table('image_cache')->delete();

//             Hotel Information data
            DB::table('room_information')->insert(['room_id'=>$id, 'affect_ids'=>$room_affects,
                'service_ids'=>$room_services, 'feature_ids'=>$room_features]);
            return redirect()->route('administrator.room.index');

        }else{
            DB::table('image_cache')->delete();
            $imageFolderPath = public_path('images');
            $files = scandir($imageFolderPath);
            foreach ($files as $file) {
                if (in_array($file, array(".",".."))) continue;
                unlink($imageFolderPath."\\".$file);
            }
            $hotel_data = DB::table('hotels')->get();
            $amenities = DB::table('affect')->where('category', 'amenities')->pluck('content');
            $families = DB::table('affect')->where('category', 'families')->pluck('content');
            $around = DB::table('affect')->where('category', 'around')->pluck('content');
            $room_services = DB::table('service')->where('category', 'In the hotel')->pluck('content');
            $room_features = DB::table('feature')->pluck('content');
            return view('admin.room.add', compact('hotel_data','amenities','families',
                'around','room_services','room_features'));
        }
    }

    // Edit room
    public function edit_room(Request $request){
        DB::table('image_cache')->delete();
        $hotel_data = DB::table('hotels')->get();
        $id = $request['room_id'];
        $room_data = DB::table('room')->where('id', $id)->first();
        $image_urls = explode(";", $room_data->images);
        $image_names = array();
        foreach ($image_urls as $image_url){
            $split_image = explode("/", $image_url);
            $name = end($split_image);
            array_push($image_names, $name);
            DB::table('image_cache')->insert(['image_name'=>$name]);
        }

        // File Moving
        $source = 'uploads/room/'.$room_data->hotel_id.'/'.$room_data->name;
        $destination = 'images';
        $this->moving_room_images_edit($source, $destination);
        // End File Moving

        $information = DB::table('room_information')->where('room_id', $id)->first();
        $affect_ids = explode(",", $information->affect_ids);
        $service_ids = explode(",", $information->service_ids);
        $feature_ids = explode(",", $information->feature_ids);

        $checked_amen = DB::table('affect')->where('category', 'amenities')->whereIn('id', $affect_ids)->pluck('content');
        $checked_fam = DB::table('affect')->where('category', 'families')->whereIn('id', $affect_ids)->pluck('content');
        $checked_ar = DB::table('affect')->where('category', 'around')->whereIn('id', $affect_ids)->pluck('content');
        $checked_ser = DB::table('service')->where('category', 'In the hotel')->whereIn('id', $service_ids)->pluck('content');
        $checked_fea = DB::table('feature')->whereIn('id', $feature_ids)->pluck('content');

        $amenities = DB::table('affect')->where('category', 'amenities')->pluck('content');
        $families = DB::table('affect')->where('category', 'families')->pluck('content');
        $around = DB::table('affect')->where('category', 'around')->pluck('content');
        $room_services = DB::table('service')->where('category', 'In the hotel')->pluck('content');
        $room_features = DB::table('feature')->pluck('content');

        $checked_amenities = array();
        foreach ($checked_amen as $checked_amenity){
            array_push($checked_amenities, $checked_amenity);
        }
        $checked_families = array();
        foreach ($checked_fam as $checked_family){
            array_push($checked_families, $checked_family);
        }
        $checked_around = array();
        foreach ($checked_ar as $checked_arr){
            array_push($checked_around, $checked_arr);
        }
        $checked_services = array();
        foreach ($checked_ser as $checked_service){
            array_push($checked_services, $checked_service);
        }
        $checked_features = array();
        foreach ($checked_fea as $checked_feature){
            array_push($checked_features, $checked_feature);
        }
        return view('admin.room.edit', compact('room_data','hotel_data','image_urls','image_names','amenities',
            'families','around','room_services', 'room_features','checked_amenities','checked_families',
            'checked_around','checked_services','checked_features'));

//        return view('admin.room.edit');
    }

    // Update Room
    public function update_room(Request $request){
        if (isset($request['update_room'])){
            $id = $request['hidden_roomId'];
            $select_hotel_id = $request['select_hotel'];
            $room_affects = "";
            if (isset($request['amenities_check'])){
                foreach ($request['amenities_check'] as $amenity){
                    $amenity_id = DB::table('affect')->where([['category', 'amenities'], ['content', $amenity]])->first()->id;
                    $room_affects = $room_affects.(string)$amenity_id.",";
                }
            }
            if (isset($request['families_check'])){
                foreach ($request['families_check'] as $family){
                    $family_id = DB::table('affect')->where([['category', 'families'], ['content', $family]])->first()->id;
                    $room_affects = $room_affects.(string)$family_id.",";
                }
                $room_affects = substr($room_affects, 0, -1);
            }

            $room_services = "";
            if (isset($request['services_check'])){
                foreach ($request['services_check'] as $service){
                    $service_id = DB::table('service')->where([['category', 'In the hotel'], ['content', $service]])->first()->id;
                    $room_services = $room_services.(string)$service_id.",";
                }
                $room_services = substr($room_services, 0, -1);
            }
            $room_features = "";
            if (isset($request['features_check'])){
                foreach ($request['features_check'] as $feature){
                    $feature_id = DB::table('feature')->where('content', $feature)->first()->id;
                    $room_features = $room_features.(string)$feature_id.",";
                }
                $room_features = substr($room_features, 0, -1);
            }

            // File Moving
            $hotel_folder = 'uploads/room/'.$select_hotel_id;
            $room_folder = $hotel_folder.'/'.$request['room_type_name'];
            if(!is_dir($hotel_folder)){
                mkdir($hotel_folder);
            }
            if (!is_dir($room_folder)){
                mkdir($room_folder);
            }
            $source = 'images';
            $destination = $room_folder;
            $this->moving_room_images_create($source, $destination);
            // End File Moving

            // Get image urls
            $image_names = DB::table('image_cache')->get();
            $image_urls = "";
            foreach ($image_names as $image_name){
                $image_urls = $image_urls.$room_folder.'/'.$image_name->image_name.';';
            }
            $image_urls = substr($image_urls, 0, -1);

//             Insert Room in Database
            DB::table('room')->where('id', $id)->update(['hotel_id'=>$select_hotel_id,'name'=>$request['room_type_name'],
                'images'=>$image_urls, 'description'=>$request['room_description'], 'price'=>$request['room_price']]);
            DB::table('image_cache')->delete();

//             Hotel Information data
            DB::table('room_information')->where('room_id', $id)->update(['room_id'=>$id, 'affect_ids'=>$room_affects,
                'service_ids'=>$room_services, 'feature_ids'=>$room_features]);
            return redirect()->route('administrator.room.index');

        }elseif (isset($request['cancel_update_room'])){
            DB::table('image_cache')->delete();
            $imageFolderPath = public_path('images');
            $files = scandir($imageFolderPath);
            foreach ($files as $file) {
                if (in_array($file, array(".",".."))) continue;
                unlink($imageFolderPath."\\".$file);
            }
            return redirect()->route('administrator.room.index');
        }else{
            return redirect()->route('administrator.room.index');
        }
    }

    // Delete room
    public function delete_room(Request $request){
        if (isset($request['checkedAll'])){
            $ids = explode(",", $request['checkedAll']);
            foreach ($ids as $id){
                DB::table('room_information')->where('room_id', $id)->delete();
                DB::table('room')->where('id', $id)->delete();
            }
        }else{
            DB::table('room_information')->where('room_id', $request['room_id'])->delete();
            DB::table('room')->where('id', $request['room_id'])->delete();
        }
        return redirect()->route('administrator.room.index');
    }

    // Images Upload to cache
    public function upload_images(Request $request){
        $imageName = $request->file->getClientOriginalName();
        $request->file->move(public_path('images'), $imageName);
        // Cache Database Operating
        $res = DB::table('image_cache')->where('image_name', $imageName)->first();
        if($res == null){
            DB::table('image_cache')->insert(['image_name'=>$imageName]);
        }
        return response()->json(['success'=>$imageName]);
    }

    // Delete Hotel Images from cache
    public function delete_images(Request $request){
        $fn=$request['id'];
        exec('rm "'.public_path('images').'\\'.$fn.'"');
        // Cache Database Operating
        DB::table('image_cache')->where('image_name', $fn)->delete();
        return $fn;
    }
}
