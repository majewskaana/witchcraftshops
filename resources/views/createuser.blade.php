<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="styles.css">
  <title>Online Shop</title>
</head>
<body>
<form method="POST" action={{
action([App\Http\Controllers\RegistrationController::class, 'store']) }}>
 @csrf
    <h2>Register</h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>


            
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button  type="submit" value="Add">Submit</button>
        </div>
    <?php alert("aa");
</form>
</body>
</html> 
 
