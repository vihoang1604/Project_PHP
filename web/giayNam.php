<?php
	session_start();
	require_once("dbcontroller.php");
	$db_handle = new DBController();

	if(!empty($_GET["action"])) {
	switch($_GET["action"]) {

		case "add":
			if(!empty($_POST["quantity"])) {
				$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE id='" . $_GET["code"] . "'");
				$itemArray = array($productByCode[0]["id"]=>array(
				'prod_name'=>$productByCode[0]["prod_name"],
				'id'=>$productByCode[0]["id"],
				'quantity'=>$_POST["quantity"],
				'price'=>$productByCode[0]["price"], 
				'img'=>$productByCode[0]["img"]));
				
				if(!empty($_SESSION["cart_item"])) {
					if(in_array($productByCode[0]["id"],array_keys($_SESSION["cart_item"]))) {
						foreach($_SESSION["cart_item"] as $k => $v) {
								if($productByCode[0]["id"] == $k) {
									if(empty($_SESSION["cart_item"][$k]["quantity"])) {
										$_SESSION["cart_item"][$k]["quantity"] = 0;
									}
									$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
								}
						}
					} else {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
					}
				} else {
					$_SESSION["cart_item"] = $itemArray;
				}
					
			echo "<script>
	window.location.replace('http://localhost/PHP_Project/web/giayNam.php');
</script>";
			}
			break;

		case 'empty':
			unset($_SESSION["cart_item"]);
				echo "<script>
	window.location.replace('http://localhost/PHP_Project/web/giayNam.php');
</script>";
			break;



		case 'remove':
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["id"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
				}
			}
// 				echo "<script>
// 	window.location.replace('http://localhost/PHP_Project/web/giayNam.php');
// </script>";
			break;
}
}

?>










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

.modal-window {
  position: fixed;
  background-color: rgba(255, 255, 255, 0.25);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s;
}
.modal-window:target {
  opacity: 1;
  pointer-events: auto;
}
.modal-window > div {
  width: 700px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  padding: 2em;
  background: #ffffff;
  color: #333333;
}
.modal-window header {
  font-weight: bold;
}
.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
  color: #333333;
}

.modal-close {
  color: #aaa;
  line-height: 50px;
  font-size: 80%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}
.modal-close:hover {
  color: #000;
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
			          	<form method="post" action="giayNam.php?action=add&code=<?php echo $row['id']["code"]; ?>">
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
												<a href="detailNam.php?id=<?php echo $row['id'] ?>">Chi Tiết Sản Phẩm</a>
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
					<button type="button" class="button"><img src="img/sales.gif" style="width: 300px; height: 500px;"></button>	
				</div>
				</br></br></br><div class="row">
					<button type="button" class="button"><img src="img/giamgia.gif" style="width: 300px; height: 500px;"></button>	
				</div>
			</div>
	</div>
			
	<?php include("footer.php"); ?>

<div id="open-modal" class="modal-window">
  <div>
    <a href="#" title="Close" class="modal-close">Close</a>
    <h1>Giỏ hàng</h1>
    <?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
    <div>
    	<table class="table">
	  <thead class="thead-dark">
		 <tr>
			<th scope="col">Tên SP</th>
			<th scope="col">Số lượng</th>
			<th scope="col">Giá</th>
			<th scope="col">Hình ảnh</th>
			<th scope="col">Thao tác</th>
			<th><a id="btnEmpty" class="btn btn-danger" href="giayNam.php?action=empty">Empty Cart</a></th>
		 </tr>
	  </thead>
	  <tbody>
		<?php

 		foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
			

			<tr>
					<th><?php echo $item["prod_name"]; ?></th>
					<th><?php echo $item["quantity"]; ?></th>
					<td><?php echo $item["price"]; ?>.000 VND</td>
					<td><img height="50px" width="50px" src="<?php echo $item["img"]; ?>"></td>
					<td>
						<a href="giayNam.php?action=remove&id=<?php echo $item["id"]; ?>" class="btn btn-warning"> Remove
					</a>
					</td>
				 </tr>
		<?php
		$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
			}
		?>


		<tr>
			<td colspan="2" align="right">Total:</td>
			<td align="right"><?php echo $total_quantity; ?></td>
			<td align="right" colspan="2"><strong><?php echo "VND ".number_format($total_price, 3); ?></strong></td>
			<td></td>
			</tr>
	  </tbody>
	</table>
	<?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
    </div>
    </div>
</div>
</body>
</html>