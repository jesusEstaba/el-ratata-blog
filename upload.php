<?php

session_start();

if(!isset($_SESSION['id'])){
    header("Location: index.php");
    exit();
}


     $conexion = mysqli_connect(
            'localhost',
            'root',
            '',
            'c9'
        );
        $titulo = $_GET['titulo'];
        $contenido= $_GET['contenido'];
        $result = mysqli_query($conexion, "INSERT INTO articulos (titulo, resumen,autor,categoria) VALUES ('$titulo', '$contenido','LGsus','3')");
    
header("Location: create.php");