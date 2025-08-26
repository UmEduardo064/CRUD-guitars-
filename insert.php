<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsertGuitar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
            crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Gitars🤘</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="insert.html">Insert</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Read</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Update</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Delete</a>
            </li>
        </ul>

        </div>
    </div>
</nav>

<form action="save.php" method="POST">

    <select class="form-select" aria-label="Default select example" name="modelo">
        <option selected>Modelo</option>
        <option value="Stratocaster">Stratocaster</option>
        <option value="Les Paul">Les Paul</option>
        <option value="Flying V">Flying V</option>
        <option value="Iceman">Iceman</option>
    </select>

    <select class="form-select" aria-label="Default select example" name="marca">
        <option selected>Marca</option>
        <option value="Fender">Fender</option>
        <option value="Stringberg">Stringberg</option>
        <option value="Jackson">Jackson</option>
        <option value="Tagima">Tagima</option>        
    </select>

    <input class="form-control" type="text" placeholder="Preço: " name="preco" aria-label="default input example">

    <select class="form-select" aria-label="Default select example" name="num_corda">
        <option selected>Numero de Cordas</option>s
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="12">12</option>        
    </select>

    <select class="form-select" aria-label="Default select example" name="captation">
        <option selected>Tipo da Captação</option>
        <option value="P-90">P-90</option>
        <option value="Single coil">Single coil</option>
        <option value="Mini-humbuckers">Mini-humbuckers</option>
        <option value="Blade pickups (hot rail)">Blade pickups (hot rail)</option>
        <option value="Stacked">Stacked</option>
        <option value="Piezo">Piezo</option>
    </select>

    <select class="form-select" aria-label="Default select example" name="ponte">
        <option selected>Ponte</option>
        <option value="Ponte fixa">Ponte fixa</option>
        <option value="Ponte semiflutuante">Ponte semiflutuante</option>
        <option value="Ponte flutuante">Ponte flutuante</option>     
    </select>

    <button type="submit" class="btn btn-primary mt-3">Salvar</button>

</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
                crossorigin="anonymous"></script>
    
</body>
</html>