<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verres</title>
</head>
    <body>
        <h1>Liste des Verres</h1>
        <img src="{{asset('./public/img/1649678919_poing.png')}}" alt="">
        <table border="1">
            <head>
            <tr>
                <th>Nom</th>
                <th>URL de l'image</th>
                <th>Modifier</th>
            </tr>     
            <head>
                <tbody>
                    @foreach ($glasses as $glass)
                    <tr>
                    <td>
                        {{$glass->id}} - {{$glass->name}}
                    </td>
                    <td>
                        <img src="{{ asset('../storage/app/public/images/' . $glass->imageURL) }}" width="100" height="100"></img>
                        
                    </td>
                    <td>
                        <a href="{{ route('glasses.edit', $glass->id) }}">Modifier</a>
                    </td>
                    <td>
                        <a href="{{route('glasses.delete', $glass->id )}}" onclick="return confirm('Voulez-vous vraiment supprimer ce soft ?')">Supprimer</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    <hr>
        <form class="thisForm" action="{{ route('glasses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Nom">
            <input type="file" name="imageURL" accept="image/png, image/jpg, image/jpeg">

            <button class="newGlass" type="submit">Envoyer</button>
        </form>
        
    </body>
</html>