<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
  padding-top: 10px; /* Location of the box */
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

.blacks {
    background-color: black;
    
}



p {
    float: left;
    color: white;
    margin-left: 1%;
    font-family: 'Poppins', sans-serif;
}
</style>
<?php $sql ?>
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')

<div class="all">
<div class="addemploy">
<form action="/monthly" method="POST">
@csrf
Search Month:<select name="search" id="zMonth">
<option selected="selected" required>- Month -</option>
       <option name="January" value="01">January</option>
    <option name="Febuary" value="02">Febuary</option>
    <option name="March" value="03">March</option>
    <option name="April" value="04">April</option>
    <option name="May" value="05">May</option>
    <option name="June" value="06">June</option>
    <option name="July" value="07">July</option>
    <option name="August" value="08">August</option>
    <option name="September" value="09">September</option>
    <option name="October" value="10">October</option>
    <option name="November" value="11">November</option>
    <option name="December" value="12">December</option>
</select>
      <input type="submit"  class="button1" value="Search Month" >
      </form>

<div class="vertical3">
<!-- Trigger/Open The Modal -->
<div class="blacks">
<td width="100%" colspan="9" class="text-right"><p>Monthly Sales</p></td><button id="myBtn" class="button1">Total Monthly Sales</button>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

@if ($months == TRUE)
<div class="totalright">
<b class="total">Total Sales &nbsp;of November<?php echo date(" - Y "); ?></b>
<div class="totalright1">

Total Sales Now ₱{{ $months->where('zMonth','11')->where('uStat', 0)->sum('zPayment') }}.00
<hr width="1022px"  style='border: 1px solid black;'>
@else 
<div class="totalright1">

Theres No Order This Month
@endif
</div>
</div>
</div>
</div>
<div class="costumers">
<table id="customers1">
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
        @foreach ($months as $delivery)

        @if ( $delivery->uStat == '1' && $delivery->zPayment == $delivery->zPayment && $delivery->zYear == date("Y") && $delivery->zMonth == "11" )
        <tr> 
        <td>{{$delivery->zFirst}}{{$delivery->zLast}}</td>
        <td> {{$delivery->zAdd}},{{$delivery->zStreet}}</td>
        <td> {{$delivery->zContact}}</td>
        <td style='color: black; background-color: #cccc00;'><b>Pending</b></td>
        <td> {{$delivery->zItem}}</td>
        <td> {{$delivery->zPayment}}</td>
        <td> {{$delivery->zSize}}</td>
        <td> {{$delivery->zQuantity}}</td>
        <td> {{$delivery->zDate}}</td>
        </tr>
        @endif

        @if ( $delivery->zPayment == '0' && $delivery->uStat == '0' && $delivery->zYear == date("Y") && $delivery->zMonth == "11" )
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

        
        @if ( $delivery->zPayment == TRUE && $delivery->uStat == '0' && $delivery->zYear == date("Y") && $delivery->zMonth == "11" )
        <tr> 
        <td>{{$delivery->zFirst}}{{$delivery->zLast}}</td>
        <td> {{$delivery->zAdd}},{{$delivery->zStreet}}</td>
        <td> {{$delivery->zContact}}</td>
        <td style='color: black; background-color:  #008000; width:'><b>Paid</b></td>
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
</div>


</div>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
@endsection
</body>
</html>