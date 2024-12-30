<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear category</title>
</head>
<body>
    <a href="{{ route('categories.index') }}">Back</a>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <button type="submit">Save</button>
    </form>
</body>
</html>