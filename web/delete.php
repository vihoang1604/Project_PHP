<?php 

require_once('connect.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql="delete from products where id=".$id;
	$result=mysqli_query($mysqli,$sql);
	if ($result) {
		echo "<script>
            window.location.replace('http://localhost/PHP2018/PHP_Project/web/displayProduct.php');
            </script>";
	}
}

?>