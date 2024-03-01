
<?php include 'fetch_products.php'; 
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Yellowtail&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
<title>Document</title>
</head>
<body>
    
  <header class="navigation-container">
    <nav class="content-wrapper">
      <div class="logo-menu-wrapper">
        <img src="images/logo.png" alt="Company logo" class="logo" />
      </div>
      <div class="menu-text">
        <a href="home.php">Accueil</a>
        <a href="#">A Propos</a>
        <a href="boutique.php">Produit</a>
        <a href="#">FAQ</a>
        <a href="#">Contact</a>
      </div>
      <div class="cart-container">
        <div class="cart">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2263e1d2d9f44b01633dcb82d7dd1d24dd915e8170680f25ae5693827d1830df?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" class="cart-icon" alt="Cart icon" />
          <div class="cart-text">Cart (0)</div>
        </div>
      </div>
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/99ca70b8f0787869e29206947c7ac62f6911ff8e310da0de2cb11e1550539a82?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" class="profile-icon" alt="Profile icon" />
    </nav>
  </header>
      <main>
        <section id="head">
          <div>
            <p>100% écoresponsables</p>
            <h2>Des confitures hautement gustatives</h2>
            <button class="blue-button">Découvrir Maintenant</button>
          </div>
          <img src="images/head.png" alt="">
        </section>
        <section id="selling-point">
          <div class="sp">
            <img src="images/selling1.jpeg" alt="">
            <div class="text-overlay">
              <p>Reduire le gaspillage alimentaire !!</p>
              <h2>Produits sains & savoureux </h2>
            </div>
          </div>
          <div class="sp">
            <img src="images/selling1.jpeg" alt="">
            <div class="text-overlay">
              <p>Reduire le gaspillage alimentaire !!</p>
              <h2>Produits sains & savoureux </h2>
            </div>
          </div>
        </section>
        <section id="about">
          <img id="about-img" src="images/about-img.jpeg" alt="">
          <div id="about-box">
            <p>A Propos de nous</p>
            <h2>Sauveurs de saveurs est une entreprise de fabrication de confiture</h2>
            <h3>Les confitures sont conçu grâce à la récolte de fruits sur le point de finir à la poubelle. L’une de nos valeurs principale est l’antigaspillage. Chez nous chaque pot raconte une histoire c’est notre tradition artisanale. Nous partageons également des astuces et des recettes avec les ingrédients que l’on récupère.</h3>
            <div id="icon-box">
              <div class="ico">
                <img src="" alt="">
                <div>
                  <h4>Durabilité</h4>
                  <p>Un produit 100% écoresponsable sur toute la chaine de valeur (local, réemploi, utilisation minimale de ressources)</p>
                </div>
              </div>
              <div class="ico">
                <img src="" alt="">
                <div>
                  <h4>Haute qualité artisanale</h4>
                  <p>Des confitures hautement gustatives réalisées dans le respect des savoir-faire</p>
                </div>
              </div>
            </div>
            <a class="blue-button">En savoir plus</a>
          </div>
        </section>';



echo '<section id="products">
        <p>Nos Produits</p>
        <h3>Retrouvez notre sélection de produits uniques et gourmands</h3>
        <div class="products-grid">';
