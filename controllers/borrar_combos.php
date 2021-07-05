<?php

//controllers/eliminar_combos.php

require '../fw/fw.php';
require '../models/Combos.php';   //
require '../views/FormularioBorrarCombos.php';   //

session_start();
if(!isset($_SESSION['empleado'])){
    header("Location: ingresar-trabajo");
    exit;
}

if(count($_GET) > 0){
    $idcombos = $_GET['combo'];
    $combo = new Combos();
    $combo->BorrarCombos($idcombos);
    header("Location: combos");
 }

$e = new Combos(); 
$borrar = $e->GetMenu();

$v = new FormularioBorrarCombos();     //V de vista
$v->combos = $borrar; 
$v->render();           //dibujar vista

?>