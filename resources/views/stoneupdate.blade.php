<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Editing : {{ $stones->name }}</title>
</head>
<body>
 <h1>Editing : {{ $stones->name }}</h1>
 <form method="POST"
 action={{ action([App\Http\Controllers\StoneController::class,
'update'], [ 'stone' => $stones]) }}>

 @csrf
 @method('put')
 <label for='nosaukums'>New stone name</label>
 <input type="text" name="nosaukums" id="nosaukums" value="{{
$stones->nosaukums }}">
 <button type="submit" value="Update">Save changes</button>
 </form>
</body>
</html>
