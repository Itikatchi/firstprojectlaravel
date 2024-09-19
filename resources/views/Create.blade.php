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
<form action="/Mangas" method="post">

    <label>Nom du manga :</label><br>
    <input type="text" placeholder="Nom du manga"><br><br>

    <label>Prix du manga :</label><br>
    <input type="number " placeholder="Prix du manga"><br><br>

    <label>Description du manga :</label><br>
    <textarea id="description" name="description" rows="5" cols="33" placeholder="Votre description"></textarea><br><br>

    <label>Lien de l'image :</label><br>
    <input type="text" placeholder="Lien de l'image"><br><br>

    <label>Auteur :</label><br>
    <input type="text" placeholder="Auteur"><br><br>

    <label>Date de sortie :</label><br>
    <input type="date" placeholder="Format (yyyy-mm-dd)"><br><br>

    <button id="createbutton" name="createbutton">Ajouter votre manga</button>
    <div>
        <br>
    </div>
    <button id="retourbutton"><a href="/Mangas/"></a> Retour</button>
</form>
</div>
</body>
</html>
