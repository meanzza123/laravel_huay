<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\member;

class ProfileController extends Controller
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
    public function  checkUser()
    {
        // if (Auth::User()->type == 'admin') {
        //     return view('admin');
        // } else {
        //     return view('home');
        // }
    }

    public function edit($id)
    {
        $id = '';
        $user = Auth::User()->id;
        $profile = member::findOrFail($user);
        return view('member.profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        // if ($request->input('reset') === 'reset') {
        //     $requestData = $request->all();
        //     $member = member::findOrFail($id);
        //     date_default_timezone_set("Asia/Bangkok");
        //     $datetime = new DateTime();
        //     $member->time = $datetime->format('Y-m-d H:i:s');
        //     $member->update($requestData);
        // }

        $requestData = $request->all();
        $id = '';
        $user = Auth::User()->id;
        $profile = member::findOrFail($user);
        $profile->update($requestData);

        return redirect('main/profile/')->with('flash_message', 'member updated!');
    }

    public function index()
    {
        return view('member.profile.show');
    }
}
