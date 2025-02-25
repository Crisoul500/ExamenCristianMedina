<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarjeta</title>
    
</head>
<body>
    <div class="container mt-5">
        
            <h1>Ver tarjeta</h1>
            <div></div>
            <div class="card" style="width: 18rem">
                <div class="card-body">
                    
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Numero tarjeta</label>
                            <input type="text" class="form-control" id="numero" placeholder="Numero Tarjeta" name="numero" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">CVV</label>
                            <input type="text" class="form-control" id="cvv" placeholder="CVV" name="cvv" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Limite</label>
                            <input type="text" class="form-control" id="limite" placeholder="limite" name="limite" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="sueldo" class="form-label">DNI-Cliente</label>
                            <input type="text" class="form-control" id="dni" placeholder="DNI" name="dni" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="sueldo" class="form-label">Tipo tarjeta</label>
                            <input type="text" class="form-control" id="tipo" placeholder="Tipo de tarjeta" name="tipo" readonly>
                        </div>
        
                        <div class="mb-3">
                            <a href="#" class="btn btn-secondary">Volver</a>
                        </div>
        
                    
                </div>
            </div>

        
    </div>

</body>
</html>