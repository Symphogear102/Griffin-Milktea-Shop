<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">
       
</div>
<div class="vertical3">
<div class="costumers">
        <table id="customers1">
        <td colspan="8" class="text-left">Costumer</td>
        <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Contact</th>
        </tr>   
         @foreach ($users as $user)
         @if ($user->uStat == '3')
        <tr> 
        <td>{{$user->uFirst}} {{$user->uLast}}</td>
        <td>{{ $user->email }}</td>
        <td> {{$user->uAddress}}, {{$user->uStreet}}</td>
        <td> {{$user->uContact}}</td>
        </tr>
        @endif
        @endforeach
</table>
</div>
</div>
@endsection
</body>
</html>