<?php include("../header.php"); ?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/accesoires.css">

<body>
<div class="main-content">
  <h1 class="page-title">ACCESSOIRES</h1>

  <section class="product-grid">
    <div class="product-card">
      <img src="../img/accessoire1.jpg" alt="">
      <h3>Montre</h3>
      <p>299 DH</p>
      <form action="../php/add_to_cart.php" method="POST">
        <input type="hidden" name="product_id" value="501">
        <input type="hidden" name="product_name" value="Montre">
        <input type="hidden" name="price" value="299">
        <button class="buy-btn" type="submit">Ajouter au panier</button>
      </form>
    </div>
  </section>
</div>
<?php include("../footer.php"); ?>
</body>
