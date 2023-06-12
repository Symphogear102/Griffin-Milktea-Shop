<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\User;
use Illuminate\Http\Request;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costumers = Delivery:: first('id')->get();
        return view('costumer.costumerorder', ['costumers' => $costumers ]);
    }

    public function milkteaproduct()
    {
        return view('costumer.product');
    }

    public function milktea1()
    {
        return view('costumer.milktea1');
    }
    public function milktea2()
    {
        return view('costumer.milktea2');
    }
    public function milktea3()
    {
        return view('costumer.milktea3');
    }
    public function milktea4()
    {
        return view('costumer.milktea4');
    }
    public function milktea5()
    {
        return view('costumer.milktea5');
    }
    public function milktea6()
    {
        return view('costumer.milktea6');
    }

    public function about()
    {
        return view('costumer.costumerabout');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/costumer.create');
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
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }

        if($output['zItem'] == 'Milktea Black Coffee' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '85';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }

        if($output['zItem'] == 'Yakult MilkTea' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '70';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }
    
        if($output['zItem'] == 'Yakult MilkTea' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '85';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }

        if($output['zItem'] == 'Cheesecake MilkTea' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '75';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }

        if($output['zItem'] == 'Cheesecake MilkTea' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '90';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }

        if($output['zItem'] == 'Pudding MilkTea' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '70';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }

        if($output['zItem'] == 'Pudding MilkTea' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '80';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }
        
        if($output['zItem'] == 'MatchaLatte MilkTea' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '70';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }

        if($output['zItem'] == 'MatchaLatte MilkTea' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '80';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }

        if($output['zItem'] == 'ToffeeNut MilkTea' && $output['zSize'] == 'Medium') {
            $quan = $output['zQuantity'];
            $price = '70';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }

        if($output['zItem'] == 'ToffeeNut MilkTea' && $output['zSize'] == 'Large') {
            $quan = $output['zQuantity'];
            $price = '80';
            $total = $quan * $price;
            $costumer = new Delivery();
            $costumer->zCode = request('zCode');
            $costumer->zStat = request('zStat');
            $costumer->zItem = request('zItem');
            $costumer->zFirst = request('zFirst');
            $costumer->zLast = request('zLast');
            $costumer->zAdd = request('zAdd');
            $costumer->zStreet = request('zStreet');
            $costumer->zContact = request('zContact');
            $costumer->uStat = request('uStat');
            $costumer->zSize = request('zSize');
            $costumer->zQuantity = request('zQuantity');
            $costumer->zDate = request('zDate');
            $costumer->zMonth = request('zMonth');
            $costumer->zMonth1 = request('zMonth1');
            $costumer->zYear = request('zYear');
            $costumer->zPayment = $total;
            $costumer->save();
            return redirect('/costumer');
        }

        if ($output['zItem'] == '- Name of Product -') {
            return view('costumer.searchproduct');
        }

        
        if ($output['zSize'] == '- Size of Product -') {
            return view('costumer.searchsize');
        }

        if ($output['zAdd'] == '- Address -') {
            return view('costumer.searchaddress');
        }

        if ($output['zQuantity'] == '- Quantity -') {
            return view('costumer.searchquantity');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $costumer)
    {
        $costumers = Delivery:: find( $costumer );
        return view('costumer.costumerupdate', compact('costumer'));
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
        $costumer = Delivery::find($id);
        $costumer->uStat = request('uStat');
        $costumer->zPayment = request('zPayment');
        $costumer->zFirst = request('zFirst');
        $costumer->zLast = request('zLast');
        $costumer->save();
    return redirect('/costumer/');
    }

    public function update1()
    {
        $costumer = User::find($id);
        $costumer->uStat = request('uStat');
        $costumer->zPayment = request('zPayment');
        $costumer->zFirst = request('zFirst');
        $costumer->zLast = request('zLast');
        $costumer->save();
    return view('costumer.costumeraccount');
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
