<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Giay Nam</title>
      <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="styleNam.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <style type="text/css">
      	header {
      width: 100%;
      height: 50rem;
      background: url(http://vn-test-11.slatic.net/skyline/i8/d10ea94617cc4763b6197b79c83397fb-1360-480.jpg_desktop.jpg) no-repeat;
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
			        $sql = "SELECT * FROM products where category_id='1' ";
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
												<a href="detailNam.php" class="btn btn-danger">Add to card</a>
												<a href="detailNam.php?id=<?php echo $row['id'] ?>">Chi Tiết Sản Phẩm</a>
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