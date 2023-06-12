<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php $sql ?>
@extends('layouts.cashier')
@section('title','Griffin - MilkTea Shop')
@section('content')

<div class="addemploy">
        <a href="/cashierordering1"><button class="button1">Order Again</button></a>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">
<td colspan="10" class="text-left">Order</td>
        <tr>
        <th>Quantity</th>
        <th>Size</th>
        <th>Item</th>
        <th>Payment</th>
        <th>Status</th>
        <th>Date/Time</th>
        </tr>   
        @foreach ($cashiers as $cashier)
@if ($cashier->uStat == '1' && $cashier->zCode ==  Auth()->user()->vCode && $cashier->zDate == date("Y-m-d") && $cashier->zStreet == Auth()->user()->uStreet)
        <tr> 
        <td> {{$cashier->zQuantity}}</td>
        <td> {{$cashier->zSize}}</td>
        <td> {{$cashier->zItem}}</td>
        <td> {{$cashier->zPayment}}</td>
        <td style='color: black; background-color: #cccc00;'><b>Pending</b></td>
        <td> {{$cashier->created_at}}</td>
        <form action="cashier/{{$cashier->id}}">
        <td><button type="submit" class="button1">Cancel Order</button></td>
        </form> 
        </tr>
        @endif

        @if ($cashier->uStat == '0' && $cashier->zCode ==  Auth()->user()->vCode && $cashier->zDate == date("Y-m-d") && $cashier->zPayment == TRUE && $cashier->zStreet == Auth()->user()->uStreet)
        <tr> 
        <td> {{$cashier->zQuantity}}</td>
        <td> {{$cashier->zSize}}</td>
        <td> {{$cashier->zItem}}</td>
        <td> {{$cashier->zPayment}}</td>
        <td style='color: black; background-color: #008000; width:'><b>Paid</b></td>
        <td> {{$cashier->created_at}}</td>
        </tr>
        @endif

        
        @if ($cashier->uStat == '0' && $cashier->zCode ==  Auth()->user()->vCode && $cashier->zDate == date("Y-m-d") && $cashier->zPayment == '0' && $cashier->zStreet == Auth()->user()->uStreet)
        <tr> 
        <td> {{$cashier->zQuantity}}</td>
        <td> {{$cashier->zSize}}</td>
        <td> {{$cashier->zItem}}</td>
        <td> Cancel Order</td>
        <td style='color: black; background-color: #ff1a1a;'><b>Cancel Order</b></td>
        <td> {{$cashier->created_at}}</td>
        </tr>
        @endif
         @endforeach
</div>
</div>


@endsection
</body>
</html>