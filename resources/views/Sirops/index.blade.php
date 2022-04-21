<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sirop</title>
</head>
<body>
    <h1>Liste des Sirops</h1>
    <h3>Connecté en tant que : {{Auth::guard('admin')->user()->name}} - ADMIN</h3>
        <table border="1">
            <head>
            <tr>
                <th>Nom</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <head>
                <tbody>
                    @foreach($sirops as $sirop)
                    <tr>
                        <td>
                            {{ $sirop->id}} - {{ $sirop->name}}
                        </td>
                        <td>
                            <a href="{{ route('sirops.edit', $sirop->id) }}">Modifier</a>
                        </td>
                        <td>
                            <a href="{{route('sirops.delete', $sirop->id )}}" onclick="return confirm('Voulez-vous vraiment supprimer ce sirop ?')">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <hr>
                
            </head>
            
        </table>
        <form method="POST" action="{{route('sirops.store')}}">
            @csrf
            <input type="text" name="name" placeholder="Nom">
            <button type="submit">Envoyer</button>
        </form>
        <a href="{{route('admin.dashboard')}}">Retour au dashboard</a>

    
</body>
</html>