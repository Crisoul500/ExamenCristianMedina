<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarjetas</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <h1>Tarjetas Clasicas</h1>
        </div>
        

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Numero Tarjeta</th>
                    <th>cvv</th>
                    <th>Limite</th>
                    <th>Cliente</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarjetasCls as $tarjeta)
                <tr>
                    <td>{{$tarjeta->numeroTarjeta}}</td>
                    <td>{{$tarjeta->cvv}}</td>
                    <td>{{$tarjeta->limite}}</td>
                    <td>{{$tarjeta->dni}}</td>
                    <td>{{$tarjeta->tipoTarjeta}}</td>
                    <td class="action-buttons">
                        <a href="{{route('ver-tarjeta', $tarjeta->numeroTarjeta)}}" class="btn btn-info btn-sm">
                            Visualizar
                        </a>
                        <a href="{{route('eliminar-tarjeta', $tarjeta->numeroTarjeta)}}" class="btn btn-danger btn-sm">
                            Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mb-3">
            <a href="{{route('tarjetas')}}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
    
</body>
</html>