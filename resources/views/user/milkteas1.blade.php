@extends('layouts.welcome')
@section('title','Griffin - MilkTea Shop')
@section('content')
<link rel="stylesheet" href="style.css">
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
  margin-left: 14%;
}
</style>
<center>
<h2 style="font-family: 'Copperplate Gothic Light';">MILKTEA PRODUCTS</h2>
<hr width="200px"  style='border: 1px solid black;'>
</center>
<div class="gallery" style="border:0px;margin:110px">
<a href="/milkteas1">
    <img src="toffeenutmilktea.jpg"  width="700" height="500">
  </a>
</div>
<div class="producttext"><b>Product Name:</b> Toffee Nut MilkTea<br><br><b>Size:</b>
Medium and Large<br><br><b>Price:</b> ₱70.00 - ₱80.00<br><br>
<b>Description: </b>Pure Cane Sugar, Water, Natural and Artificial Toffee Nut Flavor, Natural and Artificial Flavors, Salt.
<br><br><a href="/login"><button class="button1"><b>Order Now</b></button></a></div>
<br><br><br><br>
@endsection
</body>
</html>