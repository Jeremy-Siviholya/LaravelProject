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
        User::create($request->all());  
       
    }

    public function getUser()
    {
       $users = User::all();
       return view('about',['users'=>$users]);
        //return response()->json(['data'=>$user]);
    }

    public function updateUser(Request $query, $id)
    {
        User::find($id->update($query->all()));
    }

    public function destroyUser($id)
    {
        User::find($id)->delete();
    }

}
