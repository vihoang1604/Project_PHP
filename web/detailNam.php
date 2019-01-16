
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Chi Tiết Sản Phẩm Nam</title>
	<link rel="stylesheet" href="styleNam.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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
			<?php include("menu.php");
			include("addCart.php");
			$id= $_GET['id'] ;
			$id_cat= $_GET['category_id'] ;
			?>
		
	</div>
		<div class="container-fluid">
			<form method="post" action="detailNam.php?action=add&code=<?php echo $row['id']["code"]; ?>">
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<?php 
						              $sql = "SELECT * FROM products where id=$id ";
						              $result = mysqli_query($mysqli,$sql);
						              if($result)
						              {
						                while($row = mysqli_fetch_assoc($result))
						                {?>
						</br></br><div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<div class="hovereffect">
							<img src="<?php echo $row['img']; ?>" width="400px" height="400px">
							</div>
						</div>
					<?php }} ?>
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
							<div class="page-header">
								<h2>Thông tin mua hàng</h2>
								<p>
									<label> <u>Nhà Sản xuất :</u> Công ty phát triển website </label>					
								</p>
								<p>
									<?php 
						              $sql = "SELECT * FROM products where id=$id ";
						              $result = mysqli_query($mysqli,$sql);
						              if($result)
						              {
						                while($row = mysqli_fetch_assoc($result))
						                {?>
									<label> <u>Mã Sản Phẩm :</u> 4240A<?php echo $row['id']; ?></label> <?php }} ?>					
								</p>
								<p>
									<?php 
						              $sql = "SELECT * FROM products where id=$id ";
						              $result = mysqli_query($mysqli,$sql);
						              if($result)
						              {
						                while($row = mysqli_fetch_assoc($result))
						                {?>
									<label> <u>Số lượng Sản Phẩm còn :</u> <?php echo $row['quantity']; ?> Đôi</label> <?php }} ?>					
								</p>
								<p>
									<label> <u>Xuất xứ :</u> Hàng chính hãng xuất khẩu</u></label>
								</p>
								<p>
									<?php 
						              $sql = "SELECT * FROM products where id=$id ";
						              $result = mysqli_query($mysqli,$sql);
						              if($result)
						              {
						                while($row = mysqli_fetch_assoc($result))
						                {?>
									<label> <u>Chất Liệu  :</u> <?php echo $row['describes']; ?></label> <?php }} ?>	
								</p>
								<p>
									
									<label><u>Số điện thoại: </u>01254834122</label> 	
								</p>
								<p>
									<label> <u> Bảo hành  :</u> Hoàn tiền trong 6 tháng, sửa chữa miễn phí không giới hạn thời gian</label>
								</p>

								<p>
									<?php 
						              $sql = "SELECT * FROM products where id=$id ";
						              $result = mysqli_query($mysqli,$sql);
						              if($result)
						              {
						                while($row = mysqli_fetch_assoc($result))
						                {?>
									<label><u> Gía bán </u><?php echo $row['price']; ?>.000 vnđ</label> <?php }} ?>
								</p>
								<p>
									<div class="cart-action">
										<input type="text" class="product-quantity" name="quantity" value="1" size="2" />
										<input type="submit" class="btn btn-danger" value="Add to Cart" class="btnAddAction" />
									</div>
								</p>

							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				</br></br>
					<?php include("slide.php"); ?>
				</div>
			</div>
			<div class="row">
					<?php
					$sql = "SELECT * FROM products where category_id=$id_cat limit 6 ";
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
			</form>
		</div>
		<?php include("modelCart.php"); ?>
			<?php include("footer.php"); ?>
</body>



</html>
