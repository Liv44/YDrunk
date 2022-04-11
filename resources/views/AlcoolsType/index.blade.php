<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alcools</title>
</head>
<body>
    <h1>Types d'Alcools</h1>
        <table border="1">
            <head>
            <tr>
                <th>Nom</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <head>
                <tbody>
                    @foreach($alcoolsType as $alcoolType)
                    <tr>
                        <td>
                            {{ $alcoolType->id}} - {{ $alcoolType->name}}
                        </td>
                        <td>
                            <a href="{{ route('alcoolstype.edit', $alcoolType->id) }}">Modifier</a>
                        </td>
                        <td>
                            <a href="{{ route('alcoolstype.delete', $alcoolType->id )}}" onclick="return confirm('Voulez-vous vraiment supprimer ce type ?')">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <hr>
                
            </head>
            
        </table>
        <form method="POST" action="{{route('alcoolstype.store')}}">
            @csrf
            <input type="text" name="name" placeholder="Nom">
            <button type="submit">Envoyer</button>
        </form>
    
</body>
</html>