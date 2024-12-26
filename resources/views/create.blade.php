<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('index') }}">Index</a>
    <br>
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="file">Choose file:</label>
        <input type="file" id="file" name="file">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>