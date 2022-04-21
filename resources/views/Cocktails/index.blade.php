<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktails</title>
</head>
<body>
    <h1>Liste des Cocktails</h1>
    <h3>Connecté en tant que : {{Auth::guard('admin')->user()->name}} - ADMIN</h3>
        <table border="1">
            <head>
            <tr>
                <th>Nom</th>
                <th>Ingrédients</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <head>
                <tbody>
                    @foreach($cocktails as $cocktail)
                    <tr>
                        <td>
                            {{ $cocktail->id}} - {{ $cocktail->name}} 
                            <br>
                            {{ $cocktail->glassType->name }}
                            <br>
                            
                            <img src="..\storage\app\public\images\{{ $cocktail->glassType->imageURL }}" alt="image" width=100>

                        </td>
                        <td>
                            @foreach($cocktail->ingredients as $ingredient)
                                {{ $ingredient->ingredientName->name }}
                            </br>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('cocktails.edit', $cocktail->id) }}">Modifier</a>
                            
                        </td>
                        <td>
                            <a href="{{route('cocktails.delete', $cocktail->id )}}" onclick="return confirm('Voulez-vous vraiment supprimer ce cocktail ?')">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <hr>
                
            </head>
            
        </table>
        <a href="{{route('cocktails.create')}}">Ajouter un cocktail</a>
        <a href="{{route('admin.dashboard')}}">Retour au dashboard</a>

    
</body>
</html>
