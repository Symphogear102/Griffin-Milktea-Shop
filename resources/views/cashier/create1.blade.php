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
  margin-top: 1%;
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

        <a href="/cashier"><button class="button1">Go Back</button></a>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">
<br><br>
<h3 class="form">Order Now!</h3>

<center>
 <form method="POST" action="/cashier">
 @csrf
 <div class="form">
 <input type="hidden" class="form-control" name="uStat" id="uStat"  value="1" recquired>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zCode" id="zCode" value="{{ Auth::user()->vCode }}" readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zStat" id="zStat" value="{{ Auth::user()->uStat }}"  readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zFirst" id="zFirst" value="{{ Auth::user()->uFirst }}" readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zLast" id="zLast" value="{{ Auth::user()->uLast }}" readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zAdd" id="zAdd" value="{{ Auth::user()->uAddress }}" readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zStreet" id="zStreet" value="{{ Auth::user()->uStreet }}" readonly>
 </div>
 
 <div class="form">
 <input type="hidden" class="form-control" name="zContact" id="zContact" value="{{ Auth::user()->uContact }}" readonly>
 </div>

<div class="form">
 <label for="zItem"><b>Item:</b></label>
<select name="zItem" id="zItem">
<option selected="selected" required>- Name of Product -</option>
    <option name="m3" value="Milktea Black Coffee">Milktea Black Coffee</option>
    <option name="m4" value="Yakult MilkTea">Yakult MilkTea</option>
    <option name="m6" value="Cheesecake MilkTea">Cheesecake MilkTea</option>
    <option name="m8" value="Pudding MilkTea">Pudding MilkTea</option>
    <option name="m10" value="MatchaLatte MilkTea">MatchaLatte MilkTea</option>
    <option name="m12" value="ToffeeNut MilkTea">ToffeeNut MilkTea</option>
</select>
</div>

<div class="form">
 <label for="zSize"><b>Size:</b></label>
<select name="zSize" id="zSize">
<option selected="selected" required>- Size of Product -</option>
    <option name="m1" value="Medium">Medium</option>
    <option name="m2" value="Large">Large</option>
</select>
</div>

<div class="form">
 <label for="zQuantity"><b>Quantity</b></label>
<select name="zQuantity" id="zQuantity">
<option selected="selected" required>- Quantity -</option>
    <option name="m3" value="1">1</option>
    <option name="m4" value="2">2</option>
    <option name="m6" value="3">3</option>
    <option name="m8" value="4">4</option>
    <option name="m10" value="5">5</option>
    <option name="m12" value="6">6</option>
    <option name="m12" value="7">7</option>
    <option name="m12" value="8">8</option>
    <option name="m12" value="9">9</option>
    <option name="m12" value="10">10</option>
</select>
</div>

<div class="form">
 <input type="hidden" class="form-control" name="zContact" id="zContact" value="{{ Auth::user()->uContact }}" recquired>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zDate" id="zDate" value="<?php echo date('Y-m-d'); ?>" readonly>
 </div>

 <div class="form"> 
 <input type="hidden" class="form-control" name="zMonth" id="zMonth" value="<?php echo date("m"); ?>" recquired>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zMonth1" id="zMonth1" value="<?php echo date("F"); ?>" recquired>
 </div>
 
 <div class="form">
 <input type="hidden" class="form-control" name="zYear" id="zYear" value="<?php echo date("Y"); ?>" recquired>
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