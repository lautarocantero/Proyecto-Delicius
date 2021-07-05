
<?php

    //controllers/crear_papas.php

    require '../fw/fw.php';
    require '../models/Papas.php';
    require '../models/ValidarExcepsion.php';
    require '../views/FormularioPapas.php';

    session_start();
    if(!isset($_SESSION['empleado'])){
        header("Location: ingresar-trabajo");
        exit;
    }
    

    if(count($_GET) > 0){
        $papita = new Papas() ;
        $papita->CrearPapas($_GET['nombre'],$_GET['descripcion'],$_GET['precio'],$_GET['imagen']);
        header("Location: papas");
        
    }
    
    $v = new FormularioPapas();     //V de vista
    $v->render();           //dibujar vista
    





?>