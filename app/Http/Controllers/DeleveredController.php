<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;


class DeleveredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $delivereds = Delivery:: first('id')->get();
        return view('delivery.delivery', ['delivereds' =>  $delivereds ]);

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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        $delivereds = Delivery:: find( $delivery );
        return view('delivery.delboypaid', compact('delivery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
    $delivery = Delivery::find($id);
    $delivery->zPayment = request('zPayment');
    $delivery->uStat = request('uStat');
    $delivery->zFirst = request('zFirst');
    $delivery->zLast = request('zLast');
    $delivery->save();
    return redirect('/delivery/');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        //
    }
}
