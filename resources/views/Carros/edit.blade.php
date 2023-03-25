<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Carro:  #{{ $carro->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição do Carro: {{ $carro->id }}</h1>

            <form method="POST" action="{{ route('carros.update', $carro->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Modelo</label>
                    <input type="text" name="modelo" class="form-control" value="{{ $carro->modelo }}">
                </div>

                <div class="mb-3">
                    <label>Marca</label>
                    <input type="text" name="marca" class="form-control" value="{{ $carro->marca }}">
                </div>

                <div class="mb-3">
                    <label>Cor</label>
                    <input type="text" name="cor" class="form-control" value="{{ $carro->cor }}">
                </div>

                <div class="mb-3">
                    <label>Motor</label>
                    <input type="text" name="motor" class="form-control" value="{{ $carro->motor }}">
                </div>

                <div class="mb-3">
                    <label>Ano</label>
                    <input type="text" name="ano" class="form-control" value="{{ $carro->ano }}">
                </div>

                <div>
                    <input type="submit" value="Atualizar Carro" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
