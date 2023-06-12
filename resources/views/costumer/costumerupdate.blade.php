<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
input[type=text] {
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

@extends('layouts.costumer1')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">

        <a href="/costumer"><button class="button1">Go Back</button></a>
</div>

<div class="vertical4">
<div class="costumers">
<table id="customers">
<br><br><br><br><br><br>
<h3 class="form">Are you Sure?</h3>
<h3 class="form">To Cancel Your Order?</h3>

 <form method="POST" action="/costumer/{{ $costumer->id }}">
 @csrf
 @method('PUT')

 <div class="form">
 <input type="hidden" class="form-control" name="uStat" id="uStat" value="0" readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zPayment" id="zPayment" value="0" readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zFirst" id="zFirst" value="{{ $costumer->zFirst }}">
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zLast" id="zLast" value="{{$costumer->zLast}}" >
 </div>

 <div class="form">
 <button type="submit" class="button1">Yes</button> 
 </form>
 <a href="/costumer"><button class="button1">No</button></a>
 </div>
</div>
</div>
<br><br><br><br>
@endsection
</body>
</html>