
<?php

//controllers/iniciar-Empleado.php

require '../fw/fw.php';
require '../models/Empleados.php';
require '../models/ValidarExcepsion.php';
require '../views/FormularioLoginEmpleado.php';


if(count($_GET) > 0){

    session_start();    //creo la sesion

    $empleado = new Empleados() ;
    if($empleado->IniciarSesion($_GET['email'],sha1($_GET['pasword']))){
        $_SESSION['logueado'] = true;
        $_SESSION['email'] = $_GET['email'];
        $_SESSION['empleado'] = true;
        header("Location: home");
        exit;
    }else{
        header("Location: ingresar-trabajo");
    }

    
}

$v = new FormularioLoginEmpleado();     //V de vista
$v->render();           //dibujar vista


?>