foreach ($products as $product) {
    echo '<a href="product.php"><article class="product-card">
            <div class="product-image-container">
                <img loading="lazy" src="' . htmlspecialchars($product['path']) . '" alt="'. htmlspecialchars($product['name']) .'" class="product-image"/>
                <div class="product-label">ANTI-GASPI</div>
            </div>
            <div class="product-info">
                <div class="product-name">'. htmlspecialchars($product['name']) .'</div>
                <div class="separator"></div>
                <div class="product-description">A fresh and juicy grenade to enjoy with your family and friends.</div>
                <div class="product-price">'. htmlspecialchars($product['price']) .' €</div>
                <img src="images/nutri-a.svg" class="product-svg" width="50" height="50" alt="">
            </div>
        </article></a>';
}
echo '</div>
<div class="button-container">
<a href="#" class="blue-button">Découvrir plus de produits</a>
</div>
    </section>
    <section class="testimonials-section">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c6229697548b7ed445e1edfdc0b84454576e697cb37a45352dfedc9145c7d9d4?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" class="background-image" alt="" />
          <header class="section-title">Témoignages</header>
          <h2 class="section-subtitle">Que disent nos clients ?</h2>
          <article class="testimonial">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4fdd81855063bbc6cee8a045ffc3699f8f7bcf7d6b2414ab4e306d0aa4a26e43?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" class="client-photo" alt="Client Photo" />
            <br>
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/03d19764622b7c6336b5d73064daa93811977636cdd1f2b1243a3ea4bfc62786?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" class="quote-icon" alt="Quote Icon" />
            <p class="testimonial-text">Simply dummy text of the printing and typesetting industry. Lorem Ipsum simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
            <div class="client-info">
              <p class="client-name">Annie</p>
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/244888e6f84f7307d70beb6e98c5f0f1a7931c2acea7c822c364d8cffe633d16?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" class="client-rating" alt="Client Rating" />
            </div>
          </article>
        </section>

        <section id="blog">
          <p id="blog-title">Blog</p>
          <section class="article-container">
            <article class="article">
                <div class="article-image">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/88377bbe6132fd6424ac8bb70d628dfddfde9a2abcc0ca610367bddd6d85bf68?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" alt="Article Image">
                </div>
                <div class="article-content">
                    <div class="article-date">
                        <span class="date-day">25</span>
                        <span class="date-month">Nov</span>
                    </div>
                    <div class="author-info">
                        <img class="author-image" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bdead3250e23d581fccbc8aa76c1e35615473b7479e7f1137ca4db5b208915ba?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" alt="Author Image">
                        <span class="author-name">By Rachi Card</span>
                    </div>
                    <h3 class="article-title">The Benefits of Vitamin D & How to Get It</h3>
                    <p class="article-summary">Simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    <a href="#" class="read-more-btn">Read More <img class="read-more-icon" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8c0844ec91044fb3fa9f6a92a813c34bbb5882bfee5da741a105650d7d8f8468?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" alt=""></a>
                </div>
            </article>
            <article class="article">
                <div class="article-image">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/88377bbe6132fd6424ac8bb70d628dfddfde9a2abcc0ca610367bddd6d85bf68?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" alt="Article Image">
                </div>
                <div class="article-content">
                    <div class="article-date">
                        <span class="date-day">25</span>
                        <span class="date-month">Nov</span>
                    </div>
                    <div class="author-info">
                        <img class="author-image" src="https://cdn.builder.io/api/v1/image/assets/TEMP/bdead3250e23d581fccbc8aa76c1e35615473b7479e7f1137ca4db5b208915ba?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" alt="Author Image">
                        <span class="author-name">By Rachi Card</span>
                    </div>
                    <h3 class="article-title">The Benefits of Vitamin D & How to Get It</h3>
                    <p class="article-summary">Simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                    <a href="#" class="read-more-btn">Read More <img class="read-more-icon" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8c0844ec91044fb3fa9f6a92a813c34bbb5882bfee5da741a105650d7d8f8468?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" alt=""></a>
                </div>
            </article>

        </section>
        <br>

        <section class="newsletter-section">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c43b7ed2b703bd0af186ca35ad84f7ae8bfe4735539c03ff2fca747fb493acf4?apiKey=4cfea3746e614d6c93be1cdc80f131e5&" class="background-image" alt="">
          <div class="content-wrapper">
            <h2 class="title">Subscribe to <br> our Newsletter</h2>
            <form class="subscription-form">
              <label for="emailInput" class="visually-hidden">Your Email Address</label>
              <input type="email" id="emailInput" class="email-input" placeholder="Your Email Address" aria-label="Your Email Address">
              <button type="submit" class="subscribe-button">Subscribe</button>
            </form>
          </div>
        </section>

    
      </main>
    </main>
      </body>
</html>';
include 'footer.html';


?>
