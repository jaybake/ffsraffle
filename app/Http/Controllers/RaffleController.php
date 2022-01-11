<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreRaffleRequest;
use App\Http\Requests\UpdateRaffleRequest;
use App\Models\Raffle;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class RaffleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
      $myraffle=DB::table('raffles')->
      select('ipaddr','created_at')->
      get();
      /*$raffle = new Raffle;
      $raffle->fname = $req->fname;
      $raffle->phone = $req->phone;
      $raffle->eid = $req->rprefix.substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 7);;
      $raffle->itemno = $req->itemno;
      $raffle->nvalid = $req->nvalid;
      $raffle->ipaddr = $req->ip();*/
      if($myraffle->where($req->ip())->count() <= 2 && carbon::now()){
      DB::table('raffles')->insert([
        'fname' => $req->fname,
        'phone' => $req->phone,
        'eid' => $req->rprefix.'-'.substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 7),
        'itemno' => $req->itemno,
        'nvalid' => $req->nvalid,
        'ipaddr' => $req->ip('ipv4'),
        'created_at' => Carbon::today()
      ]);

    //  $raffle->save();
      return redirect('/')->with(session('success'), 'You are entered into the raffle.');
    }else{
          return redirect('/')->with(session('errors'), 'Too many entries for today.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRaffleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRaffleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Raffle  $raffle
     * @return \Illuminate\Http\Response
     */
    public function show(Raffle $raffle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raffle  $raffle
     * @return \Illuminate\Http\Response
     */
    public function edit(Raffle $raffle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRaffleRequest  $request
     * @param  \App\Models\Raffle  $raffle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRaffleRequest $request, Raffle $raffle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raffle  $raffle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raffle $raffle)
    {
        //
    }
}
