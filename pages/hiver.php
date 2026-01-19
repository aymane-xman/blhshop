<?php include("../header.php"); ?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/hiver.css">

<body>
<div class="main-content">
  <h1 class="page-title">HIVER</h1>

  <section class="product-grid">
    <div class="product-card">
      <img src="../img/hiver1.jpg" alt="">
      <h3>Manteau</h3>
      <p>699 DH</p>
      <form action="../php/add_to_cart.php" method="POST">
        <input type="hidden" name="product_id" value="401">
        <input type="hidden" name="product_name" value="Manteau">
        <input type="hidden" name="price" value="699">
        <button class="buy-btn" type="submit">Ajouter au panier</button>
      </form>
    </div>
  </section>
</div>
<?php include("../footer.php"); ?>
</body>
