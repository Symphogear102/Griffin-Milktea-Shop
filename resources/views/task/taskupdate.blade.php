<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
input[type=text],select {
  width: 20%;
  padding: 12px 20px;
  margin: 0px 0;
  box-sizing: border-box;
  border: 1px black;
  border-radius: 4px;
  float: center;
  color: black;
  margin-left: 40%;
}

input[type=date] {
  width: 20%;
  padding: 12px 20px;
  margin: 0px 0;
  box-sizing: border-box;
  border: 1px black;
  border-radius: 4px;
  float: center;
  color: black;
  margin-left: 40%;
}
.form {
  margin-top: 1%;
  font-family: 'Poppins', sans-serif;
        text-align: center;
}
</style>
<div class="allbody"> 
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">
        
        <a href="/employees"><button class="button1">Go Back</button></a>
</div>

<div class="vertical3">
<div class="costumers">
<table id="customers1">

<h3 class="form">Update Task</h3>
<br>
<form method="POST" action="/tasks/{{ $task->id }}">
 @csrf
 @method('PUT')
 <div class="form">
 <label for="tFirst"><b>First Name</b></label>
 <input type="text" class="form-control" name="tFirst" id="tFirst" value="{{ $task->tFirst }}" readonly>
 </div>

 <div class="form">
 <label for="tLast"><b>Last Name</b></label>
 <input type="text" class="form-control" name="tLast" id="tLast" value="{{$task->tLast}}" readonly>
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="tAdd" id="tAdd" value="{{$task->tAdd }}" readonly>
 </div>

 <div class="form">
 <label for="tDate"><b>Date</b></label>
 <input type="date" class="form-control" name="tDate" id="tDate" value="{{ $task->tDate }}">
 </div>

 <div class="form">
 <label for="tTask"><b>Task</b></label><br><br>
 <textarea  id="tTask" name="tTask" rows="4" cols="30">{{ $task->tTask }}
</textarea>
 </div>


 <div class="form">
 <button type="submit" class="button1">Update Task</button>
 </div>
</form>
 <br>
</div>
</div>
</div>
</div>
<br><br><br><br>
@endsection
</body>
</html>