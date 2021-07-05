
<?php

    //controllers/crear_hamburguesas.php

    require '../fw/fw.php';
    require '../models/Hamburguesas.php';
    require '../models/ValidarExcepsion.php';
    require '../views/FormularioHamburguesa.php';

    session_start();
    if(!isset($_SESSION['empleado'])){
        header("Location: ingresar-trabajo");
        exit;
    }

    if(count($_GET) > 0){
        $hamburgesita = new Hamburguesas() ;
        $hamburgesita->CrearHamburguesa($_GET['nombre'],$_GET['descripcion'],$_GET['precio'],$_GET['imagen']);
        header("Location: hamburguesas");
    }
    
    $v = new FormularioHamburguesa();     
    $v->render();           
    

?>