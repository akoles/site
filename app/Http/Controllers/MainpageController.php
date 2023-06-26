<?php

namespace App\Http\Controllers;

use App\Models\Mainpageset;
use App\Models\Menuset;
use App\Models\Titleset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('mainpageset',
            ['mainpageset' => Mainpageset::all(), 'title' => Titleset::all(), 'data' => Menuset::all()]);
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
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request):RedirectResponse
    {
        if ($request->isMethod('post')) {
            $data = $request->post();
        }
        array_shift($data);//remove first element with token info
        $content = $data['content'];
        $link    = $data['link'];
        DB::table('mainpagesets')->truncate();//remove all data from table in DB
        Mainpageset::create(['content' => $content, 'link' => $link]); //create new row in table
        return redirect('account'); //go to dashboard
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mainpageset  $mainpageset
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Mainpageset $mainpageset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mainpageset  $mainpageset
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Mainpageset $mainpageset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mainpageset  $mainpageset
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mainpageset $mainpageset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mainpageset  $mainpageset
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mainpageset $mainpageset)
    {
        //
    }
}

