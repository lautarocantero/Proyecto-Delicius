
<?php

//controllers/login.php

require '../fw/fw.php';
require '../models/Clientes.php';
require '../models/ValidarExcepsion.php';
require '../views/FormularioLoginCliente.php';


if(count($_GET) > 0){

    session_start();    //creo la sesion

    $cliente = new Clientes() ;
    if($cliente->IniciarSesion($_GET['email'],sha1($_GET['pasword']))){
        $_SESSION['logueado'] = true;
        $_SESSION['email'] = $_GET['email'];
        $_SESSION['cliente'] = true;
        header("Location: home");
        exit;
    }else{
        header("Location: iniciar-sesion");
    }

    
}

$v = new FormularioLoginCliente();     //V de vista
$v->render();           //dibujar vista


?>