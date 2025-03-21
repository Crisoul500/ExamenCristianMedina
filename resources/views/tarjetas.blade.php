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
            
        <a href="{{route('crear-tarjeta')}}" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i>
            Crear Tarjeta
        </a>

    </div>

    <div class="card">
      <div class="card-header">
        Ver Tarjetas
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tarjetas clasicas</h5>
              <a href="{{route('cls')}}" class="btn btn-primary">Clasicas</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tarjetas Gold</h5>
              <a href="{{route('gld')}}" class="btn btn-primary">Gold</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tarjetas Platino</h5>
              <a href="{{route('plt')}}" class="btn btn-primary">Platino</a>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-3">
            <a href="{{route('menu')}}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</body>
</html>