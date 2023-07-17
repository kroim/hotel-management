<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;
use function PHPSTORM_META\type;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HotelController extends Controller
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
    public function moving_images_edit($sour, $des){
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
    public function moving_images_create($sour, $des){
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
    // List of Hotels
    public function index(){
        $hotel_data = DB::table('hotels')->get();
        return view('admin.hotel.index', compact('hotel_data'));
    }
    // Create new Hotel
    public function add_hotel(Request $request){
        if (isset($request['create_hotel'])){
            $hotel_affects = "";
            if (isset($request['amenities_check'])){
                foreach ($request['amenities_check'] as $amenity){
                    $amenity_id = DB::table('affect')->where([['category', 'amenities'], ['content', $amenity]])->first()->id;
                    $hotel_affects = $hotel_affects.(string)$amenity_id.",";
                }
            }
            if (isset($request['families_check'])){
                foreach ($request['families_check'] as $family){
                    $family_id = DB::table('affect')->where([['category', 'families'], ['content', $family]])->first()->id;
                    $hotel_affects = $hotel_affects.(string)$family_id.",";
                }
                $hotel_affects = substr($hotel_affects, 0, -1);
            }

            $hotel_services = "";
            if (isset($request['services_check'])){
                foreach ($request['services_check'] as $service){
                    $service_id = DB::table('service')->where([['category', 'In the hotel'], ['content', $service]])->first()->id;
                    $hotel_services = $hotel_services.(string)$service_id.",";
                }
                $hotel_services = substr($hotel_services, 0, -1);
            }
            $hotel_features = "";
            if (isset($request['features_check'])){
                foreach ($request['features_check'] as $feature){
                    $feature_id = DB::table('feature')->where('content', $feature)->first()->id;
                    $hotel_features = $hotel_features.(string)$feature_id.",";
                }
                $hotel_features = substr($hotel_features, 0, -1);
            }

            // File Moving
            $hotel_folder = 'uploads/hotel/'.$request['hotel_name'];
            if(!is_dir($hotel_folder)){
                mkdir($hotel_folder);
            }
            $source = 'images';
            $destination = $hotel_folder;
            $this->moving_images_create($source, $destination);
            // End File Moving

            // Get image urls
            $image_names = DB::table('image_cache')->get();
            $image_urls = "";
            foreach ($image_names as $image_name){
                $image_urls = $image_urls.$hotel_folder.'/'.$image_name->image_name.';';
            }
            $image_urls = substr($image_urls, 0, -1);

            // Insert Hotel in Database
            $id = DB::table('hotels')->insertGetId(['name'=>$request['hotel_name'],'city'=>$request['hotel_city'],
                'address'=>$request['hotel_address'], 'state'=>$request['hotel_state'], 'zipcode'=>$request['hotel_zipcode'],
                'images'=>$image_urls, 'description'=>$request['hotel_description']]);
            DB::table('image_cache')->delete();

            // Hotel Information data
            DB::table('hotel_information')->insert(['hotel_id'=>$id, 'affect_ids'=>$hotel_affects,
                'service_ids'=>$hotel_services, 'feature_ids'=>$hotel_features]);
            return redirect()->route('administrator.hotel.index');

        }else{
            DB::table('image_cache')->delete();
            $imageFolderPath = public_path('images');
            $files = scandir($imageFolderPath);
            foreach ($files as $file) {
                if (in_array($file, array(".",".."))) continue;
                unlink($imageFolderPath."\\".$file);
            }
            $amenities = DB::table('affect')->where('category', 'amenities')->pluck('content');
            $families = DB::table('affect')->where('category', 'families')->pluck('content');
            $around = DB::table('affect')->where('category', 'around')->pluck('content');
            $hotel_services = DB::table('service')->where('category', 'In the hotel')->pluck('content');
            $hotel_features = DB::table('feature')->pluck('content');

            return view('admin.hotel.add', compact('amenities', 'families', 'around', 'hotel_services', 'hotel_features'));
        }
    }

    // Edit Hotel
    public function edit_hotel(Request $request){
        DB::table('image_cache')->delete();
        $id = $request['hotel_id'];
        $hotel_data = DB::table('hotels')->where('id', $id)->first();
        $image_urls = explode(";", $hotel_data->images);
        $image_names = array();
        foreach ($image_urls as $image_url){
            $split_image = explode("/", $image_url);
            $name = end($split_image);
            array_push($image_names, $name);
            DB::table('image_cache')->insert(['image_name'=>$name]);
        }
        // File Moving
        $source = 'uploads/hotel/'.$hotel_data->name;
        $destination = 'images';
        $this->moving_images_edit($source, $destination);
        // End File Moving

        $information = DB::table('hotel_information')->where('hotel_id', $id)->first();
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
        $hotel_services = DB::table('service')->where('category', 'In the hotel')->pluck('content');
        $hotel_features = DB::table('feature')->pluck('content');

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

        return view('admin.hotel.edit', compact('hotel_data','image_urls','image_names','amenities',
            'families','around','hotel_services', 'hotel_features','checked_amenities','checked_families',
            'checked_around','checked_services','checked_features'));
    }

    // Update Hotel
    public function update_hotel(Request $request){
        if (isset($request['update_hotel'])){
            $id = $request['hidden_hotelId'];
            $hotel_affects = "";
            if (isset($request['amenities_check'])){
                foreach ($request['amenities_check'] as $amenity){
                    $amenity_id = DB::table('affect')->where([['category', 'amenities'], ['content', $amenity]])->first()->id;
                    $hotel_affects = $hotel_affects.(string)$amenity_id.",";
                }
            }
            if (isset($request['families_check'])){
                foreach ($request['families_check'] as $family){
                    $family_id = DB::table('affect')->where([['category', 'families'], ['content', $family]])->first()->id;
                    $hotel_affects = $hotel_affects.(string)$family_id.",";
                }
                $hotel_affects = substr($hotel_affects, 0, -1);
            }

            $hotel_services = "";
            if (isset($request['services_check'])){
                foreach ($request['services_check'] as $service){
                    $service_id = DB::table('service')->where([['category', 'In the hotel'], ['content', $service]])->first()->id;
                    $hotel_services = $hotel_services.(string)$service_id.",";
                }
                $hotel_services = substr($hotel_services, 0, -1);
            }
            $hotel_features = "";
            if (isset($request['features_check'])){
                foreach ($request['features_check'] as $feature){
                    $feature_id = DB::table('feature')->where('content', $feature)->first()->id;
                    $hotel_features = $hotel_features.(string)$feature_id.",";
                }
                $hotel_features = substr($hotel_features, 0, -1);
            }

            // File Moving
            $destination = 'uploads/hotel/'.$request['hotel_name'];
            $source = 'images';
            $this->moving_images_create($source, $destination);
            // End File Moving

            // Get image urls
            $image_names = DB::table('image_cache')->get();
            $image_urls = "";
            foreach ($image_names as $image_name){
                $image_urls = $image_urls.$destination.'/'.$image_name->image_name.';';
            }
            $image_urls = substr($image_urls, 0, -1);

            // Insert Hotel in Database
            DB::table('hotels')->where('id', $id)->update(['name'=>$request['hotel_name'],'city'=>$request['hotel_city'],
                'address'=>$request['hotel_address'], 'state'=>$request['hotel_state'], 'zipcode'=>$request['hotel_zipcode'],
                'images'=>$image_urls, 'description'=>$request['hotel_description']]);
            DB::table('image_cache')->delete();

            // Hotel Information data
            DB::table('hotel_information')->where('hotel_id', $id)->update(['affect_ids'=>$hotel_affects,
                'service_ids'=>$hotel_services, 'feature_ids'=>$hotel_features]);
            return redirect()->route('administrator.hotel.index');
        }elseif (isset($request['cancel_update_hotel'])){
            DB::table('image_cache')->delete();
            $imageFolderPath = public_path('images');
            $files = scandir($imageFolderPath);
            foreach ($files as $file) {
                if (in_array($file, array(".",".."))) continue;
                unlink($imageFolderPath."\\".$file);
            }
            return redirect()->route('administrator.hotel.index');
        }else{
            return redirect()->route('administrator.hotel.index');
        }
    }

    // Delete Hotel
    public function delete_hotel(Request $request){
        if (isset($request['checkedAll'])){
            $ids = explode(",", $request['checkedAll']);
            foreach ($ids as $id){
                DB::table('hotel_information')->where('hotel_id', $id)->delete();
                DB::table('hotels')->where('id', $id)->delete();
            }
        }else{
            DB::table('hotel_information')->where('hotel_id', $request['hotel_id'])->delete();
            DB::table('hotels')->where('id', $request['hotel_id'])->delete();
        }
        return redirect()->route('administrator.hotel.index');
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
