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

input[type=email] {
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
  margin-left: 40%;
  color: black;
}

.form {
  font-family: 'Poppins', sans-serif;
        text-align: center;
}
<?php 
 function generateKey() {
        $keylength = 7;
        $str = "1234567";
        $randstr = str_shuffle($str);
        return $randstr;
        }
?>
</style>

@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">
        <a href="/employees"><button class="button1">Go Back</button></a>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">

<h3 class="form">Add Employee</h3>

  <form method="POST" action="{{ route('employee') }}">
  @csrf
  <div class="form">
  <label for="vCode"></label>
  <input type="hidden" class="form-control" name="vCode" id="vCode" value="<?php echo generateKey();?>">
  </div>

  <div class="form">
  <label for="uStat"><b>Position</b></label>
  <select name="uStat" id="uStat">
    <option value="2">Cashier</option>
    <option value="1">Delivery Boy</option>
  </select>
  </div>


  <div class="form">
  <label for="uFirst"><b>First Name</b></label>
  <input id="uFirst" type="text" placeholder="Enter First Name" class="form-control @error('uFirst') is-invalid @enderror" name="uFirst" value="{{ old('uFirst') }}" required autocomplete="uFirst">
  </div>
  <div class="form">
  <label for="uLast"><b>Last Name</b></label>
  <input id="uLast" type="text" placeholder="Enter Last Name" class="form-control @error('uLast') is-invalid @enderror" name="uLast" value="{{ old('uLast') }}" required autocomplete="uLast">
  </div>

  <div class="form">
  <label for="uAddress"><b>Address</b></label>
  <input id="uAddress" type="text" placeholder="Enter Email" class="form-control @error('uAddress') is-invalid @enderror" name="uAddress" value="{{ old('uAddress') }}" required autocomplete="uAddress">
  </div>

  <div class="form">
  <input id="uStreet" type="hidden" placeholder="Enter Email" class="form-control @error('uStreet') is-invalid @enderror" name="uStreet" value="-" required autocomplete="uStreet">
  </div>

  <div class="form">
  <label for="uContact"><b>Contact</b></label>
  <input id="uContact" type="number" placeholder="Enter Contact" class="form-control @error('uContact') is-invalid @enderror" name="uContact" value="{{ old('uContact') }}" required autocomplete="uContact">
  </div>

  <div class="form">
  <label for="email"><b>Email</b></label>
  <input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
  </div>

  <div class="form">
  <label for="password"><b>Password</b></label>
  <input id="password" type="text" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">
  </div>





  <div class="form">
<button type="submit" class="button1">Add Employee</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  <br><br><br><br>
@endsection
</body>
</html>