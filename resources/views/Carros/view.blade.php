<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Seu Carro</title>
</head>
<body>
    <div class="container">
        <a href="{{ route('carros.index') }}" class="btn btn-outline-success my-2">Voltar a lista</a>

        <a href="{{ route('carros.edit', $carro->id)}}" class="btn btn-outline-success my-2">Atualizar</a>

        <form method="POST" action="{{ route('carros.destroy', $carro->id) }}">
            @csrf
            @method('DELETE')

            <input type="submit" value="Excluir Carro" class="btn btn-danger">
        </form>

        <table class="table table-hover table-bordered table-primary">

            <tr class="table-dark">
                <th><h1>{{ $carro->modelo }}<h1></th>
            </tr>
            <tr>
                <td><h3>{{ $carro->ano }}</h3></td>
            </tr>
            <tr><td><h3>Cor: {{ $carro->cor }}</h3></td></tr>
            <tr><td> <h3>{{ $carro->motor }}</h3></td></tr>
            <tr> <td><h3>Ano: {{ $carro->ano }}</h3></td></tr>


    </div>

</body>
</html>
