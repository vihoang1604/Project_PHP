<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php 
	include('headerAdmin.php');
	$sql = "SELECT * FROM products";
	$result = mysqli_query($mysqli,$sql);
	?>
	<div class="container" style="padding-top: 108px"></div>
			<div class="row">
				<h1> Thông tin giày của shops bạn </h1>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Tên sản phẩm</th>
							<th>Gía</th>
							<th>Số lượn</th>
							<th>Mã thể loại</th>
							<th>Ghi chú</th>
							<th>Đặc tả</th>
							<th>Ngày Nhập</th>
							<th>Ảnh</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<?php
					if($result)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							?>	
							<tbody>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['prod_name']; ?></td>
								<td><?php echo $row['price']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td><?php echo $row['category_id']; ?></td>
								<td><?php echo $row['comments']; ?></td>
								<td><?php echo $row['describes']; ?></td>
								<td><?php echo $row['imported_date']; ?></td>
								<td><img src="<?php echo $row['img']; ?>" style ="width: 100px; height: 100px;"></td>
								<td>
									<a href="formUpdateProduct.php?id=<?php echo $row['id'] ?> ">Sửa |</a>
									<a href="delete.php?id=<?php echo $row['id'] ?> ">Xóa</a>
									
							</td>
						</tbody>
					<?php }} ?>
				</table>
			</div>



		</body>
		</html>

