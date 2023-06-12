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

@extends('layouts.delboy')
@section('title','Griffin - MilkTea Shop')
@section('content')

<div class="addemploy">
<form action="/db" method="POST">
@csrf
Search Address:<select name="search" id="zAdd">
<option selected="selected" required>- Address -</option>
    <option name="a2" value="Catanghalan">Catanghalan</option>
    <option name="a3" value="Hulo">Hulo</option>
    <option name="a4" value="Lawa">Lawa</option>
    <option name="a5" value="Paco">Paco</option>
    <option name="a6" value="Pag-asa">Pag-asa</option>
    <option name="a7" value="Paliwas">Paliwas</option>
    <option name="a8" value="Panghulo">Panghulo</option>
    <option name="a9" value="San Pascual">San Pascual</option>
    <option name="a10" value="Tawiran">Tawiran</option>
</select>
      <input type="submit" class="button1" value="Search Address" >
      </form>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">
<td colspan="11" class="text-left">Delivery</td>

        <tr>
        <th>Full Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Quantity</th>
        <th>Size</th>
        <th>Item</th>
        <th>Payment</th>
        <th>Date/Time</th>
        </tr>   
        @foreach ($addresses as $delivery)
@if ($delivery->zAdd == 'Pag-Asa' && $delivery->uStat == '1' && $delivery->zDate == date("Y-m-d"))
        <tr> 
        <td>{{$delivery->zFirst}} {{$delivery->zLast}}</td>
        <td> {{$delivery->zAdd}},{{$delivery->zStreet}}</td>
        <td> {{$delivery->zContact}}</td>
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zSize}}</td>
        <td> {{$delivery->zItem}}</td>
        <td> {{$delivery->zPayment}}</td>
        <td> {{$delivery->created_at}}</td>
        <form action="delivery\{{$delivery->id}}">
        <td><button type="submit" class="button1">Paid/Pending</button></td>
        </form>
        </tr>
        @endif
         @endforeach
</div>

</div>

@endsection
</body>
</html>