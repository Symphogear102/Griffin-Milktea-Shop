<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Task;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = User:: first('id')->get();
        return view('employee.employ', ['employees' => $employees ]);
        
}

public function index1()
{
    $employees = User:: first('id')->get();
    return view('employee.employ', ['employees' => $employees ]);
    
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/employee.employadd');
    }

    public function create1()
    {
        return view('/employee.create1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
 {
 $employee = new User();
 $employee->uStat = request('uStat');
 $employee->vCode = request('vCode');
 $employee->uFirst = request('uFirst'); 
 $employee->uLast = request('uLast');
 $employee->uAddress = request('uAddress');
 $employee->email = request('email');
 $employee->uContact = request('uContact');
 $employee->password = Hash::make('password');
 $employee->save();
 return redirect('/employees');
 }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $employees = Employee:: find( $employee );
        return view('employee.profile', compact('employee'));
        
    }

    
    public function show2(User $employee)
    {
        $employees = User:: find( $employee );
        return view('employee.profile1', compact('employee'));
        
    }

     public function show1(User $employee)
    {
        $employees = User::find($employee);
        return view('employee.create1', compact('employee'));
        
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
    $employee = Employee::find($id);
    $employee->id = request('id');
    $employee->uStat = request('uStat');
    $employee->vCode = request('vCode');
    $employee->email = request('email');
    $employee->uFirst = request('uFirst');
    $employee->uLast = request('uLast');
    $employee->uAddress = request('uAddress');
    $employee->email = request('email');
    $employee->uContact = request('uContact');
    $employee->password = request('password');
    $employee->save();
    return redirect('/employees/');
    }

    public function update1($id)
    {
        $employee = Employee::find($id);
        $employee->id = request('id');
        $employee->uStat = request('uStat');
        $employee->vCode = request('vCode');
        $employee->email = request('email');
        $employee->uFirst = request('uFirst');
        $employee->uLast = request('uLast');
        $employee->uAddress = request('uAddress');
        $employee->email = request('email');
        $employee->uContact = request('uContact');
        $employee->password = request('password');
        $employee->save();
        return redirect('/employees/');
    }

    public function update2($id)
    {
        $employee = Employee::find($id);
        $employee->id = request('id');
        $employee->uStat = request('uStat');
        $employee->vCode = request('vCode');
        $employee->email = request('email');
        $employee->uFirst = request('uFirst');
        $employee->uLast = request('uLast');
        $employee->uAddress = request('uAddress');
        $employee->email = request('email');
        $employee->uContact = request('uContact');
        $employee->password = request('password');
        $employee->save();
        return redirect('/employees/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($pwCode)
    {
    $employee = Employee::find($pwCode);
    $employee->delete();
    return redirect('/employee');
    }

}
