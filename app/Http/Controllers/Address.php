<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Address extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user = Delivery:: first('id')->get();
        return view('month.month', ['user' => $user ]);
    }


    function month(Request $request)
    {
        $user = Delivery:: first('id')->get();
        return view('month.month', ['user' => $user ]);
        
        $data = $request->input();
        $request->session()->put('Data', $data);

        $output = $request->session()->get('Data');

        $data = Delivery:: where('zStat', '1')->get();
            return view('month.month', ['data' => $data]);

            if($output['search'] == 'December') 
            {
                $month = "December";
            $dailys = Delivery:: where('zMonth' , $month)->sum('zPayment');
            return view('month.december', ['dailys' => $dailys ]);
            } 
    }


    function monthly(Request $request, Delivery $user)
    {

        $data = $request->input();
        $request->session()->put('Data', $data);

        $output = $request->session()->get('Data');

        if($output['search'] == '01') 
        {
            $month = "01";
            $months = Delivery:: first('id')->get();
            return view('month.january', ['months' => $months ]);
        } 
        
        if($output['search'] == '02') 
        {
            $month = "02";
            $months = Delivery:: first('id')->get();
            return view('month.febuary', ['months' => $months ]);
        } 

        if($output['search'] == '03') 
        {
            $month = "03";
            $months = Delivery:: first('id')->get();
            return view('month.march', ['months' => $months ]);
        } 

        if($output['search'] == '04') 
        {
            $month = "04";
            $months = Delivery:: first('id')->get();
            return view('month.april', ['months' => $months ]);
        } 

        if($output['search'] == '05') 
        {
            $month = "05";
            $months = Delivery:: first('id')->get();
            return view('month.may', ['months' => $months ]);
        } 

        if($output['search'] == '06') 
        {
            $month = "06";
            $months = Delivery:: first('id')->get();
            return view('month.june', ['months' => $months ]);
        } 

        if($output['search'] == '07') 
        {
            $month = "07";
            $months = Delivery:: first('id')->get();
            return view('month.july', ['months' => $months ]);
        } 

        if($output['search'] == '08') 
        {
            $month = "08";
            $months = Delivery:: first('id')->get();
            return view('month.august', ['months' => $months ]);
        } 

        if($output['search'] == '09') 
        {
            $month = "09";
            $months = Delivery:: first('id')->get();
            return view('month.september', ['months' => $months ]);
        } 

        if($output['search'] == '10') 
        {
            $month = "10";
            $months = Delivery:: first('id')->get();
            return view('month.october', ['months' => $months ]);
        } 

        if($output['search'] == '11') 
        {
            $month = "11";
            $months = Delivery:: first('id')->get();
            return view('month.november', ['months' => $months ]);
        } 

        if($output['search'] == '12') 
        {
            $month = "12";
            $months = Delivery:: first('id')->get();
            return view('month.december', ['months' => $months ]);
        } 

        
        if($output['search'] == '- Month -') 
        {
        return view('month.search');
        } 
    }




    function dbCheck(Request $request)
    {
        $data = $request->input();
        $request->session()->put('Data', $data);

        $output = $request->session()->get('Data');

        if($output['search'] == 'Hulo') 
        {
            $addresses = Delivery:: first('zAdd')->get();
            return view('address.hulo', ['addresses' =>  $addresses ]);
        } 

        if($output['search'] == 'Pag-asa') 
        {
            $addresses = Delivery:: first('zAdd')->get();
            return view('address.pag-asa', ['addresses' =>  $addresses ]);
        } 

        if($output['search'] == 'Catanghalan') 
        {
            $addresses = Delivery:: first('zAdd')->get();
            return view('address.catanghalan', ['addresses' =>  $addresses ]);
        } 

        if($output['search'] == 'Lawa') 
        {
            $addresses = Delivery:: first('zAdd')->get();
            return view('address.lawa', ['addresses' =>  $addresses ]);
        } 
    
        if($output['search'] == 'Paco') 
        {
            $addresses = Delivery:: first('zAdd')->get();
            return view('address.paco', ['addresses' =>  $addresses ]);
        } 

        if($output['search'] == 'Paliwas') 
        {
            $addresses = Delivery:: first('zAdd')->get();
            return view('address.paliwas', ['addresses' =>  $addresses ]);
        } 

        if($output['search'] == 'Panghulo') 
        {
            $addresses = Delivery:: first('zAdd')->get();
            return view('address.panghulo', ['addresses' =>  $addresses ]);
        } 

        if($output['search'] == 'San Pascual') 
        {
            $addresses = Delivery:: first('zAdd')->get();
            return view('address.sanpascual', ['addresses' =>  $addresses ]);
        } 

        if($output['search'] == 'Tawiran') 
        {
            $addresses = Delivery:: first('zAdd')->get();
            return view('address.tawiran', ['addresses' =>  $addresses ]);
        } 

        if($output['search'] == '- Address -') 
        {
        return view('address.search');
        } 
    }

    
    function dbCheck1(Request $request)
    {
        $data = $request->input();
        $request->session()->put('Data', $data);

        $output = $request->session()->get('Data');

        if($output['search'] == 'Paid') 
        {
            $order = Delivery:: first('uStat')->get();
            return view('user.paid', ['order' =>  $order ]);
        } 

        if($output['search'] == 'Cancel') 
        {
            $order = Delivery:: first('uStat')->get();
            return view('user.cancel', ['order' =>  $order ]);
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
        //
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
    public function update(Request $request, Delivery $delivery)
    {
        //
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
