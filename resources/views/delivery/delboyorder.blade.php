<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php $sql ?>
@extends('layouts.delboy')
@section('title','Griffin - MilkTea Shop')
@section('content')

<div class="addemploy">
        <a href="/delboyordering"><button class="button1">Order Again</button></a>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">
<td colspan="9" class="text-left">My Order</td>
        <tr>
        <th>Quantity</th>
        <th>Size</th>
        <th>Item</th>
        <th>Payment</th>
        
        </tr>  
        @foreach ($deliveries as $delivery)
@if ($delivery->zCode == Auth()->user()->vCode && $delivery->uStat == '1' && $delivery->zDate == date("Y-m-d"))
        <tr> 
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zItem}}</td>
        <td> {{$delivery->zPayment}}</td>
        <td style='color: black; background-color: #cccc00;'><b>Pending</b></td>
        <form action="deliveries\{{$delivery->id}}">
        <td><button type="submit" class="button1">Cancel Order</button></td>
        </form> 
        </tr>
        @endif

        @if ($delivery->zCode == Auth()->user()->vCode && $delivery->uStat == '0' && $delivery->zDate == date("Y-m-d") && $delivery->zPayment == TRUE)
        <tr> 
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zItem}}</td>
        <td> {{$delivery->zPayment}}</td>
        <td style='color: black; background-color: #008000; width:'><b>Paid</b></td>
        </tr>
        @endif

        @if ($delivery->zCode == Auth()->user()->vCode && $delivery->uStat == '0' && $delivery->zDate == date("Y-m-d") && $delivery->zPayment == '0')
        <tr> 
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zItem}}</td>
        <td> Cancel Order</td>
        <td style='color: black; background-color: #ff1a1a;'><b>Cancel Order</b></td>
        </tr>
        @endif
         @endforeach
</div>

</div>

@endsection
</body>
</html>