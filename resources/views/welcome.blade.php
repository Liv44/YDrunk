<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YDrunk</title>
</head>
<body>
    <p>Bienvenue sur le site YDrunk</p>
    <a href="{{ route('alcoolstype.index')}}">Liste des types d'Alcools</a>
    <a href="{{ route('alcools.index')}}">Liste des Alcools</a>
    <a href="{{ route('softs.index')}}">Liste des Softs</a>
    <a href="{{ route('sirops.index')}}">Liste des Sirops</a>
    <a href="{{ route('fruits.index')}}">Liste des fruits</a>
    <a href="{{ route('cocktails.index') }}"> Liste des cocktails </a>
</body>
</html>