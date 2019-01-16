<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

if(!empty($_GET["action"])) {
	switch($_GET["action"]) {

		case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM products WHERE id='" . $_GET["code"]["id"] . "'");
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
			window.location.replace('http://localhost/PHP2018/PHP_Project/web/index.php');
			</script>";
		}
		break;

		case 'empty':
		unset($_SESSION["cart_item"]);
		echo "<script>
		window.location.replace('http://localhost/PHP2018/PHP_Project/web/index.php');
		</script>";
		break;

		case 'remove':
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
				if($_GET["code"] == $k)
					unset($_SESSION["cart_item"][$k]);				
				if(empty($_SESSION["cart_item"]))
					unset($_SESSION["cart_item"]);
			}
		}
		echo "<script>
		window.location.replace('http://localhost/PHP2018/PHP_Project/web/index.php');
		</script>";
		break;
	}
}

?>
