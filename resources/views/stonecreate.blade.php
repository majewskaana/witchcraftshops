<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
 <title>New stone</title>
</head>
<body>
 <h1>New stone</h1>
 <form method="POST" action={{
action([App\Http\Controllers\StoneController::class, 'store']) }}>
 @csrf

 <label for='zodiaks'>Zodiac</label>
 <input type="double" name="zodiaks" id="id">
 <label for='nosaukums'>Stone name</label>
 <input type="text" name="efekts" id="efekts">
 <label for='nosaukums'>Stone effect</label>
 <input type="text" name="nosaukums" id="nosaukums">
 <label for='cena'>Price</label>
 <input type="int" name="cena" id="cena">
 <label for='cena'>Quantity</label>
 <input type="int" name="skaits" id="skaits">
 <label for='kompanija'>Company</label>
 <input type="int" name="kompanija" id="kompanija">
 <button type="submit" value="Add">Save</button>
 </form>
 <ol>
<li>Aries</li>
<li>Taurus</li>
<li>Gemini</li>
<li>Cancer</li>
<li>Leo</li>
<li>Virgo</li>
<li>Libra</li>
<li>Scorpio</li>
<li>Saggitarius</li>
<li>Capricorn</li>
<li>Aquarius</li>
<li>Pisces</li>
 </ol>
</body>
</html>