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
<?php $sql ?>
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')

<div class="addemploy">
<form action="/monthly" method="POST">
@csrf
Search Month:<select name="search" id="zMonth">
<option selected="selected" name="search" required>- Month -</option>
    <option name="January" value="01">January</option>
    <option name="Febuary" value="02">Febuary</option>
    <option name="March" value="03">March</option>
    <option name="April" value="04">April</option>
    <option name="May" value="05">May</option>
    <option name="June" value="06">June</option>
    <option name="July" value="07">July</option>
    <option name="August" value="08">August</option>
    <option name="September" value="09">September</option>
    <option name="October" value="10">October</option>
    <option name="November" value="11">November</option>
    <option name="December" value="12">December</option>
</select>
      <input type="submit" class="button1" value="Search Month" >
      </form>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">
<td colspan="11" class="text-left">Monthly Sales</td>
        <tr>
        <th>Full Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Payment</th>
        <th>Item</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Date</th>
        </tr>   
        @foreach ($user as $delivery)

        @if ( $delivery->uStat == '1' && $delivery->zPayment == $delivery->zPayment && $delivery->zYear == date("Y"))
        <tr> 
        <td>{{$delivery->zFirst}}{{$delivery->zLast}}</td>
        <td> {{$delivery->zAdd}},{{$delivery->zStreet}}</td>
        <td> {{$delivery->zContact}}</td>
        <td style='color: black; background-color: #cccc00; padding: 1px 1px;'><b>Pending</b></td>
        <td> {{$delivery->zItem}}</td>
        <td> {{$delivery->zPayment}}</td>
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zDate}}</td>
        </tr>
        @endif

        @if ( $delivery->zPayment == '0' && $delivery->uStat == '0' && $delivery->zYear == date("Y"))
        <tr> 
        <td>{{$delivery->zFirst}}{{$delivery->zLast}}</td>
        <td> {{$delivery->zAdd}},{{$delivery->zStreet}}</td>
        <td> {{$delivery->zContact}}</td>
        <td style='color: black; background-color: #ff1a1a; padding: 1px 1px;'><b>Cancel Order</b></td>
        <td> {{$delivery->zItem}}</td>
        <td>Cancel Order</td>
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zDate}}</td>
        </tr>
        @endif

        
        @if ( $delivery->zPayment == TRUE && $delivery->uStat == '0' && $delivery->zYear == date("Y"))
        <tr> 
        <td>{{$delivery->zFirst}}{{$delivery->zLast}}</td>
        <td> {{$delivery->zAdd}},{{$delivery->zStreet}}</td>
        <td> {{$delivery->zContact}}</td>
        <td style='color: black; background-color:  #008000; width: padding: 1px 1px;'><b>Paid</b></td>
        <td> {{$delivery->zItem}}</td>
        <td> {{$delivery->zPayment}}</td>
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zDate}}</td>
        </tr>
        @endif
         @endforeach
</div>
</div>
</div>

</div>

@endsection
</body>
</html>