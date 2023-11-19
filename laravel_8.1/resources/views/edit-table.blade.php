<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> edit table</h1>

<form action="{{url('updates/'.$info->id)}}" method="POST">

    <label for="name">username</label>
    <input type="text" name="name" required value="{{$info->username}}">

    <label for="phonenumber">phonenumber</label>
    <input type="number" name="phonenumber" required value="{{$info->phonenumber}}">

    <label for="email">email</label>
    <input type="email" name="email" required value="{{$info->email}}">



    <input type="submit" value="send">
    @csrf

    </form>

</body>
</html>
