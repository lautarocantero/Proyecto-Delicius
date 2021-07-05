<?php

    //controllers/lista_clientes.php

    require '../fw/fw.php';
    require '../models/Clientes.php';
    require '../views/ListadoClientes.php';

    session_start();
    if(!isset($_SESSION['empleado'])){
        header("Location: ingresar-trabajo");
        exit;
    }

    $e = new Clientes();
    $grupo = $e->GetClientes();

    $v = new ListadoClientes();
    $v->clientes = $grupo;
    $v->render();



?>