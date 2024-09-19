<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Style.css">
    <title>Document</title>


</head>
<body>
<div class="MangaUnique">
    <p><img src="{{$find->image}}"></p>
<h5>Nom</h5>
<p>{{$find->name}}</p>
<h5>Prix</h5>
<p>{{$find->price}}</p>
<h5>Description</h5>
<p>{{$find->description}}</p>
<h5>Auteur</h5>
<p>{{$find->autor}}</p>
<h5>Date de parution</h5>
<p>{{$find->dateparution}}</p>

<p><a href="/Mangas/">Retour</a></p>
</div>
</body>
</html>
