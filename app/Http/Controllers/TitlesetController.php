<?php

namespace App\Http\Controllers;

use App\Models\Menuset;
use App\Models\Titleset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TitlesetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $val = Titleset::all();
        return view('titleset', ['title' => Titleset::all(), 'data' => Menuset::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->post();
        }

        $titles = $data['title'];
        DB::table('titlesets')->truncate();//remove all data from table in DB
        Titleset::create(['title' => $titles]); //create new row in table
        return redirect('account'); //go to dashboard
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Titleset $titleset
     * @return \Illuminate\Http\Response
     */
    public
    function show(Titleset $titleset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Titleset $titleset
     * @return \Illuminate\Http\Response
     */
    public
    function edit(Titleset $titleset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Titleset $titleset
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, Titleset $titleset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Titleset $titleset
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(Titleset $titleset)
    {
        //
    }
}
