<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
input[type=text], select {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px black;
  border-radius: 4px;
  float: center;
}
</style>
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">
<form action="/paidandcancel" method="POST">
@csrf
       Search: <select name="search" id="zAdd">
    <option name="a2" value="Paid">Paid Order</option>
    <option name="a3" value="Cancel">Cancel Order</option>
</select>
      <input type="submit" class="button1" value="Search" >
      </form>
</div>
<div class="addemploy">
       
</div>
<div class="vertical3">
<div class="costumers">
        <table id="customers1">
        <td colspan="8" class="text-left">Paid/Cancel Orders</td>
        <tr>
        <th>Full Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Payment</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Date</th>
        </tr>   
         @foreach ($order as $user)
        @if ( $user->zPayment == '0' && $user->uStat == '0')
        <tr> 
        <td>{{$user->zFirst}} {{$user->zLast}}</td>
        <td> {{$user->zAdd}},{{$user->zStreet}}</td>
        <td> {{$user->zContact}}</td>
        <td style='color: black; background-color:  #ff1a1a; width:'><b>Cancel Order</b></td>
        <td> {{$user->zItem}}</td>
        <td> {{$user->zSize}}</td>
        <td> {{$user->zDate}}</td>
        </tr>
        @endif
        @endforeach
        
</table>
</div>
</div>
@endsection
</body>
</html>