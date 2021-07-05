<?php

//controllers/borrar_pedidos.php

require '../fw/fw.php';
require '../models/Pedidos.php';   
require '../models/ValidarExcepsion.php';
require '../views/FormularioBorrarPedidos.php';  

session_start();
if(!isset($_SESSION['empleado'])){
    header("Location: ingresar-trabajo");
    exit;
}

if(count($_GET) > 0){
       $idpedidos = $_GET['pedido'];
       $pedido = new Pedidos();
       $pedido->BorrarPedidos($idpedidos);
       header("Location: pedidos");
}

$e = new Pedidos(); 
$borrar = $e->GetPedidos();

$v = new FormularioBorrarPedidos();     //V de vista
$v->pedidos = $borrar; 
$v->render();           //dibujar vista

?>