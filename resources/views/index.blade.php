<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('infos.create') }}">Create</a>

    @forelse ($infos as $info)
        <h1>{{ $info->name }}</h1>
        {{ __('Category') }}: {{ $info->category ? $info->category->name : 'No Category' }}
        <p>{{ $info->file_uri }}</p>
        <img src="{{ asset('storage/images/' . $info->file_uri) }}" alt="{{ $info->name }}" width="200">
        <a href="{{ route('infos.edit', $info->id) }}">Edit</a>
       
    @empty
        <p>No data</p>
    @endforelse
</body>
</html>