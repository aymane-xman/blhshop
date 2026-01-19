<?php include("../header.php"); ?>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/cadeau.css">

<body>
<div class="main-content">
  <h1 class="page-title">CADEAUX</h1>

  <section class="product-grid">
    <div class="product-card">
      <img src="../img/Bagues homme militaire - 57.jpeg" alt="">
      <h3>Ring</h3>
      <p>159 DH</p>
      <form action="../php/add_to_cart.php" method="POST">
        <input type="hidden" name="product_id" value="101">
        <input type="hidden" name="product_name" value="Ring">
        <input type="hidden" name="price" value="159">
        <button class="buy-btn" type="submit">Ajouter au panier</button>
      </form>
    </div>
  </section>
</div>
<?php include("../footer.php"); ?>
</body>
