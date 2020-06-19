<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\cata_cate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $rules = [
            'jenis' => 'required',
            'nama' => 'required',
        ];

        $v = Validator::make($request->all(), $rules);

        if ($v->fails())
        {
            return redirect()->back()->with('error', 'Tidak boleh kosong');
        }
        else{
            if($request->perawatan == 1){
              $hair = new Category();
              $hair->jenis = $request->jenis;
              $hair->name = $request->nama;
              $hair->parent_id = $request->perawatan;
              $hair->save();
            }
            elseif($request->perawatan == 2){
              $face = new Category();
              $face->jenis = $request->jenis;
              $face->name = $request->nama;
              $face->parent_id = $request->perawatan;
              $face->save();
            }
            return redirect()->back()->with('success', 'Berhasil disimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            $category = Category::find($id);
            $perawatan = Category::where('parent_id','0')->get();
            $jenis = Category::where('parent_id','>','0')->groupBy('jenis')->get();
            return view('admin/katalog/editKategori', compact('category','jenis','perawatan'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'jenis' => 'required',
            'nama' => 'required',
        ];

        $v = Validator::make($request->all(), $rules);

        if ($v->fails())
        {
            return redirect()->back()->with('error', 'Tidak boleh kosong');
        }
        else{
            $update = Category::where('id', $request->id_category)->first();
            $update->parent_id = $request->perawatan;
            $update->jenis = $request->jenis;
            $update->name = $request->nama;
            $update->update();
            
            return redirect('admin/katalog/dataKategori')->with('success', 'Berhasil disimpan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->hairperawatan == 1){
            $delete = Category::where('id', $request->hairid)->first();
            $delete->delete();
            $cata_cate = cata_cate::where('category_id', $request->hairid)->get();
            // dd($cata_cate);
            foreach ($cata_cate as $c) {
                $c->delete();
                $a = cata_cate::where('catalog_id',$c->catalog_id);
                $a->delete();
            }
        }
        elseif($request->faceperawatan == 2){
            $delete = Category::where('id', $request->faceid)->first();
            $delete->delete();
            $cata_cate = cata_cate::where('category_id', $request->faceid)->get();
            foreach ($cata_cate as $c) {
                $c->delete();
                $a = cata_cate::where('catalog_id',$c->catalog_id);
                $a->delete();
            }
        }

        return redirect()->back()->with('success', 'Berhasil dihapus!');
    }
}
