<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class CashiersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cashiers = Delivery:: first('id')->get();
        return view('cashier.cashier', ['cashiers' =>  $cashiers ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/cashier.create');
    }

    public function create1()
    {
        return view('/cashier.create1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $request->session()->put('Data', $data);

        $output = $request->session()->get('Data');

        if($output['zItem'] == 'Milktea Black Coffee' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '70';
            $total = $quan * $price;
            $yeah = "OrderBy:";
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }

        if($output['zItem'] == 'Milktea Black Coffee' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '85';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }

        if($output['zItem'] == 'Yakult MilkTea' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '70';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }
    
        if($output['zItem'] == 'Yakult MilkTea' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '85';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }

        if($output['zItem'] == 'Cheesecake MilkTea' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '75';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }

        if($output['zItem'] == 'Cheesecake MilkTea' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '90';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }

        if($output['zItem'] == 'Pudding MilkTea' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '70';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }

        if($output['zItem'] == 'Pudding MilkTea' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '80';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }
        
        if($output['zItem'] == 'MatchaLatte MilkTea' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '70';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }

        if($output['zItem'] == 'MatchaLatte MilkTea' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '80';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }

        if($output['zItem'] == 'ToffeeNut MilkTea' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '70';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }

        if($output['zItem'] == 'ToffeeNut MilkTea' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '80';
            $total = $quan * $price;
        $delivery = new Delivery();
        $delivery->zCode = request('zCode');
        $delivery->zStat = request('zStat');
        $delivery->zItem = request('zItem');
        $delivery->zFirst = request('zFirst');
        $delivery->zLast = request('zLast');
        $delivery->zAdd = request('zAdd');
        $delivery->zStreet = request('zStreet');
        $delivery->zContact = request('zContact');
        $delivery->uStat = request('uStat');
        $delivery->zSize = request('zSize');
        $delivery->zQuantity = request('zQuantity');
        $delivery->zDate = request('zDate');
        $delivery->zMonth = request('zMonth');
        $delivery->zMonth1 = request('zMonth1');
        $delivery->zYear = request('zYear');
        $delivery->zPayment = $total;
        $delivery->save();
        return redirect('/cashier');
        }


        if ($output['zItem'] == '- Name of Product -') {
            return view('cashier.searchproduct');
        }

        
        if ($output['zSize'] == '- Size of Product -') {
            return view('cashier.searchsize');
        }

        if ($output['zAdd'] == '- Address -') {
            return view('cashier.searchaddress');
        }

        if ($output['zQuantity'] == '0') {
            return view('cashier.searchquantity');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $cashier)
    {
        $cashiers = Delivery:: find( $cashier );
        return view('cashier.cashierupdate', compact('cashier'));
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
    $cashier = Delivery::find($id);
    $cashier->uStat = request('uStat');
    $cashier->zPayment = request('zPayment');
    $cashier->zFirst = request('zFirst');
    $cashier->zLast = request('zLast');
    $cashier->save();
    return redirect('/cashier/');
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
