<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use DateTime;
use App\User;
use Session;

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
        // if (Auth::User()->type == 'admin') {
        //     return view('admin');
        // } else {

        //     //check Time
        //     $timeNow = strtotime(date("Y-m-d H:i:s"));
        //     $userDT = Auth::User()->time;
        //     $timeUser = strtotime(date($userDT));
        //     if ($timeUser < $timeNow) {
        //         //if time expire
        //         $expire = true;
        //         Session::put('expireTime', $expire);
        //         return view('member.payment.create');
        //     } else if (Auth::User()->status == "disabled") {
        //         return view('logout');
        //      } else {
        //         $expire = false;
        //         Session::put('expireTime', $expire);
        //         return view('home');
        //     }
        // }

        //check Time
        $timeNow = strtotime(date("Y-m-d H:i:s"));
        $userDT = Auth::User()->time;
        $timeUser = strtotime(date($userDT));
        if ($timeUser < $timeNow) {
            //if time expire
            $expire = true;
            Session::put('expireTime', $expire);
            return view('member.payment.create');
        } else if (Auth::User()->status == "disabled") {
            return view('logout');
        } else {
            $expire = false;
            Session::put('expireTime', $expire);
            return view('home');
        }
    }
    public function index()
    {
        return  $this->checkAdmin();
    }
}
