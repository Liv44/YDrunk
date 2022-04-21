<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocktails</title>
</head>
    <body>
        <h2>Modifier un cocktail</h2>
        <h3>Connecté en tant que : {{Auth::guard('admin')->user()->name}} - ADMIN</h3>

    <form action="{{ route('cocktails.update', $cocktail->id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="name" value="{{ $cocktail->name }}">
        
        <select name="glass_id">
            @foreach($glassTypes as $crystal)

                <option value="{{ $crystal->id }}" 
            @if($crystal->id==$cocktail->glass_id)
                selected
            @endif
            > {{ $crystal->name }} </option>
            @endforeach
        </select>
        <button type="submit">Envoyer</button>
    </form>
        <a href="{{ route('ingredients.index', $cocktail->id)}}">Modifier les ingrédients</a>
        <a href="{{ route('cocktails.index')}}">Retour aux Cocktails</a>

    </body>
</html>