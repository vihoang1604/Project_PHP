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
			<?php include("menu.php");
			$id= $_GET['id'] ;
			?>
		
	</div>
		<div class="container-fluid">
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
									<label> <u>Mã Sản Phẩm :</u> 4240</label> 						
								</p>
								<p>
									<label> <u>Xuất xứ :</u> Hàng chính hãng xuất khẩu</u></label>
								</p>
								<p>
									<label> <u>Chất Liệu  :</u> Da, da lộn, vải</label>
								</p>
								<p>
									<?php 
						              $sql = "SELECT * FROM publishers where id=$id ";
						              $result = mysqli_query($mysqli,$sql);
						              if($result)
						              {
						                while($row = mysqli_fetch_assoc($result))
						                {?>
									<label><u>Số điện thoại: </u><?php echo $row['phone']; ?></label> <?php }} ?>	
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
									<label><u>: Gía bán </u><?php echo $row['price']; ?>.000 vnđ</label> <?php }} ?>
								</p>
								<p>
									<button type="button" class="btn btn-danger">Add to card</button>
								</p>

							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				</br></br>
					<div class="row">
						<button type="button" class="button"><img src="img/sales.gif" style="width: 300px; height: 400px;"></button>		
					</div>
				</div>
			</div>
			<div class="row">
				<div class="hovereffect">
					<img src="img/nam1.jpg" width="400px" height="400px">
					<img src="img/nam10.jpg" width="400px" height="400px">
					<img src="img/nam11.jpg" width="400px" height="400px">
				</div>
			</div>
			<?php include("footer.php"); ?>
</body>



</html>