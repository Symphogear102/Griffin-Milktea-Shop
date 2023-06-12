
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
<div class="nav">
<div class="navbar">
<div class="account1">
<div class="dropdown">

<img src="/employ.png" width="35px" height="45px"></a></span>
<div class="dropdown-content">
<p><a href="/profile"><img src="employ.png" width="25px" height="25px">Account</a></p>
  <p><a href="/logout"><img src="logout.png" width="25px" height="25px">Logout</a></p>
  
  </div>
</div>
</div>
</div>
</div>

<div class="vertical">
<br>
<div class="user">
<div class="account"> Welcome<br>
Sample
</div>
</div>
<br><br>
<div class="icon">
<a href="/dash"><button class="button">Dashboard</button></a>
<a href="/employees"><button class="button">Employee</button></a>
<a href="/product"><button class="button">Product</button></a>
<br><br><br><br>
<h1>Sales</h1>
<br>
<a href="/month"><button class="button">MonthlySales</button></a>
<a href="/week"><button class="button">WeeklySales</button></a>
<a href="/daily"><button class="button">DailySales</button></a>
<br><br><br><br>
</div>
</div>
<br><br>
<div>
 @yield('content')
 </div> 
  <div class="footer">
    <br>
  Copyright © Daniel's Sales and Yeah System 2020
  <br>
</div>
</body>
</html>