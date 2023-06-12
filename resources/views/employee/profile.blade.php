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

<h3 class="form">Task</h3>

 <form method="POST" action="/task">
 @csrf

 <div class="form">
 <input type="hidden" class="form-control" name="tCode" id="tCode" value="{{ $user->vCode }}" readonly>
 </div>

 <div class="form">
 <label for="uFirst"><b>First Name</b></label>
 <input type="text" class="form-control" name="tFirst" id="tFirst" value="{{ $user->uFirst }}" readonly>
 </div>

 <div class="form">
 <label for="uLast"><b>Last Name</b></label>
 <input type="text" class="form-control" name="tLast" id="tLast" value="{{$user->uLast}}" readonly >
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="tAdd" id="tAdd" value="{{ $user->uAddress }}" readonly>
 </div>

 <div class="form">
 <label for="tDate"><b>Date</b></label>
 <input type="date" class="form-control" name="tDate" id="tDate" value="<?php echo date('Y-m-d'); ?>">
 </div>

 <div class="form">
 <label for="Task"><b>Task</b></label><br>
 <textarea id="tTask" name="tTask" rows="4" cols="40" placeholder="Give Task">
</textarea>
 </div>


 <div class="form">
 <button type="submit" class="button1">Give Task</button>
 </div>
</form>

<form method="POST" action="/users/{{ $user->id }}">
 @csrf
 @method('PUT')
 <div class="form">
 <input type="hidden" class="form-control" name="uFirst" id="uFirst" value="{{ $user->uFirst }}">
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="vCode" id="vCode" value="fired">
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="email" id="email" value="Fired">
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="uLast" id="uLast" value="{{$user->uLast}}" >
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="uAddress" id="uAddress" value="{{$user->uAddress }}">
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="uContact" id="uContact" value="{{ $user->uContact }}">
 </div>

 <div class="form">
 <input type="hidden" class="form-control" name="uStat" id="uStat" value="0">
 </div>

 <div class="form">
 <button type="submit" class="button1">Fired</button>
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