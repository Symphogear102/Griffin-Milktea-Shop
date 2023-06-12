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
}
.form {
        font-family: "Copperplate Gothic Light";
        text-align: center;
        float: center;
}
</style>
<div class="allbody"> 
@extends('task.layout')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">

        <a href="/deliveries"><button class="button1">Go Back</button></a>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">

<h3 class="form">Add Task</h3>


 <form method="POST" action="/delivery">
 @csrf


 <div class="form">
 <label for="zCode">Code:</label>
 <input type="text" class="form-control" name="zCode" id="zCode"  recquired>
 </div>

 <div class="form">
 <label for="zCode">Code:</label>
 <input type="text" class="form-control" name="zStat" id="zStat" value="delboy"  recquired>
 </div>

 <div class="form">
 <label for="zFirst">First Name:</label>
 <input type="text" class="form-control" name="zFirst" id="zFirst" recquired>
 </div>

 <div class="form">
 <label for="zLast">Last Name:</label>
 <input type="text" class="form-control" name="zLast" id="zLast" placeholder="Enter Last Name" recquired>
 </div>

 <div class="form">
 <label for="zAdd">Address:</label>
 <input type="text" class="form-control" name="zAdd" id="zAdd" placeholder="Enter Address" recquired>
 </div>


<div class="form">
 <label for="zPayment">Contact:</label>
 <input type="text" class="form-control" name="zPayment" id="zPayment" placeholder="Enter Contact" recquired>
 </div>

<div class="form">
 <label for="zContact">Contact:</label>
 <input type="number" class="form-control" name="zContact" id="zContact" placeholder="Enter Contact" recquired>
 </div>

 <div class="form">
 <button type="submit" class="button1">Order</button>
 </div>
 </form>
 </div>
</div>
</div>
</div>
<br><br><br><br>
@endsection
</body>
</html>