<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use DB;

class RegionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        if (! Gate::allows('users_manage')){
            return "Permission is invalid";
        }
    }
    public function index(){
        $regions = DB::table('regions')->get();
        return view('admin.region.index', compact('regions'));
    }
    public function add_region(Request $request){
        $check_region_name = false;
        $origin_name = "";
        if (isset($request['add_region_submit'])){
            $region_name = $request['region_name'];
            $user = DB::table('regions')->where('name', $region_name)->first();
            if ($user === null) {
                DB::table('regions')->insert(['name'=>$region_name]);
                return redirect()->route('administrator.region.index');
            }else{
                $check_region_name = true;
                $origin_name = $region_name;
                return view('admin.region.add_region', compact('check_region_name', 'origin_name'));
            }
//            return redirect()->route('administrator.region.index');
        }else{
            return view('admin.region.add_region', compact('check_region_name', 'origin_name'));
        }
    }
    public function edit_region(Request $request){
        if (isset($request['update_region_submit'])){
            $id = $request['update_region_id'];
            $name = $request['update_region_name'];
            DB::table('regions')->where('id', $id)->update(['name'=>$name]);
            return redirect()->route('administrator.region.index');
        }else{
            $id = $request['region_id'];
            $origin_region = DB::table('regions')->where('id', $id)->first();
            return view('admin.region.edit_region', compact('origin_region'));
        }
    }
    public function delete_region(Request $request){
        if (isset($request['checkedAll'])){
            $ids = explode(",", $request['checkedAll']);
            foreach ($ids as $id){
                var_dump($id);
                DB::table('regions')->where('id', $id)->delete();
            }
        }else{
            DB::table('regions')->where('id', $request['region_id'])->delete();
        }
        return redirect()->route('administrator.region.index');
    }
}
