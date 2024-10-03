<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('blog.index') }}">retour à la liste</a>
    <hr>
    CREATE
    <hr>
    <form action="{{ route('blog.store') }}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="nom">
        </div>
        <div>
            <textarea name="content"rows="3">mon texte ici...</textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>