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

input[type=number] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px black;
  border-radius: 4px;
  float: center;
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

.form {
        font-family: "Copperplate Gothic Light";
        text-align: center;
}
</style>

@extends('layouts.delboy')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">
        <a href="/employees"><button class="button1">Go Back</button></a>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">

<h3 class="form">Add Employee</h3>

 <form method="POST" action="/employee">
 @csrf
 <div class="form">
 <label for="vCode"></label>
 <input type="hidden" class="form-control" name="vCode" id="vCode" value="">
 </div>

 <div class="form">
 <label for="uStat">Position</label>
<select name="uStat" id="uStat">
  <option value="cashier">Cashier</option>
  <option value="delboy">Delivery Boy</option>
</select>
</div>

 <div class="form">
 <button type="submit" class="button1">Enter Employee</button>
 </div>
 </form>
</div>
</div>
<br><br><br><br>
@endsection
</body>
</html>