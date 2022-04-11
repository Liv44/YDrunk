<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>
    <body>
        <h1>Liste des Fruits</h1>

        <table border="1">
            <head>
            <tr>
                <th>Nom</th>
                <th>Image</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>     
            <head>
                <tbody>
                    @foreach ($allFruits as $fruit)
                    <tr>
                    <td>
                        {{$fruit->id}} - {{$fruit->name}}
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        <a href="{{ route('fruits.edit', $fruit->id) }}">Modifier</a>
                    </td>
                    <td>
                        <a href="{{route('fruits.delete', $fruit->id )}}">Supprimer</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    <hr>
        <form class="thisForm" action="{{ route('fruit.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nom">
            <input type="file" name="imagePath" placeholder="image">
            <button class="newSoft" type="submit">Envoyer</button>
        </form>
        
    </body>
</html>