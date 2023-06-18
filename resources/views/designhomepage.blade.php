<!DOCTYPE html>
<html>
<head>
  <title>Online Shop</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Additional CSS */
    footer .shop-map img {
      width: 400px;
      height: 200px;
    }
  </style>
</head>
<body>
  <header>
    <h1>WITCHCRAFT SUPPLEMENTS</h1>
    <div class="language">
      <a href="#" class="active">LV</a> | <a href="#">ENG</a>
    </div>
    <div class="user-buttons">
    <div>
      <a href="#" class="signup-button">Sign Up</a>
    </div>
    <div>
      <a href="#" class="login-button">Log In</a>
    </div>
</div>
  </header>
  
  <section class="filter">
  <h2>Filter</h2>
  <div class="filter-group">
    <ul>
      <li><button type="button" name="filter" value="stones">Stones</button></li>
      <li><button type="button" name="filter" value="zodiac">Zodiac</button></li>
    </ul>
  </div>
  <div class="filter-group">
    <h3><button type="button" name="filter" value="spices">Spices</button></h3>
    <ul>
      <li><button type="button" name="filter" value="smell">Smell</button></li>
    </ul>
  </div>
  <div class="filter-group">
    <h3><button type="button" name="filter" value="cards">Cards</button></h3>
  </div>
</section>


  
  <section class="product-catalogue">
    <h2>PRODUCT CATALOGUE</h2>
    <div class="product-item">
      <img src="product1.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p>Description of Product 1</p>
      <span class="price">$19.99</span>
      <a href="#" class="buy-button">Buy Now</a>
    </div>
    <div class="product-item">
      <img src="product2.jpg" alt="Product 2">
      <h3>Product 2</h3>
      <p>Description of Product 2</p>
      <span class="price">$24.99</span>
      <a href="#" class="buy-button">Buy Now</a>
    </div>
    <div class="product-item">
      <img src="product2.jpg" alt="Product 2">
      <h3>Product 2</h3>
      <p>Description of Product 2</p>
      <span class="price">$24.99</span>
      <a href="#" class="buy-button">Buy Now</a>
    </div>
    <div class="product-item">
      <img src="product2.jpg" alt="Product 2">
      <h3>Product 2</h3>
      <p>Description of Product 2</p>
      <span class="price">$24.99</span>
      <a href="#" class="buy-button">Buy Now</a>
    </div>
    <div class="product-item">
      <img src="product2.jpg" alt="Product 2">
      <h3>Product 2</h3>
      <p>Description of Product 2</p>
      <span class="price">$24.99</span>
      <a href="#" class="buy-button">Buy Now</a>
    </div>
    <!-- More product items -->
  </section>
  <footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div id="office-map-section">
          <h3>OFFICE MAP</h3>
          <img src="images/map.png" alt="Click Me" onclick="redirectToLink('https://www.google.com/maps/place/Aleksandra+Čaka+iela+100,+Latgales+priekšpilsēta,+Rīga,+LV-1011/@56.9571881,24.1400531,17z/data=!3m1!4b1!4m6!3m5!1s0x46eece343a2aef39:0x23a3f6aea0fc666a!8m2!3d56.9571881!4d24.1400531!16s%2Fg%2F11mtmlbf4c?entry=ttu')">
          <script>
            function redirectToLink(url) {
              window.location.href = url;
            }
          </script>

          <h3>INFO</h3>
          <p>Par mums:</p>
          <p>Juridiskā adrese: Rīga, Aleksandra Čaka 100</p>
          <p>Kontakti: +37128282828</p>
          <p>Rezervācija: pa pastu witchcraft@inbox.lv</p>
        </div>
      </div>
      <div class="col-md-4">
        <div id="donate-section">
          <a href="https://www.donationalerts.com" class="donate-button">Donate</a>
          <img src="images/donate.png" alt="Logo">
        </div>
      </div>
      <div class="col-md-4">
        <div id="card-section">
          <div class="card-image">
            <p>YOUR CARD OF THE DAY!</p>
            <img src="images/card.png" alt="Card">
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>