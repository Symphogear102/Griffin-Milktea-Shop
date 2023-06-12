<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@extends('layouts.costumer1')
@section('title','Griffin - MilkTea Shop')
@section('content')
<style>
    
div.gallery {

  border: 1px solid #ccc;
  width: 214px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 110%;
  height: 340px;
}



.producttext {
    margin-left: 20%;
    margin-top: 10%;
    font-family: "Copperplate Gothic Light";
    font-size: 20px;
}
.button1 {
  margin-left: 15%;
}
</style>
<center>
<h2 style="font-family: 'Copperplate Gothic Light';">MILKTEA PRODUCTS</h2>
<hr width="200px"  style='border: 1px solid black;'>
</center>
<div class="gallery" style="border:0px;margin:110px">
<a href="/milktea2">
    <img src="matchalattemilktea.jpg"  width="700" height="500">
  </a>
</div>
<div class="producttext"><b>Product Name:</b> Matcha Latte Milktea<br><br><b>Size:</b>
Medium and Large<br><br><b>Price:</b> ₱70.00 - ₱80.00<br><br>
<b>Description: </b>A matcha latte consists of matcha powder (made from the finely-ground leaves of certain green tea plants), water, and milk.
<br><br><a href="/costumerordering"><button class="button1"><b>Order Now</b></button></a></div>
<br><br><br><br>
@endsection
</body>
</html>