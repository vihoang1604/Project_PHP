<!-- <?php

// include('connect.php');
// $id_Pro = $_GET['id'];
// echo $id_Pro;
// // if(isset($_GET['id'])){
	
// 	$cart=$_SESSION['cart'];

// 	$sql='SELECT * FROM products where id =<?php echo $id_Pro?>';
// 	$result= mysqli_query($sql);
// 	$data= $result->fetch_assoc();
// 	echo "111";
//  echo $data['prod_name'];
// // }

// 	if (!empty($cart)) {
// 		if (array_key_exists($id_Pro, $cart)) {
// 			$cart[$id_Pro]=  array(
// 				"sl"=>(int)$cart[$id_Pro]["sl"]+1,
// 				"price"=>data['price'],
// 				"name"=>data['prod_name'],
// 				"img"=>data[9]
// 			);
// 		}
// 		else{
// 			$cart[$id_Pro]=  array(
// 				"sl"=>1,
// 				"price"=>data[3],
// 				"name"=>data[2],
// 				"img"=>data[9]

// 			);
// 		}

// 	}
// 	else{
// 		$cart[$id_Pro]=  array(
// 				"sl"=>1,
// 				"price"=>data[3],
// 				"name"=>data[2],
// 				"img"=>data[9]
// 			);
// 	}
// 	$_SESSION['cart']=$cart;
// 	}
// echo '<pre>';
// print_r($_SESSION['cart']);
// die;
//  ?> -->



<?php
include "menu.php";
include('connect.php');
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
    $_SESSION["id"]=$id;
    
    
    $result=mysqli_query($mysqli,"SELECT * FROM products WHERE id = $id");
    $row = $result->fetch_assoc();
    if(!empty($_SESSION["cart"]))
    {
        $cart =  $_SESSION["cart"];
        if(array_key_exists($id,$cart))
        {
            $cart[$id]=array("name"=>$row["prod_name"],
                            "quantity" => (int)$cart[$id]["quantity"]+1,
                            "price"=>$row["price"],
                            "img"=>$row["img"]
                        );
        }
        else
        {
            $cart[$id]=array("name"=>$row["prod_name"],
                            "quantity" => 1,
                            "price"=>$row["price"],
                            "img"=>$row["img"]
                        );
        }
    }
    else
    {
        $cart[$id]=array(
        	"name"=>$row["prod_name"],
        	"quantity" => 1,
        	"price"=>$row["price"],
        	"img"=>$row["img"]
        );

    }
    $_SESSION["cart"] = $cart;
}
else
{

}
if (isset($_POST["delete"])) 
    {
        
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Thanh Toán</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        header {
        width: 100%;
        height: 100vh;
        background: url(http://static.wifi.danang.gov.vn/upload/userfiles/images/Fermani_shoes_5_doan_tran_nghiep_hanoi_vn1d.JPG) no-repeat;
        background-size: 100%;
      }
      </style>
</head>
<body>
   
	<div class="wrapper">
		<?php include("menu.php"); ?>
	
	</div>
   <form action="updateCart.php" method="POST" role="form">
		<div class="container-fluid">
			<div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Số Lượng</th>
                        <th class="text-center">Gía</th>
                        <th class="text-center">Thành Tiền</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php
                $totalPrice = 0;
                foreach($cart as $key => $value){
                    $totalPrice+=$value["quantity"]*$value["price"];
                ?>
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php echo $value["img"]?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $value["name"];  ?></a></h4>
                                <span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input name = "quantity" value = "<?php echo $value['quantity']?>">
                        </td>
                        <td class="col-md-1 text-center"><strong><?php echo $value["price"]?>.000vnd</strong></td>
                        <td class="col-md-1 text-center"><strong><?php echo $value["quantity"]*$value["price"]?>.000vnd</strong></td>
                        <input type="text" name="id" class="hidden" value="<?php echo $id ?>">
                        <td class="col-md-1">
                        <a href="updateCart.php?id=<?php echo $row['id'] ?>">
                        <button type="button" name="delete" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Xóa
                        </button></a>
                    	</td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-update"></span>Sửa
                        </button></td>
                    </tr                
                    <?php 
            		} ?>
                    
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>50.000vnd</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><?php echo $totalPrice+50?>.000vnd</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href="giayNam.php"><button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></a></td>
                        <td>
                        <a href="Test_Login.php">
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
			</div>

</form>
		<?php include("footer.php"); ?>
</body>



</html>