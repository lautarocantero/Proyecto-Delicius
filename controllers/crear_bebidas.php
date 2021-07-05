
<?php

//controllers/crear_bebidas.php

require '../fw/fw.php';
require '../models/Bebidas.php';
require '../models/ValidarExcepsion.php';
require '../views/FormularioBebidas.php';

session_start();
if(!isset($_SESSION['empleado'])){
    header("Location: ingresar-trabajo");
    exit;
}

if(count($_GET) > 0){
    $bebida = new Bebidas();
    $bebida->CrearBebidas($_GET['nombre'],$_GET['descripcion'],$_GET['precio'],$_GET['imagen']);
    header("Location: bebidas");
}

$v = new FormularioBebidas();     //V de vista
$v->render();           //dibujar vista


?>