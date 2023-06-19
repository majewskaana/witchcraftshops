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
    <h1>Stone catalogue</h1>
    @if ($stones === null || count($stones) === 0)
        <p class='error'>There are no records in the database!</p>
    @else
        <ul>
            @foreach ($stones as $stone)
                <li> 
                    {{ $stone->nosaukums }} - {{ $stone->cena }}
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
