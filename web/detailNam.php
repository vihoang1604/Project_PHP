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
			<?php include("menu.php"); ?>
		
	</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						</br></br><div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
							<div class="hovereffect">
							<img src="img/nam1.jpg" width="400px" height="400px">
							</div>
						</div>
						<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
							<div class="page-header">
								<h2>Thông tin mua hàng</h2>
								<p>
									<label><u>Nhà sản xuất: </u>Web Giày Dép</label> 						
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
									<label> <u> Điện Thoại :</u> 01254834122</label>
								</p>
								<p>
									<label> <u> Bảo hành  :</u> Hoàn tiền trong 6 tháng, sửa chữa miễn phí không giới hạn thời gian</label>
								</p>

								<p>
									<label><u>Gía bán :</u> 500.000VND</label>
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
<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Product 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price">$1.99</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							<td data-th="Subtotal" class="text-center">1.99</td>
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="visible-xs">
							<td class="text-center"><strong>Total 1.99</strong></td>
						</tr>
						<tr>
							<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>