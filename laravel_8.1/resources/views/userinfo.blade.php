<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="store" method="POST">

<label for="name">username</label>
<input type="text" name="name" required>

<label for="phonenumber">phonenumber</label>
<input type="number" name="phonenumber" required>

<label for="email">email</label>
<input type="email" name="email" required>



<input type="submit" value="send">
@csrf

</form>
<h1><?=$msg?></h1>
</body>
</html>
