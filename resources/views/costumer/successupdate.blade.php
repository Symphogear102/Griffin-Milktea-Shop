<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Success</title>
</head>
<body>
@csrf
<br><br><br>
<center>
<h2 class="verified">Successfully Update your<br>Account</h2>
<input type="hidden" class="form-control" name="zStat" id="zStat" value="{{ Auth::user()->zStat }}" readonly>
<input type="hidden" class="form-control" name="zFirst" id="zFirst" value="{{ Auth::user()->zFirst }}" readonly>
<a href="/costumeraccount"><input type="submit" class="button1" value="Go Back"></a>
</form>
</center>
</body>
</html>