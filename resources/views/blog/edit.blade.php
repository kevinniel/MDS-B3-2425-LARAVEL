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
    EDIT
    <hr>
    <form action="{{ route('blog.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <input type="text" name="name" placeholder="nom" value="{{ $blog->name }}">
        </div>
        <div>
            <textarea name="content"rows="3">{{ $blog->content }}</textarea>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>