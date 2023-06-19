<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Cards</title>
</head>
<body>
    <h1>Card catalogue</h1>
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
