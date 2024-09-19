<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\Style.css">
    <title>Document</title>


</head>
<body>
<h2>Les mangas</h2>
<nav>
    <a href="/Mangas/Create">Create</a>

</nav>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
            <tr>
            <th>Nom</th>
            <th>ID</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Auteur</th>
            <th>Date de parution</th>
            <th>Details</th>
        </tr>
        </thead>
        <tbody>
@foreach($all as $row)
    <tr>
        <td>{{$row-> name}}</td>
        <td><img src="{{$row->image}}"></td>
        <td>{{$row-> price}}</td>
        <td>{{$row-> description}}</td>
        <td>{{$row-> autor}}</td>
        <td>{{$row-> dateparution}}</td>
        <td><a href="/Mangas/{{$row->id}}">Details</a></td>
    </tr>

@endforeach
        <tbody>
</table>
</div>
</body>
</html>

