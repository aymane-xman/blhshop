<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BLH Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include("php/header.php"); ?>

    <div class="home">
        <h1>Bienvenue sur BLH Shop</h1>
        <p>Choisissez une catégorie</p>
        <div class="home-grid">
            <a class="home-card" href="sport.php">Sport</a>
            <a class="home-card" href="costume.php">Costumes</a>
            <a class="home-card" href="cadeau.php">Cadeaux</a>
            <a class="home-card" href="hiver.php">Hiver</a>
            <a class="home-card" href="accesoires.php">Accessoires</a>
            <a class="home-card" href="promos.php">Promos</a>
        </div>
    </div>
</body>
</html>
