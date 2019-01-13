<?php
include('connect.php');

// Prepare an insert statement
$sql = "INSERT INTO `categories` (cat_name,comments) VALUES (?, ?)";

mysqli_set_charset($mysqli, 'UTF8');

if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("ss", $c_name, $c_com);
    

    /* Set the parameters values and execute
    the statement to insert a row */
    $c_name = $_POST['ca_name'];
    $c_com = $_POST['ca_com'];
    $stmt->execute();
    
    //echo "Records inserted successfully.";
//} else{
   // echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}

// Close statement
$stmt->close();
header("Location: formCategory.php"); /* Redirect browser */
exit(); /* Redirect browser */
// Close connection
$mysqli->close();
?>
