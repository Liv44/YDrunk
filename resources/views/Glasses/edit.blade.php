<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glass</title>
</head>
    <body>
        <h2>Modifier un verre</h2>

    <form action="{{ route('glasses.update', $glass->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <input type="text" name="name" placeholder="name" value="{{ $glass->name }}">
        <input type="file" name="imageURL" accept="image/png, image/jpg, image/jpeg">

        <button type="submit">Envoyer</button>
    </form>
        
    </body>
</html>