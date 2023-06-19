<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="styles.css">
 <title>Cards</title>
</head>
<body>
    <h1>Card catalogue</h1> 
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

    @if ($cards === null || count($cards) === 0)
        <p class='error'>There are no records in the database!</p>
    @else
        <ul>
            @foreach ($cards as $card)
                <li> 
                    {{ $card->nosaukums }} - {{ $card->cena }}
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
