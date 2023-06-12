


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
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

	<a class="navbar-brand" href="/homepage"><img src="cups.png" height="30px"> </a>
	<a class="navbar-brand" href="/homepage"> <h5 style="color: black;">Griffin</h5> </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<i class="fa fa-bars"></i>
		<span class="navbar-toggle-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto" style="list-style: none;">
      <li class="nav-item active">
				<a class="nav-item" href="/employaccount"> Account </a>
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
Admin




</div>
</div>
<br><br>
<div class="icon">
<a href="/homepage" ><button  class="button"><p class="fas fa-chart-bar"></p> Dashboard</button></a>
<a href="/transaction"><button class="button"><p class="fas fa-chart-line"></p> Transaction</button></a>
<a href="/employees"><button class="button"><p class="fas fa-users"></p> Employee</button></a>
<a href="/employeetask"><button class="button"><p class="fas fa-tasks"></p> EmployeeTask</button></a>
<a href="/costumerall"><button class="button"><p class="fas fa-user-plus"></p> Costumer</button></a>
<a href="/costumerpaidcancel"><button class="button"><p class="fas fa-dollar-sign"></p> Paid/Cancel</button></a>
<a href="/product"><button class="button"><p class="fas fa-boxes"></p> Product</button></a>
<br><br>
<h1 class="icons">Sales</h1>
<br>
<a href="/year"><button class="button"><p class="fas fa-money-bill-alt"></p> YearlySales</button></a>
<a href="/month"><button class="button"><p class="fas fa-money-bill-alt"></p> MonthlySales</button></a>
<a href="/daily"><button class="button"><p class="fas fa-money-bill-alt"></p> DailySales</button></a>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

</div>
</body>
</html>
