<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfficehourRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class OfficehourController
 * @package App\Http\Controllers
 */
class OfficehourController extends Controller
{
    /**
     * @param OfficehourRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(OfficehourRequest $request)
    {
        return view('index');
    }

    /**
     * @param OfficehourRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(OfficehourRequest $request)
    {
        return redirect('/');
    }

    /**
     * @param OfficehourRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(OfficehourRequest $request)
    {
        return redirect('/');
    }

    /**
     * @param OfficehourRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(OfficehourRequest $request)
    {
        return view('singleOfficehour');
    }

    /**
     * @param OfficehourRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(OfficehourRequest $request)
    {
        return redirect('/');
    }


    /**
     * @param OfficehourRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(OfficehourRequest $request)
    {
        return redirect('/');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(OfficehourRequest $request)
    {
        return view('singleOfficehour');
    }
}
