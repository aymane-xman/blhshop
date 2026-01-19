<?php
session_start();
?>
<header class="header">
    <label for="menu-toggle" class="menu-btn">&#9776;</label>
    <a href="/index.php" class="logo-link">
        <img src="BLHO.png" class="logo" alt="BLH">
    </a>

    <nav class="nav-links">
        <a href="#about">About</a>
        <a href="#fonctions">Fonctions</a>
    </nav>

    <div class="auth-buttons">
        <?php if(isset($_SESSION['user_id'])): ?>
            <a href="php/cart.php" class="btn">Panier</a>
            <a href="php/logout.php" class="btn">Logout</a>
        <?php else: ?>
            <a href="php/login.php" class="btn">Login</a>
            <a href="php/signup.php" class="btn">Sign up</a>
        <?php endif; ?>
    </div>
</header>
