<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="styles.css">
 <title>Stones</title>
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
    <h1>Spices catalogue</h1>
    @if ($spices === null || count($spices) === 0)
        <p class='error'>There are no records in the database!</p>
    @else
        <ul>
            @foreach ($spices as $spice)
                <li> 
                    <p>{{ $spice->nosaukums }}</p>
                    <p>{{ $spice->cena }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
