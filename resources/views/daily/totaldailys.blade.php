<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.totalright {
    float: left;
    margin-left: 10%;
    font-size: 30px;
}

.totalright1 {
    margin-right: 50%;
    font-size: 30px;
}
</style>
<?php $sql ?>
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="addemploy">
<div class="all">
<a href="/daily"><button id="myBtn" class="button1">Go Back</button></a>

<div class="vertical3">
<div class="costumers">
<table id="customers1">
<td width="100%" colspan="9" class="text-left">Total Dailys Sales</td>
<td></td>
        <tr>
        </tr>   
</table>
@if ( date("Y-m-d") == date("Y-m-d"))
<div class="totalright">
<p class="total">Total Sales &nbsp;of<?php echo date(" F jS Y -  l "); ?></p>

<div class="totalright1">

Total Sales Now ₱{{ $dailys }}.00
<hr width="400px"  style='border: 1px solid black;'>
@else <div class="totalright">
<p class="total">Total Sales &nbsp;of<?php echo date(" F jS Y -  l "); ?></p>

<div class="totalright1">

Theres No Order Now
@endif
</div>
</div>
</div>
</div>
</div>
</div>

@endsection
</body>
</html>