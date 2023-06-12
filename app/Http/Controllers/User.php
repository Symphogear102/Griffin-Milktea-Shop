<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    function dbCheck(Request $request)
    {
        $data = $request->input();
        $request->session()->put('Data', $data);

        $output = $request->session()->get('Data');

        if($output['search'] == 'Hulo') 
        {
            
            return view('/db');
        } 

        if($output['search'] == 'Pag-Asa') 
        {
            return view('delivery.delivery');
        } 
    }
    

    public function __construct()
    {
        $this->middleware('auth');
    }
}
