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
 
<section class="filter">
<h2>Choose category</h2>
  <div class="filter-group">
      <li><button type="button" name="filter" value="stones" >
        <a href="{{action([App\Http\Controllers\StoneController::class, 'index'])}}"> Stones</a></li></button>
    <h3><li><button type="button" name="filter" value="spices"><a href="{{action([App\Http\Controllers\SpicesController::class, 'index'])}}">Spices</a></button></li></h3>
    <h3><li><button type="button" name="filter" value="cards"><a href="{{action([App\Http\Controllers\CardsController::class, 'index'])}}">Cards</button></li></a></h3>
    <h3><li><button type="button" name="filter" value="products"><a href="{{action([App\Http\Controllers\AllProductsController::class, 'index'])}}">All products</a></button></li></h3>
</section>
    <h1>Card catalogue</h1>

    @if ($cards === null || count($cards) === 0)
        <p class='error'>There are no records in the database!</p>
    @else
        <ul>
            @foreach ($cards as $card)
                <li> 
                    <p>{{ $card->nosaukums }}</p>
                        <p>{{ $card->cena }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
