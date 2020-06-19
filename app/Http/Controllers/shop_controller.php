<?php

namespace App\Http\Controllers;
use App\Catalog;
use App\Category;
use App\Link;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class shop_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('jenis', 'perawatan')->get();
        
        $number = 6;

        if (request()->category) {
            // $product = Catalog::with('Category')->whereHas('catalog_category', function($query){
            //     $query->where('jenis', request()->category);
            // })->get();
            $product = DB::table('catalog_category')->join('catalogs','catalog_category.catalog_id','=','catalogs.id')->join('categories','categories.id','=','catalog_category.category_id')->where('name', request()->category);
            $category_name = optional(Category::where('name', request()->category)->first())->name;
        }elseif (request()->brands) {
           $product = DB::table('catalog_category')->join('catalogs','catalog_category.catalog_id','=','catalogs.id')->join('categories','categories.id','=','catalog_category.category_id')->where('name', request()->brands);
            $category_name = optional(Category::where('name', request()->brands)->first())->name;
        }elseif(request()->substance){
            $product = DB::table('catalog_category')->join('catalogs','catalog_category.catalog_id','=','catalogs.id')->join('categories','categories.id','=','catalog_category.category_id')->where('name', request()->substance);
            $category_name = optional(Category::where('name', request()->substance)->first())->name;
        }
        else{
            $product = Catalog::take(8);
            $category_name = 'All Product';
        }
        // dd($product);

        if (request()->sort == 'Low to High') {
            $product = $product->orderBy('harga')->paginate($number);
        }elseif (request()->sort == 'High to Low') {
            $product = $product->orderBy('harga','desc')->paginate($number);
        }elseif (request()->sort == 'A to Z') {
            $product = $product->orderBy('nama')->paginate($number);
        }elseif (request()->sort == 'Z to A') {
            $product = $product->orderBy('nama','desc')->paginate($number);
        }elseif (request()->price == 'under') {
            $product = $product->where('harga','<=',50000)->orderBy('harga')->paginate($number);
        }elseif(request()->price == 'mid'){
            $product = $product->where([['harga','>',50000],['harga','<=',100000]])->orderBy('harga')->paginate($number);
        }elseif(request()->price == 'high'){
            $product = $product->where([['harga','>=',100000],['harga','<=',200000]])->orderBy('harga')->paginate($number);
        }elseif(request()->price == 'over'){
            $product = $product->where('harga','>=',200000)->orderBy('harga')->paginate($number);
        }
        else{
            $product = $product->paginate($number);
        }

        $brand_hair = Category::where('jenis', 'brand')->where('parent_id','1')->get();
        $brand_face = Category::where('jenis', 'brand')->where('parent_id','2')->get();
        $sub_hair = Category::where('jenis', 'bahan')->where('parent_id','1')->get();
        $sub_face = Category::where('jenis', 'bahan')->where('parent_id','2')->get();
        return view('shop', compact('product', 'categories', 'brand_hair','brand_face','sub_face','sub_hair', 'category_name'));
    }

    public function search(Request $request){

        $request->validate([
            'search'=>'required|min:3'
        ]);

        $search = $request->input('search');
        $result = Catalog::search($search, null, true, true)->groupBy('barcode')->paginate(8);

        // dd($product);
        return view('search-result', compact('result', 'product'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $barcode
     * @return \Illuminate\Http\Response
     */
    public function show($barcode)
    {
        $product_detail = Catalog::where('barcode', $barcode)->firstOrFail();
        $product = Catalog::where('barcode','!=', $barcode)->inRandomOrder()->take(4)->get();
        $link = DB::table('links')->join('catalogs','links.catalog_id','=','catalogs.id')->select('links.link')->addSelect('links.tag')->where('barcode', $barcode)->get();
        $count_link = DB::table('links')->join('catalogs','links.catalog_id','=','catalogs.id')->select('links.link')->addSelect('links.tag')->where('barcode', $barcode)->count();
        // dd($link);
        return view('detail_product', compact('product_detail', 'product', 'link', 'type', 'count_link'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
