<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@extends('layouts.costumer')
@section('title','Griffin - MilkTea Shop')
@section('content')
<style>
    body {
  background-image: url('milkteahand.jpg');
  background-repeat: no-repeat;
  background-size: 1400px 710px;
}
.carousel{
    width: 100%;
    height: 70%;
}
.carousel-item{
    text-align: center;
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}

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
  height: 300px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

.homedel1 {
  margin-top: 12%;
  margin-left: 3%;
  font-family: 'Poppins', sans-serif;
  font-size: 12px;
  color: white;
  text-shadow: 1px 1px 15px black;

}

.display2 {
  color: white;
  font-size: 500%;
  text-transform: uppercase;
  text-shadow: 1px 1px 15px black;
}

.yeah1 {
  color: white;
  font-size: 400%;
  text-transform: uppercase;
  text-shadow: 1px 1px 15px black;
}
</style>
</head>
<body>

<div class="homedel1">
<h2 class="display2">Discover what is not discovered.</h2><br>
<h3 class="yeah1">Keep your mind fresh and <br>Satisfy your senses. <br></h3>
<a href="/costumerordering"><button class="button1"><b>Order Now</b></button></a>

</div>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<center>
<h2>MILKTEA PRODUCTS</h2>
<hr width="200px"  style='border: 1px solid black;'>
</center>
<br><br>    
<div class="gallery">
    <a href="/milktea1">
    <img src="toffeenutmilktea.jpg"  width="600" height="400">
  </a>
  <div class="desc">Toffee Nut MilkTea<br>₱70.00 - ₱80.00</div>
</div>

<div class="gallery">
<a href="/milktea2">
    <img src="matchalattemilktea.jpg"  width="600" height="400">
  </a>
  <div class="desc">MatchaLatte MilkTea<br>₱70.00 - ₱80.00</div>
</div>

<div class="gallery">
<a href="/milktea3">
    <img src="puddingmilktea.jpg"  width="600" height="400">
  </a>
  <div class="desc">Pudding MilkTea<br>₱70.00 - ₱80.00</div>
</div>

<div class="gallery">
<a href="/milktea4">
    <img src="cheesecakemilktea.jpg"  width="600" height="400">
  </a>
  <div class="desc">CheeseCake MilkTea<br>₱75.00 - ₱90.00</div>
</div>

<div class="gallery">
<a href="/milktea5">
    <img src="yakultmilktea.png"  width="600" height="400">
  </a>
  <div class="desc">Yakult MilkTea<br>₱70.00 - ₱85.00</div>
</div>

<div class="gallery">
<a href="/milktea6">
    <img src="milkteablackcoffee.jpg"  width="600" height="400">
  </a>
  <div class="desc">MilkTea Black Coffee<br>₱70.00 - ₱85.00</div>
</div>

<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<hr width="400px"  style='border: 1px solid black;'>
<center>
    <h2>We make you More Satisfied</h2>
</center>
<hr width="400px"  style='border: 1px solid black;'>
<br>
<div class="container-lg my-3">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="gps.jpg" width="740px" height="300px" alt="First Slide">
            </div>

            <div class="carousel-item">
                <img src="yellow.jpg" width="740px" height="300px" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="ube.jpg" width="740px" height="300px" alt="Third Slide">
            </div>
            <div class="carousel-item">
                <img src="yellow1.jpg" width="740px" height="400px" alt="Fourth Slide">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<div class="logo">
<img src="deliverylogo.png" width="90px" height="70px" style="border:0px;margin:110px">
<img src="satisfactionlogo.png" width="90px" height="70px" style="border:0px;margin:110px">
<img src="qualitylogo.png" width="90px" height="70px" style="border:0px;margin:110px">
</div>
<div class="logo">
<b style="border:0px;margin:110px">Delivery Service</b>
<b style="border:0px;margin:110px">Satisfaction</b>
<b style="border:0px;margin:120px">Quality Offers</b>
</div>
<div class="logo">
<i style="border:0px;margin:80px">We Delivered Faster</i>
<i style="border:0px;margin:50px">We continually improve our foods</i>
<i style="border:0px;margin:70px">Very affordable prices</i>
</div>
<br><br><br><br><br>
@endsection
</body>
</html>