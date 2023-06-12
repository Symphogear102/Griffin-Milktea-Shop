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
    margin-top: 3%;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
}

.producttext1 {
    margin-left: 32%;
    margin-top: 3%;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
}
</style>
<center>
<h2 style="  font-family: 'Poppins', sans-serif;">ABOUT US</h2>
<hr width="200px"  style='border: 1px solid black;'>
</center>
<div class="gallery" style="border:0px;margin:110px">

    <img src="cups.png"  width="700" height="500">
 
</div>
<div class="producttext"><i><b>About Griffin</b></i> <br><br>
Griffin is a food service company established in 2010, specializing in 
healthy milk tea. The concept is inspired mainly by Asia’s unique culture of 
tea drinking – which in many Asian countries, is an important part of a ceremony in
 entertaining customers, that reflects a sign of respect and value for the guests.
 <br><br>
 Griffin tea drinks are guaranteed made from 100% freshly brewed loose-leaf teas of high
  quality, made exciting by different flavors and mixes for a fun and healthier lifestyle.
  </div>
  <div class="producttext1"><i><b>Our Goal</b></i> <br><br>
  Our main goal in establishing the company is to bring the joy of healthy living through 
  tea to the hearts of Filipinos. Since then, we have committed ourselves 
  to being the best in our field.
  </div>
  <br><br><br><br>  
@endsection
</body>
</html>