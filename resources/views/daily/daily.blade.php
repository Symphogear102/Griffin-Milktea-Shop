<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php $sql ?>
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')
<style>
.totalright {
    float: center;
    margin-right: 30%;
    font-size: 30px;
}

.totalright1 {
    margin-right: 1%;
    font-size: 30px;
}
    input[type=text], select {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px black;
  border-radius: 4px;
  float: center;

}

body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 13%; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
p {
    float: left;
    color: white;
    margin-left: 1%;
    font-family: 'Poppins', sans-serif;
}
</style>
<div class="addemploy">
<div class="all">
<!-- Trigger/Open The Modal -->
<div class="blacks">
<td width="100%" colspan="9" class="text-right"></td><button id="myBtn" class="button1">Total Daily Sales</button>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

@if ($dailys == TRUE)
<div class="totalright">
<b class="total">Total Sales &nbsp;Date Now <?php echo date("Y-m-j"); ?></b>
<div class="totalright1">

Total Sales Now ₱{{ $dailys->where('zDate', date('Y-m-j'))->where('uStat', 0)->sum('zPayment') }}.00
<hr width="1022px"  style='border: 1px solid black;'>
@else 
<div class="totalright1">

Theres No Order This Month
@endif
</div>
</div>
</div>
</div>
<div class="vertical3">
<div class="costumers">
<table id="customers1">
<td colspan="11" class="text-left">Daily Sales</td>
        <tr>
        <th>Full Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Payment</th>
        <th>Item</th>
        <th>Price</th>
        <th>Size</th>
        <th>Quantity</th>
        <th>Date</th>
        </tr>   
        @foreach ($dailys as $delivery)

        @if ( $delivery->uStat == '1' && $delivery->zPayment == $delivery->zPayment && $delivery->zDate == date("Y-m-d"))
        <tr> 
        <td>{{$delivery->zFirst}}{{$delivery->zLast}}</td>
        <td> {{$delivery->zAdd}},{{$delivery->zStreet}}</td>
        <td> {{$delivery->zContact}}</td>
        <td style='color: black; background-color:  #cccc00;'><b>Pending</b></td>
        <td> {{$delivery->zItem}}</td>
        <td> {{$delivery->zPayment}}</td>
        <td> {{$delivery->zSize}}</td>
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zDate}}</td>
        <form action="/employees">
        <td><button type="submit" class="button1">AssignDelBoy</button></td>
        </form>
        </tr>
        @endif

        @if ( $delivery->zPayment == '0' && $delivery->uStat == '0' && $delivery->zDate == date("Y-m-d"))
        <tr> 
        <td>{{$delivery->zFirst}}{{$delivery->zLast}}</td>
        <td> {{$delivery->zAdd}},{{$delivery->zStreet}}</td>
        <td> {{$delivery->zContact}}</td>
        <td style='color: black; background-color: #ff1a1a;'><b>Cancel Order</b></td>
        <td> {{$delivery->zItem}}</td>
        <td>Cancel Order</td>
        <td> {{$delivery->zSize}}</td>
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zDate}}</td>
        </tr>
        @endif

        
        @if ( $delivery->zPayment == TRUE && $delivery->uStat == '0' && $delivery->zDate == date("Y-m-d"))
        <tr> 
        <td>{{$delivery->zFirst}}{{$delivery->zLast}}</td>
        <td> {{$delivery->zAdd}},{{$delivery->zStreet}}</td>
        <td> {{$delivery->zContact}}</td>
        <td style='color: black; background-color: #008000; width:'><b>Paid</b></td>
        <td> {{$delivery->zItem}}</td>
        <td> {{$delivery->zPayment}}</td>
        <td> {{$delivery->zSize}}</td>
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zDate}}</td>
        </tr>
        @endif
         @endforeach
</div>
</div>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
@endsection
</body>
</html>