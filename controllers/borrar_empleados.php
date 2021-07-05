
<?php

//controllers/borrar_empleados.php

require '../fw/fw.php';
require '../models/Empleados.php';   //clase hamburguesas en MODEL
require '../views/FormularioBorrarEmpleados.php';   //clase hamburguesas en VIEW

session_start();
if(!isset($_SESSION['empleado'])){
    header("Location: ingresar-trabajo");
    exit;
}

if(count($_GET) > 0){
    $idempleado = $_GET['empleado'];
    $empleado = new Empleados();
    $empleado->EliminarEmpleado($idempleado);
    header("Location: empleados");
 }

$e = new Empleados(); 
$borrar = $e->GetEmpleados();

$v = new FormularioBorrarEmpleados();     //V de vista
$v->empleado = $borrar; 
$v->render();           //dibujar vista

?>