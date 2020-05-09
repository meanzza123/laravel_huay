<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\member;
use App\payment;
use  Image;
use DateTime;
use App\User;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
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

    public function store(Request $request)
    {
        $requestData = $request->all();
        $timeNow = strtotime(date("Y-m-d"));
        if ($request->hasFile('image')) {
            $lastnameImg = $requestData['image']->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/uploadss/', Auth::User()->email  . $timeNow . '.' . $lastnameImg);
            $requestData['image'] = '/uploadss/' . Auth::User()->email  . $timeNow . '.' . $lastnameImg;
        }
        payment::create($requestData);

        return redirect('main/payment')->with('flash_message', 'payment added!');
    }

    public function create()
    {

        return view('member.payment.create');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $id = '';
        $user = Auth::User()->email;
        $profile = member::findOrFail($user);
        $profile->update($requestData);

        return redirect('main/payment/')->with('flash_message', 'member updated!');
    }

    public function show($id)
    {
        $payment = payment::findOrFail($id);
        return view('member.payment.show', compact('payment'));
    }


    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        $payments = payment::where('tel', '=', Auth::User()->email)->latest()->paginate($perPage);
        return view('member.payment.index', compact('payments'));
    }
}
