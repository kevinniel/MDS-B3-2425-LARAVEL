<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Articles
    <a href="{{ route('blog.create') }}">Ajout un article</a>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->name }}</td>
                    <td>
                        
                        <ul>
                            <li><a href="{{ route('blog.show', $blog->id) }}">Voir</a></li>
                            <li><a href="{{ route('blog.edit', $blog->id) }}">Modifier</a></li>
                            <li>
                                <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Supprimer</button>
                                </form>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>