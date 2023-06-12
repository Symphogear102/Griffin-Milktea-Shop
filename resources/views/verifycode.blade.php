<?php
 session_start();
 require "connectDB.php";
 if (isset($_POST['ema'])) {$ema = $_POST['ema'];
 $pas = $_POST['pas'];
 } else {
 $ema = $_SESSION['sesEma'];
 $pas = $_SESSION['sesPas'];
 }
 $sql = "SELECT * FROM employee WHERE uEmail='$ema' AND uPass='$pas'";
 $result = $conn->query($sql);
 if ($result->num_rows == 0) {
	$_SESSION['vCode'] = $row['vCode'];
	$_SESSION['sesName'] = $row['uFirst'];
	$_SESSION['sesLast'] = $row['uLast'];
	$_SESSION['sesAdd'] = $row['uAdd'];
	$_SESSION['sesEma'] = $row['uEmail'];
	$_SESSION['sesCode'] = $row['pwCode'];
	$_SESSION['sesPas'] = $row['uPass'];
 echo '<script type="text/javascript"> window.location = "index.html"; </script>';
 } else {

 $row = $result->fetch_assoc();
 $_SESSION['vCode'] = $row['vCode'];
 $_SESSION['sesName'] = $row['uFirst'];
 $_SESSION['sesLast'] = $row['uLast'];
 $_SESSION['sesAdd'] = $row['uAdd'];
 $_SESSION['sesEma'] = $row['uEmail'];
 $_SESSION['sesCode'] = $row['pwCode'];
 $_SESSION['sesPas'] = $row['uPass'];
 $_SESSION['sesSta'] = $row['uStat'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .button1 {
			width: 300px;
			background-color: #000005;
			border: 2px solid #000005;
			border-radius: 8px;
		}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerifyCode</title>
	
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="3.png" type="image/x-icon" />
</head>
<body>
<div class="container-fluid bg">
	<div class="row">
		<div class="col-md-4 col-sm4 col-xs-10"></div>	
		<div class="col-md-4 col-sm4 col-xs-10">
			<form class="form-container" action="verifycode1.php" method="POST">
                <h1 class="text-center">Verify Code</h1>
                <label for="exampleInputEmail1"><?php echo $_SESSION['sesEma'] ?></label>
				<div class="form-group">
			    <label for="exampleInputEmail1">Verify Code</label>
			    <input type="text" class="form-control" name="verify" id="exampleInputEmail1" placeholder="VerifyCode" required>
			  </div>

			  <div class="form-group">

			    <input type="hidden" class="form-control" name="fir" id="exampleInputEmail1" value="<?php echo $_SESSION['sesName']; ?>" required>
			  </div>

			  <div class="form-group">

			    <input type="hidden" class="form-control" name="las" id="exampleInputEmail1" value="<?php echo $_SESSION['sesLast']; ?>" required>
			  </div>

			  <div class="form-group">

			    <input type="hidden" class="form-control" name="add" id="exampleInputEmail1" value="<?php echo $_SESSION['sesAdd']; ?>" required>
			  </div>

			  <div class="form-group">

			    <input type="hidden" class="form-control" name="ema" id="exampleInputEmail1" value="<?php echo $_SESSION['sesEma']; ?>" required>
			  </div>

			  <button type="submit" name="submit" class="button1">Enter</button>
              <br><br>
			  Go Back <a href="index.html"> Click Here</a>
			</form>	
		</div>
		
		<div class="col-md-4 col-sm4 col-xs-10"></div>		
	</div>
</div>
</body>
</html>