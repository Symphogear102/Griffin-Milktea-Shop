<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verified-Success</title>
</head>
<body>
<form action="{{ route('homepage') }}" method="">
@csrf
<center>
<h2 class="verified">Successfully Login</h2>
<input type="hidden" class="form-control" name="zStat" id="zStat" value="{{ Auth::user()->zStat }}" readonly
<input type="hidden" class="form-control" name="zFirst" id="zFirst" value="{{ Auth::user()->zFirst }}" readonly>
<input type="hidden" class="form-control" name="zLast" id="zLast" value="{{ Auth::user()->zLast }}" readonly>
<input type="hidden" class="form-control" name="zCode" id="zCode" value="{{ Auth::user()->zCode }}" >
<input type="submit" class="button1" value="Continue">
</form>
</center>
</body>
</html>