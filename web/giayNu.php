<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Giay Nữ</title>
	<link rel="stylesheet" href="styleNam.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style type="text/css">
		header {
      width: 100%;
      height: 50vh;
      background: url(https://static-catalog.robins.vn/cms/image/20181105-Aldoshoes_996x250.jpg) no-repeat;
      background-size: 100%;
}
	</style>
</head>
<body>
	<div class="wrapper">

		<?php 
		include('connect.php');
		include("menu.php");

		 ?>
	</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 ">
					<div class="row">
					<?php 
			        $sql = "SELECT * FROM products where category_id='2' ";
			        $result = mysqli_query($mysqli,$sql);
			        if($result)
			        {
			          while($row = mysqli_fetch_assoc($result))
			          {?>
						<div class="col-md-4 ">
							<div class="row">
								<div class="col-md-12 ">
									<div class="thumbnail">
										<div class="hovereffect">
											
										</br><a href="detailNam.php"><img src="<?php echo $row['img']; ?>" ></a>
									</div>
										<div class="caption">
											</br><p>
												<label><?php echo $row['prod_name']; ?> </label>
											</p>
											<p>
												<label><?php echo $row['price']; ?>.000 vnđ</label>
											</p>
											<p>
												<a href="detailNu.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Add to card</a>
												<a href="detailNu.php?id=<?php echo $row['id'] ?>">Chi Tiết Sản Phẩm</a>
											</p>
										
								
										</div>
									</div>
								</div>
							</div>
						</div>
							<?php }} ?>
				</div>	
			</div>
			<div class="col-md-3 ">
				</br></br><div class="row">
					<button type="button" class="button"><img src="img/sales.gif" style="width: 300px; height: 500px;"></button>	
				</div>
				</br></br></br><div class="row">
					<button type="button" class="button"><img src="img/giamgia.gif" style="width: 300px; height: 500px;"></button>	
				</div>
			</div>
	</div>
			
		



	<?php include("footer.php"); ?>

</body>



</html>