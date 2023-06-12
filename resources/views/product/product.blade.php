<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')

<div class="vertical3">
<div class="costumers">
<table id="customers1">
  <tr>
    <th>Code</th>
    <th>Name of Product</th>
    <th>Price of Product</th>
    <th>Size of Product</th>
  </tr>
  @foreach ($products as $product)
  <tr>
    <td>{{$product->nCode}}</td>
    <td>{{$product->nProduct}}</td>
    <td>{{$product->nPrice}}</td>
    <td>{{$product->nSize}}</td>
  </tr> 
  @endforeach
</table>
</div>
</div>
</div>
@endsection
</body>
</html>