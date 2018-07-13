<?php

session_start();

if(!isset($_SESSION['id'])){
    header("Location: index.php");
    exit();
}


?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form action="upload.php" method="get">
            <input type="text" name="titulo" placeholder="titulo"/>
            <input type="textarea" name="contenido" placeholder="resumen"/>
            <input type="submit" value="Submit"/>
        </form>
        <a href="index.php">Inicio</a>
        <a href="logout.php">logout</a>
    </body>
</html>