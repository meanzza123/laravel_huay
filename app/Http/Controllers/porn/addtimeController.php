<?php

namespace App\Http\Controllers\porn;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use DateTime;
use App\addtime;
use App\User;
use Illuminate\Http\Request;
use App\payment;
use Faker\Provider\Payment as FakerPayment;

class addtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $addtime = addtime::where('name', 'LIKE', "%$keyword%")
                ->orWhere('tel', 'LIKE', "%$keyword%")
                ->orWhere('time', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $addtime = addtime::latest()->paginate($perPage);
        }

        return view('porn.addtime.index', compact('addtime'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('porn.addtime.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {


        //Checked Staatus Payment
        if ($request->input('pay_id')) {
            $status = 'actived';
            $updatePay = array(
                'status' => $status
            );
            $payment = payment::where(['id' => $request->input('pay_id'), 'status' => $status])->get();

            if ($payment) {
                return redirect()->back()->with('message', 'addtime updated!');
            }
        }

        $timeNow = strtotime(date("Y-m-d H:i:s"));
        $timeAdd = $request->input('time');
        $remake = '+' . $timeAdd . 'day';

        $userDT = User::where('email', '=', $request->input('tel'))->first();
        $timeUser = strtotime(date($userDT->time));
        if ($timeUser > $timeNow) {
            $timeInsert = date("Y-m-d H:i:s", $timeUser);
            $timeInsert = new DateTime($timeInsert);
            $timeInsert->modify($remake);
        } else {
            $timeInsert = date("Y-m-d H:i:s", $timeNow);
            $timeInsert = new DateTime($timeInsert);
            $timeInsert->modify($remake);
        }

        //updateTime on user
        $updates = array(
            'time' => $timeInsert
        );
        $user = User::where('email', '=', $request->input('tel'))->update($updates);

        // $requestData = $request->all();
        $requestData = array(
            'name' => $userDT->name,
            'tel' => $request->input('tel'),
            'time' => $request->input('time')
        );
        addtime::create($requestData);

        //updateStaatus Payment
        if ($request->input('pay_id')) {
            $status = 'actived';
            $updatePay = array(
                'status' => $status
            );
            $payment = payment::where('id', '=', $request->input('pay_id'))->update($updatePay);
        }


        return redirect('admin/addtime')->with('flash_message', 'addtime added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $addtime = addtime::findOrFail($id);
        return view('porn.addtime.show', compact('addtime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $addtime = addtime::findOrFail($id);

        return view('porn.addtime.edit', compact('addtime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $addtime = addtime::findOrFail($id);
        $addtime->update($requestData);

        return redirect('admin/addtime')->with('flash_message', 'addtime updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        addtime::destroy($id);

        return redirect('admin/addtime')->with('flash_message', 'addtime deleted!');
    }
}
