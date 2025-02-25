<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    
</head>
<body>
    <div class="container mt-5">
        
            <h1>Agregar nuevo cliente</h1>
            <div></div>
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    <form action="#"  method="post">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">DNI</label>
                            <input type="text" class="form-control" id="dni" placeholder="DNI" name="dni">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido">
                        </div>
                        <div class="mb-3">
                            <label for="sueldo" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono" placeholder="telefono" name="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="sueldo" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="correo" placeholder="correo" name="correo">
                        </div>
        
                        <div class="mb-3">
                            <a href="#" class="btn btn-secondary">Volver</a>
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
        
                    </form>
                </div>
            </div>

        
    </div>

</body>
</html>