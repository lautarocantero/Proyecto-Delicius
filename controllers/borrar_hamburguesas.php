
<?php

//controllers/eliminar_hamburguesas.php

require '../fw/fw.php';
require '../models/Hamburguesas.php';   //clase hamburguesas
require '../views/FormularioBorrarHamburguesas.php';   //clase hamburguesas

session_start();
if(!isset($_SESSION['empleado'])){
    header("Location: ingresar-trabajo");
    exit;
}

if(count($_GET) > 0){
   $idhamburguesa = $_GET['hamburguesa'];
   $hamburguesa = new Hamburguesas();
   $hamburguesa->BorrarHamburguesa($idhamburguesa);
   header("Location: hamburguesas");
}

$e = new Hamburguesas(); 
$borrar = $e->GetMenu();

$v = new FormularioBorrarHamburguesas();     //V de vista
$v->hamburguesas = $borrar; 
$v->render();           //dibujar vista

?>