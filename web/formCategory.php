<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<?php error_reporting(1);
	 require_once('connect.php');
	 include('headerAdmin.php'); ?>
	<div class="container" style="padding-top: 108px; margin : 0px; width: 100%" ">

		<div class="row">

			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">Thêm Thể Loại</h3>
				</div>
				<div class="panel-body">
					<form action="insertCate.php" method="post" name="forml" id="forml">

						<div class="row">

							<div class="row">
								Tên Thể loại:
							</div>

							<div class="row">

								<input type="text" name="ca_name"  class="form-control" required="Bạn nhập tên thể loại" >

							</div>


						</div>
						
						<div class="row">

							<div class="row">
								Ghi chú
							</div>

							<div class="row">

								<input type="text" name="ca_com" id="dt" class="form-control" required="Bạn nhập ghi chú thể loại">

							</div>


						</div>
						<br>
						<div class="row">

							<button type="submit" name="submit" value="add" class="btn btn-primary">Thêm Thể loại</button>
							<button type="submit" name="submit" value="add" class="btn btn-primary" ><a href="displayProduct.php" style="color: white "> Thoát</a></button>


						</div>

					</form>






				</div>
			</div>

		</div>

	</div>

</body>

</html>