<?php

//controllers/borrar_papas.php

require '../fw/fw.php';
require '../models/Papas.php';   //clase papas de MODELS
require '../models/ValidarExcepsion.php';
require '../views/FormularioBorrarPapas.php';   //clase Papas

session_start();
if(!isset($_SESSION['empleado'])){
    header("Location: ingresar-trabajo");
    exit;
}

if(count($_GET) > 0){
    $idpapas = $_GET['papas'];
    $papas = new Papas();
    $papas->BorrarPapas($idpapas);
    header("Location: papas");
 }

$e = new Papas(); 
$borrar = $e->GetMenu();

$v = new FormularioBorrarPapas();     //V de vista
$v->papas = $borrar; 
$v->render();           //dibujar vista

?>