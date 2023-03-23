<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Lista de Carros</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Carros</h1>

        <a class="btn btn-outline-sucess my-2" href="{{route('carros.create')}}">Novo Carro</a>

        <table class="table table-hover table-bordered table-primary">
            <tr class="table-dark">
                <th>Modelo</th>
                <th>Marca</th>
                <th>Cor</th>
                <th>Motor</th>
                <th>Ano</th>
            </tr>

            @foreach ($carros as $carro )
                <tr>
                   <td>{{$Carro->modelo}}</td>
                   <td>{{$Carro->marca}}</td>
                   <td>{{$Carro->cor}}</td>
                   <td>{{$Carro->motor}}</td>
                   <td>{{$Carro->ano}}</td>
                </tr>

            @endforeach

        </table>

    </div>
</body>
</html>
