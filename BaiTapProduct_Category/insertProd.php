<?php
include('connect.php');

// Prepare an insert statement
$sql = "INSERT INTO `products` (prod_name,price,quantity,category_id,comments,imported_date,img) VALUES (?, ?, ?,?,?,?,?)";
mysqli_set_charset($mysqli, 'UTF8');


if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("siiisds", $pr_name, $pr_price, $pr_quan,$pr_cate,$pr_com,$pr_date,$p_img);
    

    /* Set the parameters values and execute
    the statement to insert a row */
    if (isset($_FILES['fileUpload'])) {
        if ($_FILES['fileUpload']['error'] > 0)
            echo "Upload lỗi rồi!";
        else {
            move_uploaded_file($_FILES['fileUpload']['error'], 'uploads/' . $_FILES['fileUpload']['name']);

        }
    }

    $pr_name = $_POST['p_name'];
    $pr_price = $_POST['p_price'];
    $pr_quan = $_POST['p_quan'];
    $pr_cate = $_POST['p_cate'];
    $pr_com = $_POST['p_com'];
    $pr_date = "now()";
    $p_img = $_FILES['fileUpload']['name'];
    $stmt->execute();
    
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}

// Close statement
$stmt->close();

// Close connection
$mysqli->close();
?>
