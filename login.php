<?php
    session_start();
    if(!isset($_SESSION['id'])) {
       $conexion = mysqli_connect(
            'localhost',
            'root',
            '',
            'c9'
        );
        $email = $_GET['email'];
        $pass= $_GET['password'];
        $result = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ") or die(mysqli_error($conexion));
    
        if ($user = mysqli_fetch_assoc($result)) {
            if ($user['pass']==$pass){
                $_SESSION['id']=$user['id'];
                header("Location: create.php");
            }else {
                echo "contraseña invalida";
            }
        }else {
            echo "el usuario no existe";
        }
    }else{
                header("Location: create.php");
    }