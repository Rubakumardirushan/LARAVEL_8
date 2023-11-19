<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2> display info </h2>
<table>
<thead>

    <th>username</th>
    <th> phonenumber</th>
    <th>email</th>
    <th>edit</th>
    <th>Delete</th>
</thead>
<tbody>
    <br>
@foreach($displays as $dis)
<tr><td>{{$dis->username}}</td>
<td>{{$dis->phonenumber}}</td>
<td>{{$dis->email}}</td>

<td>
<a href="edit/{{$dis->id}}">Edit</a>
</td>

<td><a href="delete/{{$dis->id}}">delete</a></td></tr>


@endforeach

</tbody>

</table>
<style>
    table ,th,td {
        border: 1px solid black;
    }
</style>
</body>
</html>
