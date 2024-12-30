<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update category</title>
</head>
<body>
    <a href="{{ route('categories.index') }}">Back</a>

    <form action="{{ route('categories.update', $category) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $category->name}}" placeholder="Name">
        <button type="submit">Save</button>
    </form>
</body>
</html>