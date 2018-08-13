<?php 
    require_once("class.php");
    session_start();
    $c = new Conexion();
    $confirm = $c->singUp($_REQUEST["usuario"],$_REQUEST["password"]);
    if($confirm){
        $_SESSION["registro"] = "Resgitro existoso.";
        header("Location: index.php");
    }else{
        $_SESSION["error"] = "Hubo un error, por favor vuelve a intentar.";
        header("Location: index.php");
    }
?>