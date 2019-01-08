<!DOCTYPE html>
<html>
<head>
	<title>Trang login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
</head>
<body>
<form action="xulidangnhap.php" method="POST" role="form">
	<legend>Login</legend>

	<div class="form-group">
		<label for="">User name:</label>
		<input type="text" class="form-control" id="" name="tdn">
	</div>

	<div class="form-group">
		<label for="">Password:</label>
		<input type="text" class="form-control" id="" name="pass">
	</div>

	<div class="form-group">
	<a href="Sign_In.php" "email me" > Forget password? </a>
		
	</div>

	<button type="submit" class="btn btn-primary">Login</button>
</form>
</body>
</html>