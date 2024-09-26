<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\Style.css">
    <title>Document</title>


</head>
<body>
<div id="TitreCreate"><h1>Creation d'un nouveau manga</h1></div>
<div id="container">
<form action="/Mangas/" method="post">
    @csrf
    <label>Nom du manga :</label><br>
    <input required type="text" placeholder="Nom du manga" name="manga_name">
    @error('manga_name')<style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
    <br><br>

    <label>Prix du manga :</label><br>
    <input required type="number " name="manga_price" placeholder="Prix du manga">
    @error('manga_price')<style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
    <br><br>

    <label>Description du manga :</label>
    <textarea required id="description" name="description" rows="5" cols="33" placeholder="Votre description"></textarea><br><br>
    @error('description')<style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
    <br>

    <label>Lien de l'image :</label><br>
    <input required type="text" placeholder="Lien de l'image" name="manga_link">
    @error('manga_link')<style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
    <br><br>

    <label>Auteur :</label><br>
    <input required type="text" placeholder="Auteur" name="manga_autor">
    @error('manga_autor')<style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
    <br><br>

    <label>Date de sortie :</label><br>
    <input required type="date" placeholder="Format (yyyy-mm-dd)" name="manga_parution">
    @error('manga_parution')<style>.error {background: red;}</style><div class="error">{{$message}} </div>@enderror
    <br><br>
    
    <button id="createbutton" name="createbutton">Ajouter votre manga</button>
    <div>
        <br>
    </div>
    <button id="retourbutton"><a href="/Mangas"></a> Retour</button>
</form>
</div>
</body>
</html>
