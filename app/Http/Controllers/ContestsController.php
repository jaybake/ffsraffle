<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecontestsRequest;
use App\Http\Requests\UpdatecontestsRequest;
use App\Models\contests;
use Illuminate\Support\Facades\DB;
use Auth;
class ContestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contests = DB::table('contests')->
        pluck('rname', 'rprefix')->toarray();

        if(Auth::check()){
          return view('/dashboard');
        }else{
          return view('welcome')->with(compact('contests'));
        }
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
     * @param  \App\Http\Requests\StorecontestsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecontestsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contests  $contests
     * @return \Illuminate\Http\Response
     */
    public function show(contests $contests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contests  $contests
     * @return \Illuminate\Http\Response
     */
    public function edit(contests $contests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontestsRequest  $request
     * @param  \App\Models\contests  $contests
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecontestsRequest $request, contests $contests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contests  $contests
     * @return \Illuminate\Http\Response
     */
    public function destroy(contests $contests)
    {
        //
    }
}
