<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    // public function getIndex(){
    //     return view('index');
    // }
    public function getIndex(){
        $user= User::select('id','name','email')->orderby('id','DESC')->get()->toArray();
        //print_r($user);
        return view('index',compact('user'));
    }
    
}
