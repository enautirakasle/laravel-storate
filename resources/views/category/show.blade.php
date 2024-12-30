<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>
    <a href="{{ route('categories.create') }}">Create</a> -
    <a href="{{ route('categories.index') }}">Back</a>
    <h1>{{ $category->name }}</h1>
    <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>