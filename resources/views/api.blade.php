<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body>
    @csrf
    <div class="row" style="justify-content: center;">
        @foreach ($responseBody as $item)
            <div class="col-sm-3">
                <div class="card p-2 bd-highlight" style="width: 18rem; margin: 10px; p-2 bd-highlight">
                    <img src="{{ $item->images[0] }}" style="p-2">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $item->title }}</h5>
                        <p class="card-text">Rp. {{ number_format(@$item->price, 0, ',', '.') }}</p>
                        <p class="card-text"> {{ $item->description }}</p>
                        <p>Category : {{ $item->category->name }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
