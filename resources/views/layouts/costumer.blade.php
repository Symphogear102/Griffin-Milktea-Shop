


<!DOCTYPE html>
<html lang="en">
<head>
<style>
.button2 {
  background-color: white;
  border: none;
  color:black;
  padding: 12px 1px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
      margin: 3px 1px;
  cursor: pointer;
  border-radius: 7px;
  font-family: "Copperplate Gothic Light";
 
} 

.button2:hover {
  background-color: #cccccc;
  color: black;

}
</style>
<link rel="stylesheet" href="/style3.css">
<link rel="stylesheet" href="/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title')</title>
  
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">

	<a class="navbar-brand" href="/about"><img src="cups.png" height="40px"> </a>
	<a class="navbar-brand" href="/about"> <h2 style="color: black;">Griffin</h2> </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<i class="fa fa-bars"></i>
		<span class="navbar-toggle-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto" style="list-style: none;">
    
			<li class="nav-item active">
				<a class="nav-item" href="/homepage"> Home </a>
			</li>
			<li class="nav-item active">
				<a class="nav-item" href="/milkteaproduct"> MilkTea </a>
			</li>
      <li class="nav-item active">
				<a class="nav-item" href="/costumer"> My Order </a>
			</li>
      <li class="nav-item active">
				<a class="nav-item" href="/costumerordering"> Order Now </a>
			</li>
      <li class="nav-item active">
				<a class="nav-item" href="/costumeraccount"> Account </a>
			</li>
			<li class="nav-item active">
				<a class="nav-item" href="/about"> About Us </a>
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


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

 @yield('content')
 </div> 
 </div> 
 <div class="footer1">
    <div class="textfooter">
  Copyright © Daniel's Sales and Yeah System 2020 | Contact Us: 09239471621 
  <div class="imgfooter">
    <img src="fb.png" width="25px" height="25px" style="border:3px;margin:13px">
    <img src="twiiter.png" width="25px" height="25px" style="border:3px;margin:13px">
    <img src="instagram.png" width="25px" height="25px" style="border:3px;margin:13px">
    </div>
</body>
</html>
