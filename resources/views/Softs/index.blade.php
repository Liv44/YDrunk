<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Softs</title>
</head>
    <body>
        <h1>Liste des Softs</h1>
        <table border="1">
            <head>
            <tr>
                <th>Nom</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>     
            <head>
                <tbody>
                    @foreach ($softs as $soft)
                    <tr>
                    <td>
                        {{$soft->id}} - {{$soft->name}}
                    </td>
                    <td>
                        <a>Modifier</a>
                    </td>
                    <td>
                        <a>Supprimer</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    <hr>
        <form action="{{ route('softs.store') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nom">
            <button type="submit">Envoyer</button>
        </form>
        
    </body>
</html>