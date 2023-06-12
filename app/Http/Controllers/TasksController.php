<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task:: first('id')->get();
        return view('task.task', ['tasks' =>  $tasks ]);

    }

    public function cashiertask()
    {
        $tasks = Task:: first('id')->get();
        return view('cashier.cashiertask', ['tasks' =>  $tasks ]);

    }

    
    public function employeetask()
    {
        $tasks = Task:: first('id')->get();
        return view('employee.task', ['tasks' =>  $tasks ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/deliveries');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
 {
 $tasking = new Task();
 $tasking->tCode = request('tCode');
 $tasking->tFirst = request('tFirst');
 $tasking->tLast = request('tLast');
  $tasking->tAdd = request('tAdd');
  $tasking->tDate = request('tDate');
  $tasking->tTask = request('tTask');
 $tasking->save();
 return redirect('/employees');
 }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $tasks = Task:: find( $task );
        return view('task.taskupdate', compact('task'));
    }

      
    public function show2(Task $tasking)
    {
        $tasks = Task::find($tasking);
        return view('task.update1', compact('tasking'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
    $tasking = Task::find($id);

    $tasking->tFirst = request('tFirst');
    $tasking->tLast = request('tLast');
    $tasking->tAdd = request('tAdd');
    $tasking->tDate = request('tDate');
    $tasking->tTask = request('tTask');
    $tasking->save();
    return redirect('/employeetask/');
    }

    public function update2($id)
    {
    $task = Task::find($id);
    $task->tFirst = request('tFirst');
    $task->tLast = request('tLast');
    $task->tAdd = request('tAdd');
    $task->tDate = request('tDate');
    $task->tTask = request('tTask');
    $task->save();
    return redirect('/employees/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
