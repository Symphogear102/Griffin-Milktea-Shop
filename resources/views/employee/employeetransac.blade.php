<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php $sql ?>
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')

<div class="addemploy">
       
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">
<td colspan="8" class="text-left">All Transaction</td>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Quantity</th>
        <th>Size</th>
        <th>Item</th>
        <th>Payment</th>
        <th>Date</th>
        </tr>  

        @foreach ($transactions as $delivery)
        <tr> 
        <td>{{$delivery->zFirst}}</td>
        <td> {{$delivery->zLast}}</td>
        <td> {{$delivery->zAdd}}</td>
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zSize}}</td>
        <td> {{$delivery->zItem}}</td>
        <td> {{$delivery->zPayment}}</td>
        <td> {{$delivery->zDate}}</td>
        </tr>

         @endforeach
</div>

</div>

@endsection
</body>
</html>