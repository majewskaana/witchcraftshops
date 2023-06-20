<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="styles.css">
 <style>
    /* Additional CSS */
    footer .shop-map img {
      width: 400px;
      height: 200px;
    }
  </style>
  <title>Online Shop</title>
</head>
<header>
    <h1>WITCHCRAFT SUPPLEMENTS</h1>
    <div class="language">
      <a href="#" class="active">LV</a> | <a href="#">ENG</a>
    </div>
    <div class="user-buttons">
    <div>
      <button>Sign Up</button>
      <button>Sign Up</button>

    </div>
</div>
  </header>
<body>
<section class="filter">
<h2>Choose category</h2>
  <div class="filter-group">
      <li><button type="button" name="filter" value="stones" >
      <a href="{{action([App\Http\Controllers\StoneController::class, 'index'])}}"> Stones</a></li></button>
    <h3><li><button type="button" name="filter" value="spices"><a href="{{action([App\Http\Controllers\SpicesController::class, 'index'])}}">Spices</a></button></li></h3>
    <h3><li><button type="button" name="filter" value="cards"><a href="{{action([App\Http\Controllers\CardsController::class, 'index'])}}">Cards</button></li></a></h3>
    <h3><li><button type="button" name="filter" value="products"><a href="{{action([App\Http\Controllers\AllProductsController::class, 'index'])}}">All products</a></button></li></h3>
</section>
    <h1>Spices catalogue</h1>
    @if ($spices === null || count($spices) === 0)
        <p class='error'>There are no records in the database!</p>
    @else
        <ul>
            @foreach ($spices as $spice)
                <li> 
                    <p>{{ $spice->nosaukums }}</p>
                    <p>{{ $spice->cena }}</p>
                    <form method="POST" action={{action([App\Http\Controllers\SpicesController::class, 'destroy'], $spice->id) }}>
                      @csrf 
                      @method('DELETE')
                      <button type="submit" value="delete">Delete</button>
                 </form></li>
            @endforeach
            <li><a href="{{ action([App\Http\Controllers\SpicesController::class,
'create'])}}">Add new spice</a></li>
        </ul>
    @endif
           
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
