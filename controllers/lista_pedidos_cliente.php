<?php

    //controllers/lista_pedidos_cliente.php

    require '../fw/fw.php';
    require '../models/Pedidos.php';
    require '../views/ListadoPedidosCliente.php';

    session_start();  
    if(!isset($_SESSION['cliente'])){
        header("Location: iniciar-sesion");
        exit;
    }
    $e = new Pedidos();
    $listado = $e->GetPedidosEmail($_SESSION['email']);
    

    $v = new ListadoPedidosCliente();
    $v->pedido = $listado;
    $v->render();


?>