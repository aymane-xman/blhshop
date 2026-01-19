<?php
session_start();
require_once "db.php";

if(!isset($_SESSION['user_id'])){
    echo 0;
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT SUM(qty) as total_qty FROM cart WHERE user_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();

echo $result['total_qty'] ?? 0;
?>
