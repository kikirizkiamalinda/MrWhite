<?php

namespace App\Http\Controllers;
use App\Catalog;
use App\Category;
use App\Setting;
use App\Banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;


class index_controller extends Controller
{
    public function index(){
        $setting = Setting::orderBy('position')->get();
        $product = Catalog::inRandomOrder()->take(8)->get();
        $brand = DB::table('categories')-> where('jenis','=', 'brand')->inRandomOrder()->paginate(6);
        $offer=Catalog::inRandomOrder()->take(3)->get();
        $category=DB::table('categories')-> where('jenis','=', 'perawatan')->get();

    	$now = Carbon::today();
    	$banner = Banner::whereDate('date_off','>=', $now)->WhereDate('date_show','<=',$now)->get();
        $count = Banner::count();
        // dd($banner);
        if ($banner) {
            return view('index', compact('offer', 'brand', 'product','category','banner','setting','count'));
        }else {
            $banner = Banner::whereDate('date_off','<=', $now)->orWhereDate('date_show','>=',$now)->first();
            return view('index', compact('offer', 'brand', 'product','category','banner','setting','count'));
        }
    }
}
