<style>
body {
    font-family: 'Poppins', sans-serif;
	text-decoration: none;
	background-color: black;
}

.sana {
    list-style-type: none;
    text-decoration: none;
    
}
</style>
<!doctype html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style3.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Griffin - MilkTea Shop</title>

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">

	<a class="navbar-brand" href="/abouts"><img src="cups.png" height="40px"> </a>
	<a class="navbar-brand" href="/abouts"> <h2 style="color: black;">Griffin</h2> </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<i class="fa fa-bars"></i>
		<span class="navbar-toggle-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto" style="list-style: none;">
			<li class="nav-item active">
				<a class="nav-item" href="/"> Home </a>
			</li>
			<li class="nav-item active">
				<a class="nav-item" href="/products"> MilkTea </a>
			</li>
			<li class="nav-item active">
				<a class="nav-item" href="/abouts"> About Us </a>
			</li>
			<li class="nav-item active">
				<a class="nav-item" href="/login"> Login </a>
			</li>
		</ul>
	</div>
</div>
</nav>
        <main class="py-4">
            @yield('content')
			<div class="footer2">
    <div class="imgfooter">
    <img src="fb.png" width="25px" height="25px" style="border:3px;margin:13px">
    <img src="twiiter.png" width="25px" height="25px" style="border:3px;margin:13px">
    <img src="instagram.png" width="25px" height="25px" style="border:3px;margin:13px">
    </div>
    <div class="textfooter">
  Copyright © Daniel's Sales and Yeah System 2020 | Contact Us: 09239471621
  </div>
        </main>
    </div>
</body>
</html>
