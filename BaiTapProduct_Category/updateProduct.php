<?php 
error_reporting(1);
include('connect.php');
	$id = $_POST['id'];
	$pr_name = $_POST['p_name'];
    $pr_price = $_POST['p_price'];
    $pr_quan = $_POST['p_quan'];
    $pr_cate = $_POST['p_cate'];
    $pr_com = $_POST['p_com'];
    $pr_date = $_POST['p_date'];
    $img = $_POST["img"];
    if (isset($_FILES['fileUpload']['name'])) {
    	 $p_img = $img;
    }else {
    	$p_img = $_FILES['fileUpload']['name'];
	}
    $sql="UPDATE products set prod_name='$pr_name',price='$pr_price', quantity='$pr_quan',category_id='$pr_cate',comments='$pr_com',img='$p_img' 
    where id='".$id."'";
    echo "abc".$p_img;    echo $sql;
if (!is_dir('uploads')) {
	mkdir('uploads');
}
if (isset($_FILES['fileUpload'])) {
        if ($_FILES['fileUpload']['error'] > 0)
            echo "Upload lỗi rồi!";
        else {
            move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'uploads/' . $_FILES['fileUpload']['name']);

        }
    }

    if ($mysqli->query($sql)=== true ) {
		echo" Update successfully <br>";
	}
		else
		{
	echo"<br>ERROR:Couls not able to execute $sql.".$mysqli-> error;
		}

 ?>