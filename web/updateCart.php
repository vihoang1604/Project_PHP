
<?php
session_start();
$cart=$_SESSION['cart'];
$id=$_GET['id'];
echo $id;
if($id==0)
{
 unset($_SESSION['cart']);
 echo "thanh cong";
}
else
{
unset($_SESSION['cart'][$id]);
echo "thanh cong1";
}

  // header("location:actionCart.php");
  // exit();
?>