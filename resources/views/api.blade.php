<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API</title>
</head>

<body>

    <h3>
        @foreach ($responseBody as $item)
            Title : {{ $item->title }}
            <br>
            Harga : {{ $item->price }}
            <br>
            <img src="{{ $item->images[0] }}" alt="">
            <br>
            Note : {{ $item->description }}
            <br>
            Category : {{ $item->category->name }}
            <br>
            <img src="{{ $item->category->image }}" alt="">
        @endforeach
    </h3>

</body>

</html>
