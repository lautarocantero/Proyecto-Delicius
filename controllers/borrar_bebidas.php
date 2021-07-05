
<?php

//controllers/borrar_bebidas.php

require '../fw/fw.php';
require '../models/Bebidas.php';   //clase hamburguesas en MODEL
require '../views/FormularioBorrarBebidas.php';   //clase hamburguesas en VIEW

session_start();
if(!isset($_SESSION['empleado'])){
    header("Location: ingresar-trabajo");
    exit;
}

if(count($_GET) > 0){
    $idbebida = $_GET['bebida'];
    $bebida = new Bebidas();
    $bebida->BorrarBebidas($idbebida);
    header("Location: bebidas");
 }

$e = new Bebidas(); 
$borrar = $e->GetMenu();

$v = new FormularioBorrarBebidas();     //V de vista
$v->bebidas = $borrar; 
$v->render();           //dibujar vista

?>