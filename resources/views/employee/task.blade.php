<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="vertical3">
<div class="costumers">
<table id="customers1">
<td colspan="8" class="text-left">Task of Employee</td>
        <tr>
        <th>Full Name</th>
        <th>Day Task</th>
        <th>Date</th>
        </tr>   
        @foreach ($tasks as $tasking)
@if ($tasking->tDate == date("Y-m-d"))
        <tr> 
        <td>{{$tasking->tFirst}} {{$tasking->tLast}}</td>
        <td> {{$tasking->tTask}}</td>
        <td> {{$tasking->created_at}}</td>
        <form action="tasks\{{$tasking->id}}">
        <td><button type="submit" class="button1">Update Task</button></td>
        </form>
        </tr>
        @else 
        @if($tasking->tTask == FALSE)
        <tr>
        <td>Yeah</td>
        </tr>
        
@endif
@endif
         @endforeach

</div>
</div>

@endsection
</body>
</html>