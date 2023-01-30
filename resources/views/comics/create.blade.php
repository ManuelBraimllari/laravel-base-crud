<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('comics.store')}}">
        @csrf

        <input placeholder="title" type="text" name="title" id=""> <br>
        <input placeholder="description" type="text" name="description" id=""> <br>
        <input placeholder="thumb" type="text" name="thumb" id=""> <br>
        <input placeholder="price" type="number" name="price" id=""> <br>
        <input placeholder="series" type="text" name="series" id=""> <br>
        <input placeholder="sale_date" type="date" name="sale_date" id=""> <br>
        <input placeholder="type" type="text" name="type" id=""> <br>

        <button type="submit">Submite</button>
    </form>
</body>
</html>
