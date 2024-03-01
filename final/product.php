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
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon">

<title>Document</title>
<style>
    #banner {
        height: 300px;
        margin-bottom: 30px;
        
    }
        /* Resets to ensure consistency */
        *, *::before, *::after { box-sizing: border-box; padding: 0; margin: 0; }
    /* Container and card styling */
    .product-container { display: flex; max-width: 200px; flex-direction: column; align-items: center; margin: 20px auto; }
    .product-card { border-radius: 30px; background-color: #f9f8f8; 
      box-shadow: 0px 5px 8px -5px rgba(0, 0, 0, 0.15), 
            -5px 0px 8px -5px rgba(0, 0, 0, 0.15), 
            5px 0px 8px -5px rgba(0, 0, 0, 0.15);
            
      display: flex; width: 100%; padding-bottom: 15px; flex-direction: column; }
    /* Image and tag styling */
    .product-image-container { display: flex; flex-direction: column;
      box-shadow: 0px -5px 8px -5px rgba(0, 0, 0, 0.15), 
      -5px 0px 8px -5px rgba(0, 0, 0, 0.15), 
      5px 0px 8px -5px rgba(0, 0, 0, 0.15);
      ;border-radius: 15px 15px 0 0; overflow: hidden; position: relative; display: flex; aspect-ratio: 0.63; width: 100%; padding: 29px 30px; }
    .product-image { position: absolute; ;inset: 0; height: 100%; width: 100%; object-fit: cover; object-position: center; }
    .product-label { position: absolute; 
      left: 15px; top: 10px; border-radius: 8px; background-color: #df3f32; color: #fff; text-align: center; padding: 4px 8px; font-weight: 600; font-size: 12px; font-family: Open Sans, sans-serif; }
    /* Product info styling including name, price, and separator */
    .product-info { width: calc(100% - 1px);
       margin-top: 0px;
       
       padding: 10px 30px; position: relative; }
    .product-name { font-weight: 600; font-size: 20px; font-family: Roboto, sans-serif; margin-bottom: 5px; }
    .product-price { font-weight: 700; font-size: 18px; font-family: Open Sans, sans-serif; margin-bottom: 5px; }
    .product-description { font-size: 14px; font-family: Arial, sans-serif; color: #666; margin-bottom: 15px; }
    .separator { height: 1px; background-color: #ddd; margin-bottom: 15px; }
    .product-svg {
        position: absolute;
        width: 60px;
        right: 7px;
        bottom: 0px;
      } 
    /* Responsive design */
    @media (max-width: 360px) {
      .product-container { max-width: 300px; }
    }
    #products {
      width: 70%;
      margin: auto;
    }
    #products p {
      text-align: center;
      font-family: 'Yellowtail', sans-serif;
      color: var(--green);
      font-size: 24px; /* Adjust as needed */
      margin: 20px 0;
    }
    
    #products h3 {
      text-align: center;
      font-family: 'Roboto', sans-serif;
      color: var(--blue);
      font-size: 28px; /* Adjust as needed */
      margin: 10px 0;
      margin-bottom: 20px;
    } 
    
    .products-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 60px;
      padding: 20px;
      justify-content: center; /* Centers grid items horizontally */
      width: fit-content; /* Makes the grid width as wide as its content */
      margin: 0 auto; /* Centers the grid in the parent container */
    }
    
    
    .product-card {
      background-color: #f9f8f8;
      width: 200px;
      border-radius: 15px;
      box-shadow: 0px 5px 8px -5px rgba(0, 0, 0, 0.15);
      overflow: hidden;
    }
    
    .product-image-container {
      position: relative;
    }
    
    .product-label {
      position: absolute;
      left: 15px;
      top: 10px;
      background-color: #df3f32;
      color: #fff;
      padding: 4px 8px;
      border-radius: 8px;
      font-size: 12px;
      font-weight: 600;
    }
    .product-link {
      text-decoration: none;
      color: inherit; /* Ensures text color is not changed */
      display: block; /* Makes the link fill the entire card */
    }
    
    .product-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for hover effects */
      cursor: pointer; /* Changes the cursor to indicate it's clickable */
    }
    
    .product-card:hover {
      transform: translateY(-5px); /* Slightly raises the card */
      box-shadow: 0px 10px 15px -3px rgba(0, 0, 0, 0.2); /* Increases shadow for a "lifted" effect */
    }
    .blue-button {
      display: inline-block;
      border-radius: 14px;
      background-color: var(--blue);
      color: #fff;
      font-weight: 700;
      font-family: 'Roboto', sans-serif;
      padding: 16px 25px;
      text-decoration: none; /* Removes underline from link */
      text-align: center;
      transition: background-color 0.3s ease; /* Smooth transition for hover effect */
    }
    
    .blue-button:hover {
      background-color: transparent;
      color: var(--blue); /* Change text color on hover if needed */
      border: 1px solid var(--blue); /* Optional: add a border to maintain visibility */
    }
    .newsletter-section {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    display: flex;
    height: 100px;
    justify-content: center;
    padding: 30px;
    margin-top: 30px;
    margin-bottom: 50px;
  }
  @media (max-width: 991px) {
    .newsletter-section {
      padding: 0 20px;
    }
  }
  .background-image {
    position: absolute;
    inset: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center;
    border-radius: 30px;
  }
  .content-wrapper {
    position: relative;
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin: 55px 11px 0;
  }
  @media (max-width: 991px) {
    .content-wrapper {
      max-width: 100%;
      flex-wrap: wrap;
      margin: 40px 10px 0 0;
    }
  }
  .title {
    justify-content: center;
    color: #fff;
    padding: 9px 26px 9px 0;
    font: 800 18px Roboto, sans-serif;
    margin-bottom: 50px;
  }
  @media (max-width: 991px) {
    .title {
      font-size: 40px;
    }
  }
  .subscription-form {
    display: flex;
    gap: 6px;
    align-items: center;
    margin-bottom: 50px;
  }
  @media (max-width: 991px) {
    .subscription-form {
      max-width: 100%;
      flex-wrap: wrap;
    }
  }
  .email-input {
    flex-grow: 1;
    border-radius: 16px;
    padding: 20px 60px;
    font-size: 18px;
    outline: none;
    border: 1px solid #ccc;
  }
  .subscribe-button {
    border-radius: 16px;
    background-color: #274c5b;
    color: #fff;
    padding: 10px 20px;
    font: 700 12px Roboto, sans-serif;
    border: none;
    cursor: pointer;
  }
  .visually-hidden {
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
  }
       
</style>
</head>
<body>
<img  id="banner"src="images/product.png" alt="" width="100%">

<?php include 'paymentproduct.html'; ?>


<section id="products">
          
<h3>Autres Saveurs</h3>
<?php 
echo '<section id="products">
<div class="products-grid">';

// Initialize a counter
$counter = 0;

foreach ($products as $product) {
// Only display the first 3 products
if ($counter < 3) {
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
// Increment the counter
$counter++;
} else {
// Break the loop after 3 products have been displayed
break;
}
}
echo '
</section>';
?>


</section>
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


<?php include 'footer.html'; ?>


</body>
</html>
