<style>
input[type=text] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 4px;
  float: center;
  margin-left: 1%;
  color: black;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verified</title>
</head>
<body>
<form action="{{ route('verified') }}" method="POST">
@csrf
<center>
<h2 class="verified">Verified Code</h2>
<input type="hidden" class="form-control" name="uStat" id="uStat" value="{{ Auth::user()->uStat }}" readonly><br><br>
<input type="hidden" class="form-control" name="uFirst" id="uFirst" value="{{ Auth::user()->uFirst }}" readonly>
<input type="hidden" class="form-control" name="uLast" id="uLast" value="{{ Auth::user()->uLast }}" readonly>
<input type="text" class="form-control" name="vCode" id="vCode" value="{{ Auth::user()->vCode }}" ><br><br>
<input type="submit" class="button1">
</form>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    
        <button type="submit" class="button1">Go Back</button>
</center>
</body>
</html>