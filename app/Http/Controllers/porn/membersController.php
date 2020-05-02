<?php

namespace App\Http\Controllers\porn;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use DateTime;
use App\member;
use Illuminate\Http\Request;

class membersController extends Controller
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
            $members = member::where('name', 'LIKE', "%$keyword%")
                ->orWhere('tel', 'LIKE', "%$keyword%")
                ->orWhere('time', 'LIKE', "%$keyword%")
                ->orWhere('created_at', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $members = member::latest()->paginate($perPage);
        }

        return view('porn.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('porn.members.create');
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

        $requestData = $request->all();

        member::create($requestData);

        return redirect('admin/members')->with('flash_message', 'member added!');
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
        $member = member::findOrFail($id);

        return view('porn.members.show', compact('member'));
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
        $member = member::findOrFail($id);

        return view('porn.members.edit', compact('member'));
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
        if ($request->input('reset') === 'reset') {
            $requestData = $request->all();
            $member = member::findOrFail($id);
            date_default_timezone_set("Asia/Bangkok");
            $datetime = new DateTime();
            $member->time = $datetime->format('Y-m-d H:i:s');
            $member->update($requestData);
        }

        $requestData = $request->all();

        $member = member::findOrFail($id);
        $member->update($requestData);

        return redirect('admin/members')->with('flash_message', 'member updated!');
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
        member::destroy($id);

        return redirect('admin/members')->with('flash_message', 'member deleted!');
    }
}
