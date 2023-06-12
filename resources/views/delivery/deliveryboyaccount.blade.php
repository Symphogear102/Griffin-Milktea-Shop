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
  margin-left: 40%;
  color: black;
}

.form {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        font-size: 30px;
        margin-left: 18%;
}

.form1 {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        font-size: 17px;
        margin-left: 18%;
}
</style>

@extends('layouts.delboy')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="vertical4">
<div class="costumers">
<table id="customers">
<br><br><br>
<h2 class="form">Your Account</h2>

<form method="POST" action="deliveryboyaccount/{{ Auth::user()->id }}">
 @csrf
 @method('PUT')

 <div class="form1">

 <input type="hidden" class="form-control" name="uStat" id="uStat" value="{{ Auth::user()->uStat}}">
 </div>

 <div class="form1">
 <label for="uFirst"><b>First Name:</b></label>
 <input type="text" class="form-control" name="uFirst" id="uFirst" value="{{ Auth::user()->uFirst}}">
 </div>

 <div class="form1">
 <label for="uLast"><b>Last Name:</b></label>
 <input type="text" class="form-control" name="uLast" id="uLast" value="{{ Auth::user()->uLast }}" >
 </div>

 <div class="form1">
 <label for="uContact"><b>Contact:</b></label>
 <input type="text" class="form-control" name="uContact" id="uContact" value="{{ Auth::user()->uContact }}" >
 </div>

 <div class="form1">
 <label for="uAddress"><b>Address:</b></label>
 <input type="text" class="form-control" name="uAddress" id="uAddress" value="{{ Auth::user()->uAddress }}" readonly>
 </div>
 
 <div class="form1">
 <label for="uStreet"><b>Street:</b></label>
 <input type="text" class="form-control" name="uStreet" id="uStreet" value="{{ Auth::user()->uStreet }}">
 </div>

 <div class="form1">
 <input type="hidden" class="form-control" name="vCode" id="vCode" value="{{ Auth::user()->vCode }}" >
 </div>
 
 <div class="form1">
 <a href="/costumers"><button type="submit" class="button1">Update</button></a>
 </form>
 </div>
</div>
</div>
<br><br><br><br>
@endsection
</body>
</html>