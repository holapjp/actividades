<?php
    session_start();
    session_destroy();
    session_start();

    require_once("class.php");
    $c = new Conexion();
    $datos = null;
    $datos = $c->SearchEmail($_REQUEST['usuario']);
    if(empty($datos)){    
        $_SESSION["error"] = "Email ingresado no existe.";
        header("Location: index.php");
    }else{
        $user = null;
        $user = $c->confirmPassword($_REQUEST['usuario'],$_REQUEST['password']);
        if($user->password == md5($_REQUEST["password"])){
            $_SESSION["user"] = $user;
            header("Location: logueado.php");
        }else{
            $_SESSION["error"] = "Password ingresada es incorrecta.";
            header("Location: index.php");
        }
    }

?>  