<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Stones</title>
</head>
<body>
    <h1>Spices catalogue</h1>
    @if ($spices === null || count($spices) === 0)
        <p class='error'>There are no records in the database!</p>
    @else
        <ul>
            @foreach ($spices as $spice)
                <li> 
                    {{ $spice->nosaukums }} - {{ $spice->cena }}
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
