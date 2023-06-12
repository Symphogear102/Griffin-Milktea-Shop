<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@extends('layouts.cashier')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">
        <a href=""><button class="button1">Day Task</button></a>
</div>
<div class="vertical3">
<div class="costumers">
<table id="customers1">
<td colspan="8" class="text-left">Task</td>
        <tr>
        <th>Full Name</th>
        <th>Day Task</th>
        <th>Date</th>
        </tr>   
        @foreach ($tasks as $tasking)
@if ($tasking->tDate == date('Y-m-d') && Auth()->user()->vCode == $tasking->tCode)
        <tr> 
        <td>{{$tasking->tFirst}} {{$tasking->tLast}}</td>
        <td> {{$tasking->tTask}}</td>
        <td> {{$tasking->tDate}}</td>
        </tr>
@endif
         @endforeach

</div>
</div>

@endsection
</body>
</html>