<?php include("php/header.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BLH | Costumes</title>
    <link rel="stylesheet" href="css/costume.css">
</head>
<body>
    <input type="checkbox" id="menu-toggle">

    <aside class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="sport.php">Sport</a></li>
            <li><a href="costume.php" class="active">Costumes</a></li>
            <li><a href="cadeau.php">Cadeaux</a></li>
            <li><a href="hiver.php">Hiver</a></li>
            <li><a href="accesoires.php">Accessoires</a></li>
            <li><a href="promos.php" class="red">Promos</a></li>
        </ul>
    </aside>

    <div class="main-content">
        <h1 class="page-title">COSTUMES</h1>

        <section class="product-grid">
            <div class="product-card">
                <img src="costume1.jpg" alt="">
                <h3>Costume Homme</h3>
                <p>899 DH</p>
                <form action="php/add_to_cart.php" method="POST">
                    <input type="hidden" name="product_id" value="301">
                    <input type="hidden" name="price" value="899">
                    <button type="submit" class="buy-btn">Acheter</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>
