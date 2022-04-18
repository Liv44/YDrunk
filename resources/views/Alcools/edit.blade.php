<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alcools</title>
</head>
    <body>
        <h2>Modifier un alcool</h2>
        <h3>Connecté en tant que : {{Auth::guard('admin')->user()->name}} - ADMIN</h3>

    <form action="{{ route('alcools.update', $alcool->id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="Nom" value="{{ $alcool->name }}">
        <input type="Number" name="degree" placeholder="Degré" step="0.1" value="{{ $alcool->degree }}">
        <select name="alcool_type_id">
            @foreach($alcoolTypes as $alcoolsType)
                <option name="alcool_type_id" value="{{$alcoolsType->id}}">{{$alcoolsType->name}}</option>
            @endforeach
        </select>
        <button type="submit">Envoyer</button>
    </form>
        
    </body>
</html>