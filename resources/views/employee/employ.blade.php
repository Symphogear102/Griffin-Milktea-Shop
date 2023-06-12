<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">
        Add Employee:
        <a href="/addemployee"><button class="button1">+</button></a>
</div>
<div class="vertical3">
<div class="costumers">
        <table id="customers1">
        <td colspan="8" class="text-left">Admin</td>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Position</th>
        </tr>   
         @foreach ($employees as $user)
         @if ($user->uStat == '0' && $user->id == '1')
        <tr> 
        <td>{{$user->uFirst}}</td>
        <td> {{$user->uLast}}</td>
        <td> {{$user->uAddress}}</td>
        <td> {{$user->uContact}}</td>
        <td>Admin</td>
        </tr>
        <td colspan="8" class="text-left">DeliveryBoy/Cashier</td>
        @endif

       
        @if ($user->uStat == '1')
        <tr> 
        <td>{{$user->uFirst}}</td>
        <td> {{$user->uLast}}</td>
        <td> {{$user->uAddress}}</td>
        <td> {{$user->uContact}}</td>
        <td>DeliveryBoy</td>
        <form action="users\{{$user->id}}">
        <td><button type="submit" class="button1">Task/Fired</button></td>
        </form> 
        </tr>
        @endif

        @if ($user->uStat == '2')
        <tr> 
        <td>{{$user->uFirst}}</td>
        <td> {{$user->uLast}}</td>
        <td> {{$user->uAddress}}</td>
        <td> {{$user->uContact}}</td>
        <td>Cashier</td>
        <form action="users\{{$user->id}}">
        <td><button type="submit" class="button1">Task/Fired</button></td>
        </form>
        </tr>
        @endif
        @endforeach
</table>
</div>
</div>
@endsection
</body>
</html>