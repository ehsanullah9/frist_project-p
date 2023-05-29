<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Pizzas list</p>

    @foreach($pizza as $pizza)
        <p>{{ $pizza->type }}--{{ $pizza->crust }}--{{ $pizza->price }}</p>

    @endforeach
    {{$name}}{{$age}}
   

</body>
</html>