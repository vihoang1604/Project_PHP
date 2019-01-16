<?php 
error_reporting(1);
include('connect.php');
	$id = $_POST['id'];
	$pr_name = $_POST['p_name'];
    $pr_price = $_POST['p_price'];
    $pr_quan = $_POST['p_quan'];
    $pr_cate = $_POST['p_cate'];
    $pr_com = $_POST['p_com'];
    $pr_des = $_POST['p_des'];
    $pr_date = $_POST['p_date'];
    $img = $_POST["img"];


    if (empty($_FILES['fileUpload']['name'])) {
    	 $p_img = $img;
    }else {
    	$p_img = 'img/'.$_FILES['fileUpload']['name'];
	}
    $sql="UPDATE products set prod_name='$pr_name',price='$pr_price', quantity='$pr_quan',category_id='$pr_cate',comments='$pr_com',describes=$pr_des,img='$p_img' 
    where id='".$id."'";
    // echo "abc".$p_img;    echo $sql;
if (!is_dir('img')) {
	mkdir('img');
}
if (isset($_FILES['fileUpload'])) {
        if ($_FILES['fileUpload']['error'] > 0)
            echo "Upload lỗi rồi!";
        else {
            move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'img/' . $_FILES['fileUpload']['name']);

        }
    }

    if ($mysqli->query($sql)=== true ) {
		//echo" Update successfully <br>";
    

        // header("Location: displayProduct.php"); 
        
	}
		echo "<script>
            window.location.replace('http://localhost/PHP2018/PHP_Project/web/displayProduct.php');
            </script>";

 ?>