
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
<img src="/employ.png" width="55px" height="55px"></a></span>
<div class="dropdown-content">
        <button type="submit" class="button1">Account</button>
        <button class="button1">Logout</button>
  </div>
</div>
</div>
</div>
</div>

<div class="vertical">
<br>
<div class="user">
<div class="account"> Welcome<br>


</div>
</div>
<br><br><br><br><br><br><br><br>
<div class="icon">
<a href="/tasks"><button class="button">Task</button></a><br><br>
<a href="/deliveries"><button class="button">MyOrder</button></a><br><br>
<a href="/delivery"><button class="button">Delivery</button></a><br><br>
<a href="/delboyordering"><button class="button">OrderNow</button></a><br><br>
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