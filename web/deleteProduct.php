<?php
     error_reporting(1);
    
    require_once('connect.php');
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql     = "DELETE FROM products WHERE id= $id;";
    $result = mysqli_query($mysqli,$sql);
    if ($result) {  
   
	 
}
header("location: displayProduct.php"); 
}


    ?>