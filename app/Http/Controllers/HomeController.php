<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all'] = User::all();
        $data['page'] = "users";
        return view('home',$data);
    }

    public function users()
    {
        if(Auth::User()->is_admin==1){
            $data['all'] = User::all();
            $data['page'] = "users";
            return view('user',$data);
        }else{
            return view('home');
        }
    }

}
