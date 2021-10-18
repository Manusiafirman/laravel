<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Data Post</h1>
    </center>
    @foreach ($query as $item)
        <h2> Id = {{ $item->id }}</h2>
        <h2> Name = {{ $item->name }}</h2>
        <h2> Born Date = {{ $item->bornDate }}</h2>
        <h2> Gendre = {{ $item->gender }}</h2>
        <h2> Address = {{ $item->addres }}</h2>
        <h2> Religion = {{ $item->religion }}</h2>
        <h2> Age = {{ $item->age }}</h2>
        <h2> Hobby = {{ $item->hobby }}</h2>
        <hr>
    @endforeach
</body>

</html>
