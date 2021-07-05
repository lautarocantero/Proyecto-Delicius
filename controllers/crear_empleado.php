<?php

//controllers/crear_empleado.php

require '../fw/fw.php';
require '../models/Empleados.php';
require '../models/ValidarExcepsion.php';   //esto es para los throws
require '../views/FormularioEmpleados.php';   

if(count($_GET) > 0){
    $empleado = new Empleados() ;
    $empleado->CrearEmpleado($_GET['nombre'],$_GET['email'],$_GET['pasword'],$_GET['apellido'],$_GET['telefono'],$_GET['dni']);

    header("Location: ingresar-trabajo");
    
}

    $e = new Empleados();   
    $listaempleados = $e->GetEmpleados();
    

    $v = new FormularioEmpleados();     //V de vista
    $v->empleados = $listaempleados;
    $v->render();           //dibujar vista


?>

