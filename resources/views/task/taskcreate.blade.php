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

@extends('employee.layout')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">

        <a href="/deliveries"><button class="button1">Go Back</button></a>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">
<br><br><br><br><br><br>
<h3 class="form">Add Tasks</h3>
 <form method="POST" action="/task">
 @csrf

 <div class="form">
 <input type="text" class="form-control" name="tCode" id="tCode" >
 </div>

 <div class="form">
 <input type="text" class="form-control" name="tFirst" id="tFirst" >
 </div>

 <div class="form">
 <input type="text" class="form-control" name="tLast" id="tLast" >
 </div>

 <div class="form">
 <input type="text" class="form-control" name="tAdd" id="tAdd" >
 </div>

 <div class="form">
 <input type="text" class="form-control" name="tTask" id="tTask" >
 </div>

 <div class="form">
 <button type="submit" class="button1">Yes</button> 
 </form>
 <a href="/tasks"><button class="button1">Go Back</button></a>
 </div>
</div>

</div>
<br><br><br><br>
@endsection
</body>
</html>