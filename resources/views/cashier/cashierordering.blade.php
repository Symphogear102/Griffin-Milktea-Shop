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
  color: black;
}

input[type=text] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px black;
  border-radius: 4px;
  float: center;
  margin-left: 40%;
  color: black;
}
input[type=email] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px black;
  border-radius: 4px;
  float: center;
}

input[type=number] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px black;
  border-radius: 4px;
  float: center;
  margin-left: 40%;
  color: black;
}

input[type=password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px black;
  border-radius: 4px;
  float: center;
}
.form {
  font-family: 'Poppins', sans-serif;
        text-align: center;
        float: center;
}
</style>
<?php 
 function generateKey() {
        $keylength = 8;
        $str = "12345678";
        $randstr = str_shuffle($str);
        return $randstr;
        }
?>
@extends('layouts.cashier')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">

        <a href="/delivery"><button class="button1">Go Back</button></a>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">

<h3 class="form">Order Now!</h3>

<center>
 <form method="POST" action="/delivery">
 @csrf
 <div class="form">
 <input type="hidden" class="form-control" name="uStat" id="uStat"  value="1" recquired>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zCode" id="zCode" value="{{ Auth::user()->zCode }}" readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zStat" id="zStat" value="{{ Auth::user()->zStat }}"  readonly>
 </div>

 <div class="form">
 <label for="zFirst">First Name:</label>
 <input type="text" class="form-control" name="zFirst" id="zFirst" value="{{ Auth::user()->zFirst }}" recquired>
 </div>

 <div class="form">
 <label for="zLast">Last Name:</label>
 <input type="text" class="form-control" name="zLast" id="zLast" value="{{ Auth::user()->zLast }}" >
 </div>
 <div class="form">
 <label for="zAdd">Address</label>
<select name="zAdd" id="zAdd">
<option disabled="disabled" selected="selected" required>- Address  -</option>
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
</div>

 <div class="form">
 <label for="zItem">Item:</label>
<select name="zItem" id="zItem">
<option disabled="disabled" selected="selected" required>- Name of Product  -</option>
    <option name="m3" value="Milktea Black Coffee">Milktea Black Coffee</option>
    <option name="m4" value="Yakult MilkTea">Yakult MilkTea</option>
    <option name="m6" value="Cheesecake MilkTea">Cheesecake MilkTea</option>
    <option name="m8" value="Pudding MilkTea">Pudding MilkTea</option>
    <option name="m10" value="Matcha Latte MilkTea">MatchaLatte MilkTea</option>
    <option name="m12" value="Toffee Nut MilkTea">ToffeeNut MilkTea</option>
</select>
</div>

<div class="form">
 <label for="zSize">Size:</label>
<select name="zSize" id="zSize">
<option disabled="disabled" selected="selected" required>- Size of Product  -</option>
    <option name="m1" value="Medium">Medium</option>
    <option name="m2" value="Large">Large</option>
</select>
</div>

<div class="form">
 <label for="zQuantity">Quantity:</label>
 <input type="number" class="form-control" name="zQuantity" id="zQuantity" placeholder="How Many" recquired>
 </div>

<div class="form">
 <label for="zContact">Contact:</label>
 <input type="hidden" class="form-control" name="zContact" id="zContact" value="{{ Auth::user()->zContact }}" recquired>
 </div>

 <div class="form">
 <button type="submit" class="button1">Order</button>
      </center>
 </div>
 </form>
 </div>
</div>
</div>
<br><br><br><br>
@endsection
</body>
</html>