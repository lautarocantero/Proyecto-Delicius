<?php

    //controllers/lista_pedidos.php

    require '../fw/fw.php';
    require '../models/Pedidos.php';
    require '../views/ListadoPedidos.php';

    session_start();
    if(!isset($_SESSION['empleado'])){
        header("Location: ingresar-trabajo");
        exit;
    }

    $e = new Pedidos();
    $listado = $e->GetPedidos();

    $v = new ListadoPedidos();
    $v->pedido = $listado;
    $v->render();


?>