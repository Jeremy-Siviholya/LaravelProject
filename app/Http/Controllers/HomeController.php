<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function login(){
        return view('login');
    }
    public function services(){
        return view('services');
    }
    public function contact(){
        return view('contact');
    }

    public function test()
    {

    }

    public function loginpost(Request $request)
    {
        $user =new User();
        $user->name=$request->name;
        $user->telephone=$request->telephone;
        $user->password=$request->password;
        $user->save();
        return 'successfully';
        //dd($request->all());
    }
}
