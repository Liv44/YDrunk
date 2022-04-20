<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktails</title>
</head>
<body>
    <h1>Création d'un Cocktail</h1>
    <h2>NOM, VERRE ET IMAGE 1/2</h2
    <h3>Connecté en tant que : {{Auth::guard('admin')->user()->name}} - ADMIN</h3>
            
        <form method="POST"  action="{{route('cocktails.store')}}">
            @csrf
            <input type="text" name="name" placeholder="Nom">
            <input type="text" name="name" placeholder="Verre">
            <div id="form">
            <!-- <button type="button" onClick="" id="plus" >(+) Ajouter un ingrédient</button> -->
    
            </div>
            <a href="{{route('ingredients.addIngredients', 1)}}">Suivant</a>
            <button type="submit">Suivant</button>
        </form>
        <a href="{{route('admin.dashboard')}}">Retour</a>
    
</body>
</html>
