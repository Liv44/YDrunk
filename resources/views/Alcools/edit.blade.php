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

    <form action="{{ route('alcools.update', $alcool->id) }}" method="POST">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="Nom" value="{{ $alcool->name }}">
        <input type="Number" name="degree" placeholder="Degré" pattern="[0-9]" value="{{ $alcool->degree }}">
        <button type="submit">Envoyer</button>
    </form>
        
    </body>
</html>