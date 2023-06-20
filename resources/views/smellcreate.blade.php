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

 <label for='smarza'>Smell</label>
 <input type="int" name="smarza" id="smarza">
 <button type="submit" value="Add">Save</button>
 </form>

</body>
</html>