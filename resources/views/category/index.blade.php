<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
</head>
<body>

    @if (session('success'))
        <div style="padding: 1em; background-color: green; color: white">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('categories.create') }}">Create</a>

    @forelse ($categories as $category)
        <h1>{{ $category->name }}</h1>
        <a href="{{ route('categories.show', $category->id) }}">Show</a>
        <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>     
    @empty
        <p>No data</p>
    @endforelse
</body>
</html>