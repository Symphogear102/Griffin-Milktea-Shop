<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Delivery;

class HomeController extends Controller
{
    public function index()
    {
        
        $employees = User:: first('id')->get();
        return view('employee.employ', ['employees' => $employees ]);
    }

    

public function employeetransac()
{
    
    $transactions = Delivery:: first('id')->get();
    return view('employee.employeetransac', ['transactions' => $transactions ]);
    
}

public function show(User $user)
    {
        $employees = User:: find( $user );
        return view('employee.profile', compact('user'));
        
    }

    public function update($id)
    {
        $user = User::find($id);
        $user->uStat = request('uStat');
        $user->vCode = request('vCode');
        $user->email = Hash::make('email');
        $user->uFirst = request('uFirst');
        $user->uLast = request('uLast');
        $user->uAddress = request('uAddress');
        $user->uContact = request('uContact');
        $user->save();
    return redirect('/employees/');
    }

    public function show2(User $users)
    {
        $employees = User:: find( $users );
        return view('employee.profile1', compact('users'));
        
    }

    public function update2($id)
    {
        $user = User::find($id);
        $user->id = request('id');
        $user->uStat = request('uStat');
        $user->vCode = request('vCode');
        $user->email = request('email');
        $user->uFirst = request('uFirst');
        $user->uLast = request('uLast');
        $user->uAddress = request('uAddress');
        $user->email = request('email');
        $user->uContact = request('uContact');
        $user->password = request('password');
        $user->save();
        return redirect('/employees/');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   

   
    public function home()
    {

        if (Auth()->user()->uStat == '0') {
      
            return view('user.verifiedcode');
        } 

        if (Auth()->user()->uStat == '1') {
      
            return view('user.verifiedcode');
        }
    
             if (Auth()->user()->uStat == '2') {
          
            return view('user.verifiedcode');
        }
             if (Auth()->user()->uStat == '3') {
          
                return view('user.verifiedcode');
        } else {
            return view('auth.login');
        }   
}


public function homepage()
    
{
    

    if (Auth()->user()->uStat == '0') {
 

        $deliveries = Delivery:: first('id')->get();
        $deliveries = Delivery::select(\DB::raw("SUM(zPayment) as count"))
        ->whereYear('zDate', date('Y'))
        ->where('uStat', 0)
        ->groupBy(\DB::raw("Month(zDate)"))
        ->pluck('count');

return view('user.dash', compact('deliveries'));
        
    } 
    

    if (Auth()->user()->uStat == '1') {
        
        return view('delivery.home');
    } 

         if (Auth()->user()->uStat == '2') {
      
        return view('cashier.homecashier');
    }

         if (Auth()->user()->uStat == '3') {
      
        return view('costumer.home');
    } else {
        return view('auth.login');
    }

}


public function verified(Request $request)
    
{

    $data = $request->input();
        $request->session()->put('Data', $data);

        $output = $request->session()->get('Data');

    if (Auth()->user()->vCode == $output['vCode'] && Auth()->user()->uStat == '0') {
  
        return view('user.success');
    } 
    
    if (Auth()->user()->vCode == $output['vCode'] && Auth()->user()->uStat == '1') {
  
        return view('user.success');
    } 

    if (Auth()->user()->vCode == $output['vCode'] && Auth()->user()->uStat == '2') {
  
        return view('user.success');
    }

    if (Auth()->user()->vCode == $output['vCode'] && Auth()->user()->uStat == '3') {
  
        return view('user.success');
    } else {    
        return view('user.unsuccess');  
    }


}
}