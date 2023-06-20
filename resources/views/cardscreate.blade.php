<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
 <title>New card</title>
</head>
<body>
 <h1>New card</h1>
 <form method="POST" action="{{ action(\App\Http\Controllers\CardsController::class, 'store') }}">
  @csrf
  <button type="submit">Submit</button>
</form>

 

 <label for='nosaukums'>Card name</label>
 <input type="text" name="efekts" id="efekts">
 <label for='nosaukums'>Card effect</label>
 <input type="text" name="nosaukums" id="nosaukums">
 <label for='cena'>Price</label>
 <input type="int" name="cena" id="cena">
 <label for='cena'>Quantity</label>
 <input type="int" name="skaits" id="skaits">
 <label for='kompanija'>Company</label>
 <input type="int" name="kompanija" id="kompanija">
 <button type="submit" value="Add">Save</button>
 </form>
</body>
</html>