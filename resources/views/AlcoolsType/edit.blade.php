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

    <form action="{{ route('alcoolstype.update', $alcoolType->id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="name" value="{{ $alcoolType->name }}">
        <button type="submit">Envoyer</button>
    </form>
        
    </body>
</html>