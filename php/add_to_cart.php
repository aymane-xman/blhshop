<?php
session_start();
include("db.php");

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$price = $_POST['price'];

$sql = "INSERT INTO cart (user_id, product_id, product_name, price, quantity)
        VALUES ('$user_id','$product_id','$product_name','$price',1)";

if($conn->query($sql) === TRUE){
    header("Location: cart.php");
} else {
    echo "Error: " . $conn->error;
}
?>
