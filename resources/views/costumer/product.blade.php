<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@extends('layouts.costumer1')
@section('title','Griffin - MilkTea Shop')
@section('content')
<link rel="stylesheet" href="style.css">
<style>
    
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: center;
  width: 214px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 220px;
  
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
<center>
<h2 style="font-family: 'Copperplate Gothic Light';">MILKTEA PRODUCTS</h2>
<hr width="200px"  style='border: 1px solid black;'>
</center>
<div class="gallery" style="border:0px;margin:110px">
<a href="/milktea1">
    <img src="toffeenutmilktea.jpg"  width="600" height="400">
  </a>
  <div class="desc">Toffee Nut MilkTea<br>₱70.00 - ₱80.00<br><br>
  <a href="/costumerordering"><button class="button1">Order Now</button></a></div>
</div>

<div class="gallery" style="border:0px;margin:110px">
<a href="/milktea2">
    <img src="matchalattemilktea.jpg"  width="600" height="400">
  </a>
  <div class="desc">MatchaLatte MilkTea<br>₱70.00 - ₱80.00<br>
  <a href="/costumerordering"><button class="button1">Order Now</button></a></div>
</div>

<div class="gallery" style="border:0px;margin:110px">
<a href="/milktea3">
    <img src="puddingmilktea.jpg"  width="600" height="400">
  </a>
  <div class="desc">Pudding MilkTea<br>₱70.00 - ₱80.00<br><br>
  <a href="/costumerordering"><button class="button1">Order Now</button></a></div>
</div>

<div class="gallery" style="border:0px;margin:110px">
<a href="/milktea4">
    <img src="cheesecakemilktea.jpg"  width="600" height="400">
  </a>
  <div class="desc">CheeseCake MilkTea<br>₱75.00 - ₱90.00<br><br>
  <a href="/costumerordering"><button class="button1">Order Now</button></a></div>
</div>

<div class="gallery" style="border:0px;margin:110px">
<a href="/milktea5">
    <img src="yakultmilktea.png"  width="600" height="400">
  </a>
  <div class="desc">Yakult MilkTea<br>₱70.00 - ₱85.00<br><br>
  <a href="/costumerordering"><button class="button1">Order Now</button></a></div>
</div>

<div class="gallery" style="border:0px;margin:110px">
<a href="/milktea6">
    <img src="milkteablackcoffee.jpg"  width="600" height="400">
  </a>
  <div class="desc">MilkTea Black Coffee<br>₱70.00 - ₱85.00<br>
  <a href="/costumerordering"><button class="button1">Order Now</button></a></div>
  <br><br><br><br>
</div>
<br><br><br><br>
@endsection
</body>
</html>