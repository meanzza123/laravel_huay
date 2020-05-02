<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function  checkAdmin()
    {
        if(Auth::User()->type=='admin'){
            return view('home');

         } else {
           return view('home');
         }
    }
    public function index()
    {
        $this->checkAdmin();
        return view('home');
    }
}
