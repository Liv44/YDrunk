<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
</head>
    <body>
        <h2>Modifier un fruit</h2>

    <form action="{{ route('fruits.update', $fruit->id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="name" value="{{ $fruit->name }}">
        <button type="submit">Envoyer</button>
    </form>
        
    </body>
</html>