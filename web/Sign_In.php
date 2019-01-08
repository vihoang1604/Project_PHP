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
		<?php 
		error_reporting(1); ?>
		<br><br><br>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">SIGN IN</h3>
			</div>
			<div class="panel-body">
				<form  action="Test_Sign_In.php" method="POST" role="form">
					<div class="form-group">
						<label for="">Full name:</label>
						<input type="text" class="form-control" id="" name="fullname" value="<?php echo($POST_["fullname"]) ?>">
					</div>

					<div class="form-group">
						<label for="">User name:</label>
						<input type="text" class="form-control" id="" name="username" value="<?php echo($POST_["username"]) ?>" >
					</div>

					<div class="form-group">
						<label for="">Email:</label>
						<input type="text" class="form-control" id="" name="email" value="<?php echo($POST_["email"]) ?>">
					</div>


					<div class="form-group">
						<label for="">Password:</label>
						<input type="password" class="form-control" id="" name="password" value="<?php echo($POST_["password"]) ?>" >
					</div>

					<div class="form-group">
						<label for="">Confirm password:</label>
						<input type="password" class="form-control" id="" name="confirmPassword" value="<?php echo($POST_["confirmPassword"]) ?>">
					</div>

					<div class="form-group">
					<a href="" "email me" name="forgetPassword">Forget password? </a>	
					</div>

					<button type="submit" name="dangki"  class="btn btn-default">OK</button>
					<button type="cancel" name="cancel"  class="btn btn-danger"><a href="index.php" style="color: white; text-decoration: none;"> Cancel</a></button>
				</form>

			</div>
		</div>
	</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
	</body>
	</html>