
@extends('layouts.welcome')
@section('title','Griffin - MilkTea Shop')
@section('content')
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/logos.png">
</head>
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1" ></li>
		<li data-target="#slides" data-slide-to="2" ></li>
	</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="gps.jpg">
		<div class="carousel-caption">
			<h2 class="display-2">Griffin - Milktea Shop</h2>
			<h3 class="yeah">Keep your mind fresh and Satisfy your senses.</h3>	
			<a href="/login"><button type="button" class="btn btn-secondary btn-lg">Order Now</button> </a>
		</div>
	</div>
	<div class="carousel-item">
		<img src="yellow.jpg">
		<div class="carousel-caption">
			<h2 class="display-2" style='font-color: black;'>Griffin - Milktea Shop</h2>
			<h3> Keep your mind fresh and Satisfy your senses.</h3>	
			<a href="/login"><button type="button"  class="btn btn-secondary btn-lg">Order Now</button> </a>
		</div>
	</div>
	<div class="carousel-item">
		<img src="ube.jpg">
		<div class="carousel-caption">
			<h2 class="display-2">Griffin - Milktea Shop</h2>
			<h3> Keep your mind fresh and Satisfy your senses.</h3>		
			<a href="/login"><button type="button" class="btn btn-secondary btn-lg">Order Now</button> </a>
		</div>
	</div>
</div>

<div class="carousel-item">
		<img src="yellow1.jpg">
		<div class="carousel-caption">
			<h2 class="display-2">Griffin - Milktea Shop/h2>
			<h3> Keep your mind fresh and Satisfy your senses.</h3>		
			<a href="/login"><button type="button" class="btn btn-secondary btn-lg">Order Now</button> </a>
		</div>
	</div>
</div>
</div>

<!--- Jumbotron -->
<!-- <div class="container-fluid">
<div class="row jumbotron">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
		<p class="lead">
			Blah Blah Blah Blah Blah Blah  Blah <u>"If something that can be added or display here"</u> Blah Blah Blah Blah Blah Blah Blah
		</p>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
		<a href="#"> <button class="btn btn-outline-secondary btn-lg"> if button needed </button> </a>
	</div>
</div>
</div> -->

<!--- Welcome Section -->
<div id="home" >
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
        <div class="welcoming">
        <h2 class="display-4"> Welcome to our Shop</h2>
        <br>
        <hr>
	</div>
	<div class="col-12">
    <div class="welcoming">
		<p class="lead">
			Griffin Milktea Shop
		</p>
    </div>
</div>
</div>
</div>

					</div>

<br>
<!--- Three Column Section 
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-code"></i>
		<h3> HTML </h3>
		<p> Blah Blah Blah Blah Blah Blah Blah Blah </p>
	</div>	
		<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fas fa-bold"></i>
		<h3> Bootstrap </h3>
		<p> Blah Blah Blah Blah Blah Blah Blah Blah </p>
	</div>	
		<div class="col-xs-12 col-sm-6 col-md-4">
		<i class="fab fa-css3"></i>
		<h3> CSS </h3>
		<p> Blah Blah Blah Blah Blah Blah Blah Blah </p>
	</div>	
</div>
<hr class="my-4">
</div>
-->
<!--- Two Column Section -->
<div class="contaier-fluid padding">
<div class="row padding">
	<div class="col-s-2"></div>
	<div class="col-lg-5">
<br>
		<h2 > Griffin Milktea Shop </h2>
		<p class="lead">
			Griffin Milktea Shop are establish on January, 19, 2019.
		</p>
		<br> 
		<p class="lead">
			And the Owner of Griffin Milktea shop is Mrs. Victoriano <br> and Mr. Victoriano here in Obando Bulacan.
		</p>
		<br>
		<p class="lead">
			Griffin Milktea Shop are Located in Paliwas, Obando, Bulacan.
        </p>

		<br>
		<a href="/abouts" class="btn btn-secondary"> About Us </a>
    </div>
	<div class="col-lg-6">
	<img src="milkteashop.jpg" width="100%" height="100%">
</iframe>
	</div>
</div>
</div>
<!--- Fixed background 
<hr class="my-4">
<figure>
	<div class="fixed-wrap">
		<div id="fixed">

		</div>
	</div>
</figure>
-->


    @endsection
</body>
</html>