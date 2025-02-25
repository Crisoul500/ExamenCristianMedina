<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu principal</title>
</head>
<body>
    <div class="d-flex justify-content-between mb-3">
            
        <a href="{{route('crear-cliente')}}" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i>
            Crear Cliente
        </a>

    </div>

    <div class="card">
        <div class="card-header">
          Clientes
        </div>

        <table class="table-info">
            <thead class="thead-dark">
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->dni}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->correo}}</td>
                    <td class="action-buttons">
                        <a href="{{route('ver-cliente', $cliente->dni)}}" class="btn btn-info btn-sm">
                            Visualizar
                        </a>
                        <a href="{{route('editar-cliente', $cliente->dni)}}" class="btn btn-secondary btn-sm">
                            Editar
                        </a>
                        <a href="{{route('eliminar-cliente', $cliente->dni)}}" class="btn btn-danger btn-sm">
                            Eliminar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mb-3">
            <a href="{{route('menu')}}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</body>
</html>