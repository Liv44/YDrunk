<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sirops</title>
</head>
    <body>
        <h2>Modifier un sirop</h2>
        <h3>Connecté en tant que : {{Auth::guard('admin')->user()->name}} - ADMIN</h3>

    <form action="{{ route('cocktails.update', $cocktail->id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="name" value="{{ $cocktail->name }}">
        
        <select name="glass_id">
            @foreach($glassTypes as $crystal)
                <option value="{{ $crystal->id }}"> {{ $crystal->name }} </option>
            @endforeach
        </select>
        <!-- <input type="text" name="" -->

        <!-- <input type="text" name="glassName" placeholder="name of glass" value="{{ $cocktail->glassType->name }}"> -->
        <!-- <input type="text" name="" placeholder="" value=""> -->
        <button type="submit">Envoyer</button>
    </form>
        
    </body>
</html>