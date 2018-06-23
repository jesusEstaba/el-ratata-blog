<?php

$conexion = mysqli_connect(
    'localhost',
    'root',
    '',
    'el_ratata'
);

$id = $_GET['id'];

#noticia grande
$resultado = mysqli_query($conexion, "SELECT * FROM articulos 
WHERE id='$id'");

$articulo = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Ratata | <?= $articulo['titulo'] ?></title>
</head>
<body>
    <?php if($articulo['video'] == ''): ?>
        <img src="imagenes/<?= $articulo['imagen'] ?>" width="width:100%;" alt="">
    <?php else: ?>
        <iframe width="560" height="315" src="<?= $articulo['video'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <?php endif; ?>
    <h2>
        <?= $articulo['titulo'] ?>
    </h2>
    <p>Autor: <?= $articulo['autor'] ?></p>
    <p>Fecha: <?= $articulo['fecha'] ?></p>

    <div>
        <?= $articulo['contenido'] ?>
    </div>

</body>
</html>
