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

@extends('layouts.delboy')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">

        <a href="/deliveries"><button class="button1">Go Back</button></a>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">
<br><br><br><br><br><br>
<h3 class="form">Are you Sure?</h3>
<h3 class="form">To Cancel Your Order?</h3>

 <form method="POST" action="/deliveries/{{ $delivery->id }}">
 @csrf
 @method('PUT')

 <div class="form">
 <input type="hidden" class="form-control" name="uStat" id="uStat" value="0" readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zPayment" id="zPayment" value="0" readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zFirst" id="zFirst" value="{{ $delivery->zFirst }}">
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="zLast" id="zLast" value="{{$delivery->zLast}}" >
 </div>

 <div class="form">
 <button type="submit" class="button1">Yes</button> 
 </form>
 <a href="/deliveries"><button class="button1">No</button></a>
 </div>

</div>
</div>
<br><br><br><br>
@endsection
</body>
</html>