
<?php

//controllers/borrar_clientes.php

require '../fw/fw.php';
require '../models/Clientes.php';   //clase hamburguesas en MODEL
require '../views/FormularioBorrarClientes.php';   //clase hamburguesas en VIEW

session_start();
if(!isset($_SESSION['empleado'])){
    header("Location: ingresar-trabajo");
    exit;
}

if(count($_GET) > 0){
    $idcliente = $_GET['cliente'];
    $cliente = new Clientes();
    $cliente->EliminarCliente($idcliente);
    header("Location: clientes");
 }

$e = new Clientes(); 
$borrar = $e->GetClientes();

$v = new FormularioBorrarClientes();     //V de vista
$v->cliente = $borrar; 
$v->render();           //dibujar vista

?>