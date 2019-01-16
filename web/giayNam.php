<?php include("addCart.php") ?>

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
					$id= $_GET['id'] ; 
					$sql = "SELECT * FROM products where category_id=$id ";
					$result = mysqli_query($mysqli,$sql);
					if($result)
					{
						while($row = mysqli_fetch_assoc($result))
							{?>
								<form method="post" action="giayNam.php?action=add&code=<?php echo $row['id']; ?>">
									<div class="col-md-4 ">
										<div class="row">
											<div class="col-md-12 ">
												<div class="thumbnail">
													<div class="hovereffect">
													</br>
													<a href="detailNam.php"><img src="<?php echo $row['img']; ?>" ></a>
												</div>
												<div class="caption">
												</br><p>
													<label><?php echo $row['prod_name']; ?> </label>
												</p>
												<p>
													<label><?php echo $row['price']; ?>.000 vnđ</label>
												</p>
												<p>
													<div class="cart-action">
														<input type="text" class="product-quantity" name="quantity" value="1" size="2" />
														<input type="submit" class="btn btn-danger" value="Add to Cart" class="btnAddAction" />
													</div>
													<br>
													<a href="detailNam.php?id=<?php echo $row['id'] ?>&category_id=<?php echo $row['category_id'] ?> ">Chi Tiết Sản Phẩm</a>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					<?php }} ?>
				</div>	
			</div>
			<div class="col-md-3 ">
			</br></br><div class="row">
				<?php include("slide.php"); ?>	
			</div>
		</br></br></br><div class="row">
			<button type="button" class="button"><img src="img/sales.gif" style="width: 300px; height: 500px;"></button>	
		</div>
	</div>
</div>

<?php include("footer.php"); ?>
<?php include("modelCart.php"); ?>
<?php header("Location: index.php"); /* Redirect browser */
exit(); ?>


</body>
</html>