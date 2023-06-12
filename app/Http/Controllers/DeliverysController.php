<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Providers\RouteServiceProvider;

class DeliverysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $deliveries = Delivery:: first('id')->get();
        return view('delivery.delboyorder',  ['deliveries' =>  $deliveries ]);

        
    }


    function dash()
    {
    
        return view('user.dash');

    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/delivery.create');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
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
        return redirect('/deliveries');
        }

        if ($output['zItem'] == '- Name of Product -') {
            return view('delivery.searchproduct');
        }

        
        if ($output['zSize'] == '- Size of Product -') {
            return view('delivery.searchsize');
        }

        if ($output['zAdd'] == '- Address -') {
            return view('delivery.searchaddress');
        }

        if ($output['zQuantity'] == '0') {
            return view('delivery.searchquantity');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        $deliveries = Delivery:: find( $delivery );
        return view('delivery.delboyupdate', compact('delivery'));
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
    $delivery->uStat = request('uStat');
    $delivery->zPayment = request('zPayment');
    $delivery->zFirst = request('zFirst');
    $delivery->zLast = request('zLast');
    $delivery->save();
    return redirect('/deliveries/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $delivery = Delivery::find($id);
    $delivery->delete();
    return redirect('/employee');
    }
}
