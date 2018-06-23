<?php

    $conexion = mysqli_connect(
        'localhost',
        'root',
        '',
        'el_ratata'
    );

    
    #noticia grande
    $resultado = mysqli_query($conexion, "SELECT * FROM articulos 
    WHERE categoria=1
    ORDER BY id DESC");

    $articulo_grande = mysqli_fetch_assoc($resultado);

    #noticias principales
    $resultado = mysqli_query($conexion, "SELECT * FROM articulos 
    WHERE categoria=2
    ORDER BY id DESC");

    $articulos_principales = [];

    while ($articulo = mysqli_fetch_assoc($resultado)) {
        $articulos_principales []= $articulo;
    }

    #noticias secundarias
    $resultado = mysqli_query($conexion, "SELECT * FROM articulos 
    WHERE categoria=3
    ORDER BY id DESC");

    $articulos_secundarios = [];

    while ($articulo = mysqli_fetch_assoc($resultado)) {
        $articulos_secundarios []= $articulo;
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Ratata | Tu Blog de noticias de confianza ;D</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body class="bg-dark">
    
    <div class="bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-light">
                        El Ra<i>tata</i>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-md-12">
            <div class="card text-center">
                <div class="card-body p-0">
                    <img src="imagenes/<?= $articulo_grande['imagen'] ?>" height="100" class="img-fluid" alt="noticia principal">
                </div>
                <div class="card-footer">
                    <h1 class="card-title"><?= $articulo_grande['titulo'] ?></h1>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <?php foreach($articulos_principales as $articulo):?>
                    <div class="card mb-2">
                        <img class="card-img-top" src="imagenes/<?= $articulo['imagen'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $articulo['titulo'] ?></h5>
                            <p class="card-text">
                                <?= $articulo['resumen'] ?>
                            </p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6">
                <?php foreach($articulos_secundarios as $articulo):?>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title"><?= $articulo['titulo'] ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $articulo['autor'] ?></h6>
                            <p class="card-text"><?= $articulo['resumen'] ?></p>
                            <a href="#" class="card-link">Leer Más</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</body>
</html>