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
            <input required type="text" name="name" placeholder="Nom">
            <select name="glass">
                @foreach($glasses as $crystal)
                    <option value='{{$crystal->id}}'> {{ $crystal->name }} </option>
                @endforeach
            </select>
            <button type="submit">Suivant</button>
        </form>
        <a href="{{route('admin.dashboard')}}">Retour</a>
    
</body>
</html>
