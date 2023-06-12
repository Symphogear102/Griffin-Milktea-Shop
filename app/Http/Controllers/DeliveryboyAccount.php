<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DeliveryboyAccount extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User:: first('id')->get();
        return view('delivery.deliveryboyaccount', ['user' => $user ]);
    }

    public function successupdate()
    {
        return view('delivery.successupdate');
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $users = User:: find( $user );
        return view('delivery.deliveryboyaccount', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->input();
        $request->session()->put('Data', $data);

        $output = $request->session()->get('Data');

        if ($output['uStat'] == Auth()->user()->uStat) {
        $costumer = User::find(Auth()->user()->id);
        $costumer->uStat = request('uStat');
        $costumer->vCode = request('vCode');
        $costumer->uFirst = request('uFirst');
        $costumer->uLast = request('uLast');
        $costumer->uContact = request('uContact');
        $costumer->uAddress = request('uAddress');
        $costumer->uStreet = request('uStreet');
        $costumer->save();
    return view('delivery.successupdate');
   
    }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
