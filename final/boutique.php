<?php include 'fetch_products.php'; 
include 'headerf.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Yellowtail&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style-boutique.css">
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<title>Document</title>
</head>
<body>
<img  id="banner"src="images/boutique.png" alt="" width="100%">

<main class="flex-container">

<aside class="sidebar">
    <h3 class="sidebar-title">Recherche & Filtres</h3>
    <input type="text" placeholder="Rechercher..." class="search-input">
    <div class="categories-container">
        <h4 class="categories-title">Catégories</h4>
        <ul class="categories-list">
            <li><button class="category-btn">Fraise</button></li>
            <li><button class="category-btn">Kiwi</button></li>
            <li><button class="category-btn">Orange</button></li>
            <li><button class="category-btn">Prune</button></li>
            <li><button class="category-btn">Pomme</button></li>
            <!-- Add more categories as needed -->
        </ul>
    </div>
</aside>



  
<section id="products">
      <p>Nos Produits</p>
      <h3>Retrouvez notre sélection de produits uniques et gourmands</h3>
      <div class="products-grid">
        <?php foreach ($products as $product) : ?>
          <a href="product.php"><article class="product-card">
            <div class="product-image-container">
              <img loading="lazy" src="<?= htmlspecialchars($product['path']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="product-image"/>
              <div class="product-label">ANTI-GASPI</div>
            </div>
            <div class="product-info">
              <div class="product-name"><?= htmlspecialchars($product['name']) ?></div>
              <div class="separator"></div>
              <div class="product-description">A fresh and juicy grenade to enjoy with your family and friends.</div>
              <div class="product-price"><?= htmlspecialchars($product['price']) ?> €</div>
              <img src="images/nutri-a.svg" class="product-svg" width="50" height="50" alt="">
            </div>
          </article></a>
        <?php endforeach; ?>
        <?php foreach ($products as $product) : ?>
          <a href="product.php"><article class="product-card">
            <div class="product-image-container">
              <img loading="lazy" src="<?= htmlspecialchars($product['path']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="product-image"/>
              <div class="product-label">ANTI-GASPI</div>
            </div>
            <div class="product-info">
              <div class="product-name"><?= htmlspecialchars($product['name']) ?></div>
              <div class="separator"></div>
              <div class="product-description">A fresh and juicy grenade to enjoy with your family and friends.</div>
              <div class="product-price"><?= htmlspecialchars($product['price']) ?> €</div>
              <img src="images/nutri-a.svg" class="product-svg" width="50" height="50" alt="">
            </div>
          </article></a>
        <?php endforeach; ?>
      </div>
      <div class="button-container">
        <a href="#" class="blue-button">Afficher Plus</a>
      </div>
     </section>
  </main>


<?php include 'footer.html'; ?>


</body>
</html>
