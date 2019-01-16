<?php
include('connect.php');
session_start();
// Prepare an insert statement
 $_SESSION['username'] = "abc";

$sql = "INSERT INTO `orders` (cus_name,date) VALUES (?, ?)";

mysqli_set_charset($mysqli, 'UTF8');
// echo $_SESSION["username"];

if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sd", $cus_name, $date);
    

    /* Set the parameters values and execute
    the statement to insert a row */
    $cus_name = $_SESSION["username"];
    $date = current();
    $stmt->execute();
    
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}

// Close statement
$stmt->close();
// header("Location: formCategory.php"); /* Redirect browser */
// exit(); /* Redirect browser */
// Close connection
$mysqli->close();

 ?>

