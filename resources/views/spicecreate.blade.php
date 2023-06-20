<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
 <title>New spice</title>
</head>
<body>
 <h1>New spice</h1>
 <form method="POST" action={{
action([App\Http\Controllers\SpicesController::class, 'store']) }}>
 @csrf

 <label for='nosaukums'>Spice name</label>
 <input type="text" name="efekts" id="efekts">
 <label for='nosaukums'>Spice effect</label>
 <input type="text" name="nosaukums" id="nosaukums">
 <label for='cena'>Price</label>
 <input type="int" name="cena" id="cena">
 <label for='cena'>Quantity</label>
 <input type="int" name="skaits" id="skaits">
 <label for='kompanija'>Company</label>
 <input type="int" name="kompanija" id="kompanija">
 <label for='smarza'>Smell</label>
 <input type="int" name="smarza" id="smarza">
 <button type="submit" value="Add">Save</button>
 </form>


 @if ($smells === null || count($smells) === 0)
    <p class='error'>There are no records in the database!</p>
@else
    <ul>
        @foreach ($smells as $smell)
            <li> 
                <p> {{$smell->id}} - {{ $smell->apraksts }}</p>
            </li>
        @endforeach
    <a href="{{ action([App\Http\Controllers\SmarzaController::class, 'create']) }}">Add new smell</a> 
    </ul>
@endif
</body>
</html>