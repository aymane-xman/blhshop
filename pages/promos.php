<?php include("../header.php"); ?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/promos.css">

<body>
<div class="main-content">
  <h1 class="page-title">PROMOS</h1>

  <section class="product-grid">
    <div class="product-card">
      <img src="../img/promo1.jpg" alt="">
      <h3>Promo 50%</h3>
      <p>199 DH</p>
      <form action="../php/add_to_cart.php" method="POST">
        <input type="hidden" name="product_id" value="601">
        <input type="hidden" name="product_name" value="Promo 50%">
        <input type="hidden" name="price" value="199">
        <button class="buy-btn" type="submit">Ajouter au panier</button>
      </form>
    </div>
  </section>
</div>
<?php include("../footer.php"); ?>
</body>
