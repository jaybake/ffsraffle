<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreextraentriesRequest;
use App\Http\Requests\UpdateextraentriesRequest;
use App\Models\extraentries;

class ExtraentriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $extras = DB::table('extraentries')->select('*')->get();
      return view('xdashboard')->with(compact('extras'));
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
     * @param  \App\Http\Requests\StoreextraentriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreextraentriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\extraentries  $extraentries
     * @return \Illuminate\Http\Response
     */
    public function show(extraentries $extraentries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\extraentries  $extraentries
     * @return \Illuminate\Http\Response
     */
    public function edit(extraentries $extraentries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateextraentriesRequest  $request
     * @param  \App\Models\extraentries  $extraentries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateextraentriesRequest $request, extraentries $extraentries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\extraentries  $extraentries
     * @return \Illuminate\Http\Response
     */
    public function destroy(extraentries $extraentries)
    {
        //
    }
}
