<?php

    //controllers/modificar_pedido.php

    require '../fw/fw.php';
    require '../models/Pedidos.php';
    require '../views/ModificarPedido.php';

    session_start();
    if(!isset($_SESSION['empleado'])){
        header("Location: ingresar-trabajo");
        exit;
    }

    if(count($_GET) > 0){
       $idpedidos = $_GET['pedido'];
       $estado = $_GET['estado'];
       $pedido = new Pedidos();
       $pedido->ModificarEstado($idpedidos,$estado);
       header("Location: pedidos");
    }

    $e = new Pedidos();
    $listado = $e->GetPedidos();

    $v = new ModificarPedido();
    $v->pedido = $listado;
    $v->render();


?>