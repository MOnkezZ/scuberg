<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
            $data['all'] = User::all();
            $data['page'] = "users";
            return view('user',$data);
    }

}
