<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/style1.css">
<style>
.button3 {
        float: left;
        background-color:  #52527a;
  border: none;
  color: white;
  padding: 12px 1px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
      margin: 3px 1px;
  cursor: pointer;
  border-radius: 7px;
  font-family: "Copperplate Gothic Light";
 
} 

.button3:hover {
        background-color: #cccccc;
  color: black;
  transition: 2s;

}
</style>
@extends('layouts.costumer1')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">

        <a href="/costumerordering"><button class="button1">Order Again</button></a>
</div>

<div class="vertical4">
<div class="costumers">
<table id="customers">
<td colspan="10" class="text-left1">My Order</td>
        <tr>
        <th>Full Name</th>
        <th>Address</th>
        <th>Quantity</th>
        <th>Size</th>
        <th>Item</th>
        <th>Payment</th>
        <th>Status</th>
        </tr>  
        @foreach ($costumers as $costumer)
@if ($costumer->zCode == Auth()->user()->vCode && $costumer->uStat == '1' && $costumer->zDate == date("Y-m-d"))
        <tr> 
        <td>{{$costumer->zFirst}} {{$costumer->zLast}}</td>
        <td> {{$costumer->zAdd}},{{$costumer->zStreet}}</td>
        <td> {{$costumer->zQuantity}}</td>
        <td> {{$costumer->zSize}}</td>
        <td> {{$costumer->zItem}}</td>
        <td> {{$costumer->zPayment}}</td>
        <td style='color: black; background-color: #cccc00;'><b>Pending</b></td>
        <form action="costumer\{{$costumer->id}}">
        <td><button type="submit" class="button1">Cancel Order</button></td>
        </form> 
        </tr>
        @endif

        @if ($costumer->zCode == Auth()->user()->vCode && $costumer->uStat == '0' && $costumer->zDate == date("Y-m-d") && $costumer->zPayment == TRUE)
        <tr> 
        <td>{{$costumer->zFirst}} {{$costumer->zLast}}</td>
        <td> {{$costumer->zAdd}},{{$costumer->zStreet}}</td>
        <td> {{$costumer->zQuantity}}</td>
        <td> {{$costumer->zSize}}</td>
        <td> {{$costumer->zItem}}</td>
        <td> {{$costumer->zPayment}}</td>
        <td style='color: black; background-color: #008000; width:'><b>Paid</b></td>
        </tr>
        @endif

        @if ($costumer->zCode == Auth()->user()->vCode && $costumer->uStat == '0' && $costumer->zDate == date("Y-m-d") && $costumer->zPayment == '0')
        <tr> 
        <td>{{$costumer->zFirst}} {{$costumer->zLast}}</td>
        <td> {{$costumer->zAdd}},{{$costumer->zStreet}}</td>
        <td> {{$costumer->zQuantity}}</td>
        <td> {{$costumer->zSize}}</td>
        <td> {{$costumer->zItem}}</td>
        <td> Cancel Order</td>
        <td style='color: black; background-color: #ff1a1a;'><b>Cancel Order</b></td>
        </tr>
        @endif
         @endforeach
</div>
</div>
</div>

<br><br>
@endsection
</body>
</html>