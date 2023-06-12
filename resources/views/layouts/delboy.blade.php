<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/style3.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
  
</head>
<body>
<div class="nav">
<div class="navbar">

<img class="images" src="cups.png" height="40px">
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">

	<a class="navbar-brand" href="/DelboyHome"><img src="cups.png" height="30px"> </a>
	<a class="navbar-brand" href="/DelboyHome"> <h5 style="color: black;">Griffin</h5> </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<i class="fa fa-bars"></i>
		<span class="navbar-toggle-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto" style="list-style: none;">
      <li class="nav-item active">
				<a class="nav-item" href="/deliveryboyaccount"> Account </a>
			</li>
      <li class="nav-item active">
      <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                  
        <a href="" class="nav-item"><button type="submit" class="nav-item">Logout</button></a>
        </form>
        </li>
		</ul>
	</div>
</div>
</nav>
<div class="dropdown-content">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                  
        <button type="submit" class="button1">Logout</button>
        </form>
  </div>
</div>
</div>
</div>
</div>

<div class="vertical">
<br>
<div class="user">
<div class="account"> Welcome<br>
Delivery Boy
</div>
</div>
<br><br>
<div class="icon">
<a href="/DelboyHome"><button class="button"><p class="fas fa-home"></p> Home</button></a><br>
<a href="/tasks"><button class="button"><p class="fas fa-tasks"></p> Task</button></a><br>
<a href="/deliveries"><button class="button"><p class="fas fa-clipboard-check"></p> MyOrder</button></a><br>
<a href="/delivery"><button class="button"><p class="fas fa-motorcycle"></p> Delivery</button></a><br>
<a href="/delboyordering"><button class="button"><p class="fas fa-shopping-cart"></p> OrderNow</button></a><br>
<br><br><br><br>
</div>
</div>
<br><br>


<div>
 @yield('content')
 </div> 
 <div class="footer">
    <div class="imgfooter">
    <img src="fb.png" width="25px" height="25px" style="border:3px;margin:13px">
    <img src="twiiter.png" width="25px" height="25px" style="border:3px;margin:13px">
    <img src="instagram.png" width="25px" height="25px" style="border:3px;margin:13px">
    </div>
    <div class="textfooter">
  Copyright © Daniel's Sales and Yeah System 2020 | Contact Us: 09239471621
  </div>
</body>
</html>
