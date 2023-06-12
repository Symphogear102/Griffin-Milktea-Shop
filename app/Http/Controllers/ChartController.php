<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Delivery;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chart()
    {
        $users = Delivery::select(\DB::raw("SUM(zPayment) as count"))
                    ->whereYear('zDate', date('Y'))
                    ->groupBy(\DB::raw("Month(zDate)"))
                    ->pluck('count');
          
        return view('user.chart', compact('users'));
    }

    public function milktea()
{
    return view('user.milktea');
}

public function abouts()
{
    return view('user.abouts');
}

public function milktea1()
{
    return view('user.milkteas1');
}
public function milktea2()
{
    return view('user.milkteas2');
}
public function milktea3()
{
    return view('user.milkteas3');
}
public function milktea4()
{
    return view('user.milkteas4');
}
public function milktea5()
{
    return view('user.milkteas5');
}
public function milktea6()
{
    return view('user.milkteas6');
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
        //
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
        //
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
