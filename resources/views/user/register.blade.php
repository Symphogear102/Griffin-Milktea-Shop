<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<style>
		.button1 {
			width: 300px;
			background-color: #000005;
			border: 2px solid #000005;
			border-radius: 8px;
		}

	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="3.png" type="image/x-icon" />
</head>
<body>

<div class="container-fluid bg">
	<div class="row">
		<div class="col-md-4 col-sm4 col-xs-10"></div>	
		<div class="col-md-4 col-sm4 col-xs-10 form-div">
			<form class="form-container" action="register.php" method="post">
				<h1 class="text-center">Register Form</h1><br>

				<!-- <div class="alert alert-danger">
				 	<li>Username required</li>
				 </div>  --> 
			
			  <div class="form-group">
			    <label for="exampleInputEmail1">First Name</label>
			    <input type="text" class="form-control" name="fir" id="exampleInputEmail1" placeholder="Ex. Juan " required>
			  </div>

			
			  <div class="form-group">
			    <label for="exampleInputEmail1">Last Name</label>
			    <input type="text" class="form-control" name="las" id="exampleInputEmail1" placeholder="Ex. Dela Cruz" required>
			  </div>
			  
			  
			  <div class="form-group">
			    <label for="exampleInputEmail1">Address</label>
			  <select type="text" name="add" class="form-control" name="add" id="exampleInputEmail1" placeholder="Ex.PUROK 1 BINUANGAN" required> <br> 
    <option selected="selected">- Address -</option>
    <option  value="PUROK 1 BINUANGAN">PUROK 1 BINUANGAN</option>
    <option  value="PUROK 2 BINUANGAN">PUROK 2 BINUANGAN</option>
    <option  value="PUROK 3 BINUANGAN">PUROK 3 BINUANGAN</option>
    <option  value="PUROK 4 BINUANGAN">PUROK 4 BINUANGAN</option>
    <option  value="PUROK 5 BINUANGAN">PUROK 5 BINUANGAN</option>
    <option  value="PUROK 6 BINUANGAN">PUROK 6 BINUANGAN</option>
    <option  value="PUROK 7 BINUANGAN">PUROK 7 BINUANGAN</option>
</select>
</div>
			 
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" name="ema" id="exampleInputEmail1" placeholder="Ex.dan@yahoo.com" required>
			  </div>

			 
			  <div class="form-group">
			    <label for="exampleInputEmail1">Contact Number</label>
			    <input type="text" class="form-control" id="exampleInputEmail1"  name="con" placeholder="Ex. 639195887318" required>
			  </div>



			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="pas" id="exampleInputPassword1" placeholder="Password" required>
			  </div>
			  <br><br>
	
			  <button type="submit" class="button1">Sign up</button>
			  <br><br>
			  Already have an Account? <a href="/index"> Sign In!!!</a>
			</form>
			<br>
		</div>
		<div class="col-md-4 col-sm4 col-xs-10"></div>		
	</div>
</div>

</body>
</html>