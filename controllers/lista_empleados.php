<?php

    //controllers/lista_empleados.php

    require '../fw/fw.php';
    require '../models/Empleados.php';
    require '../views/ListadoEmpleados.php';

    session_start();
    if(!isset($_SESSION['empleado'])){
        header("Location: ingresar-trabajo");
        exit;
    }

    $e = new Empleados();
    $grupo = $e->GetEmpleados();

    $v = new ListadoEmpleados();
    $v->empleados = $grupo;
    $v->render();



?>