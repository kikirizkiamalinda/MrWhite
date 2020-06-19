<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Banner;
use App\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            $banner = Banner::get();
            return view('\admin\webSetting\banner', compact('banner'));
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $data = ModelUser::where([['email',$email],['password',$password]])->count();

        if($data==1){ //apakah email tersebut ada atau tidak
          $data = ModelUser::where([['email',$email],['password',$password]])->first();
          Session::put('email',$data->email);
          Session::put('nama',$data->nama);
          Session::put('foto',$data->foto);
          Session::put('login',TRUE);
          return redirect('admin');

        }
        else{
            return redirect('login')->with('alert','Email atau Password Salah!!!');
        }
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
         $request->validate([
            'name'=>'required|min:3',
            'gambarban' => 'required|image|mimes:jpg,png,jpeg',
            'today'=> Carbon::now(),
            'date_show'=>'required|date|before:date_off|after_or_equal:today',   
            'date_off'=>'required|date|after:date_show'
        ]);

        $data = new Banner;
        $data->name = $request->name;
        $file = $request->file('gambarban');
        $fileName = $file->getClientOriginalName();
        $request->file('gambarban')->move("image/", $fileName);
        $data->url_gambar = $fileName;
        $data->date_show = $request->date_show;
        $data->date_off = $request->date_off;
        $data->url_link = $request->link;

        $data->save();
        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'gambarban' => 'required|image|mimes:jpg,png,jpeg',
            'today'=> Carbon::now(),
            'date_show'=>'required|date|before:date_off|after_or_equal:today',   
            'date_off'=>'required|date|after:date_show'
        ]);
        $id = $request->id;
        $update = Banner::where('id', $id)->first();
        $update->name = $request->name;
        $file = $request->file('gambarban');
        $fileName = $file->getClientOriginalName();
        $request->file('gambarban')->move("image/", $fileName);
        $update->url_gambar = $fileName;
        $update->date_show = $request->date_show;
        $update->date_off = $request->date_off;
        $update->url_link = $request->link;

        // if($request->file('gambar') == "")
        // {
        //     $update->gambar = $update->gambar;
        // }
        // else
        // {
        //     $file       = $request->file('gambar');
        //     $fileName   = $file->getClientOriginalName();
        //     $request->file('gambar')->move("image/", $fileName);
        //     $update->url_gambar = $fileName;
        // }

        $update->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $delete = Banner::where('id', $id)->first();
        $delete->delete();
        return redirect()->back();
    }
}
