<?php
    // error_reporting(1);
    
    require_once('connect.php');
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql     = "DELETE FROM products WHERE id= $id;";
    if ($mysqli->query($sql)==true) {
        include('display.php');
    }
}

    ?>