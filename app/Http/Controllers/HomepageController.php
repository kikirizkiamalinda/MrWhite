<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Banner;
use App\Setting;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{
  public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Anda harus login dulu');
        }
        else{
            return view('admin/dashboard');
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
    public function logout(){
        Session::put('login',FALSE);
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $a = Setting::where('id', '1')->first();
        // dd($request->sort_hp1, $request->sort_hp2, $request->sort_hp3, $request->sort_hp4,$request->sort_hp5);
        $a->position = $request->sort_hp1;
        $a->update();
        $b = Setting::where('id', '2')->first();
        $b->position = $request->sort_hp2;
        $b->update();
        $c = Setting::where('id', '3')->first();
        $c->position = $request->sort_hp3;
        $c->update();
        $d = Setting::where('id', '4')->first();
        $d->position = $request->sort_hp4;
        $d->update();
        $e = Setting::where('id', '5')->first();
        $e->position = $request->sort_hp5;
        $e->update();
        return redirect()->back();
    }
}
