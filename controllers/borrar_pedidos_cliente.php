<?php

    //controllers/borrar_pedidos_cliente.php

    require '../fw/fw.php';
    require '../models/Pedidos.php';
    require '../views/FormularioBorrarPedidosCliente.php';


    if(count($_GET) > 0){
        $idpedidos = $_GET['pedido'];
        $pedido = new Pedidos();
        $pedido->BorrarPedidos($idpedidos);
        header("Location: mis_pedidos");
    }

    session_start();  
    if(!isset($_SESSION['cliente'])){
        header("Location: iniciar-sesion");
        exit;
    }
    $e = new Pedidos();
    $listado = $e->GetPedidosEmail($_SESSION['email']);
    

    $v = new FormularioBorrarPedidosCliente();
    $v->pedido = $listado;
    $v->render();


?>