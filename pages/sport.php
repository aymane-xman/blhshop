<?php include("../header.php"); ?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/costume.css">

<body>
<div class="main-content">
  <h1 class="page-title">COSTUMES</h1>

  <section class="product-grid">
    <div class="product-card">
      <img src="../img/costume1.jpg" alt="">
      <h3>Costume Homme</h3>
      <p>899 DH</p>
      <form action="../php/add_to_cart.php" method="POST">
        <input type="hidden" name="product_id" value="301">
        <input type="hidden" name="product_name" value="Costume Homme">
        <input type="hidden" name="price" value="899">
        <button class="buy-btn" type="submit">Ajouter au panier</button>
      </form>
    </div>
  </section>
</div>
<?php include("../footer.php"); ?>
</body>
