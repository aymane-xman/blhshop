<?php
session_start();
include("db.php");

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM cart WHERE user_id='$user_id'";
$result = $conn->query($sql);
?>

<link rel="stylesheet" href="../css/style.css">

<div class="main-content">
    <h1 class="page-title">Panier</h1>

    <table style="width:100%; border-collapse:collapse;">
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['product_name']; ?></td>
                <td><?= $row['price']; ?> DH</td>
                <td><?= $row['quantity']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
