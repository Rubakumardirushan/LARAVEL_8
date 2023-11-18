<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?=url('save')?>" method="POST">
<label for="username">username</label>
<input type="text" name="username" id="username">
<input type="hidden" name="_token" value="<?=csrf_token()?>">
<input type="submit" value="send">

</form>
<h1><?=session('msg')?></h1>
</body>
</html>
