<?php

//controllers/crear_combos.php

require '../fw/fw.php';
require '../models/Combos.php';
require '../models/Hamburguesas.php';
require '../models/Papas.php';
require '../models/Bebidas.php';
require '../models/ValidarExcepsion.php';
require '../views/FormularioCombos.php';

session_start();
if(!isset($_SESSION['empleado'])){
    header("Location: ingresar-trabajo");
    exit;
}

if(count($_GET) > 0){
    $combo = new Combos() ;

    if($_GET['idhamburguesa'] != "" ){
        $ham = new Hamburguesas();
        $valham = $ham->Precio($_GET['idhamburguesa']);
    }else{
        $valham = 0;
    }
    
    if($_GET['idbebidas'] != ""){
        $beb = new Bebidas();
        $valbeb = $beb->Precio($_GET['idbebidas']);
    }else{
        $valbeb = 0;
    }
    
    if($_GET['idpapas'] != ""){
        $pap = new Papas();
        $valpap = $pap->Precio($_GET['idpapas']);
    }else{
        $valpap = 0;
    }

    $monto = $combo->CrearMonto($valham,$valbeb,$valpap);

    $combo->CrearCombos($monto,$_GET['imagen'],$_GET['nombre'],$_GET['descripcion'],$_GET['idhamburguesa'],$_GET['idbebidas'],$_GET['idpapas'],);

    header("Location: combos");
    
}

    $a = new Hamburguesas();   
    $menuhamburguesa = $a->GetMenu();
    
    $b = new Bebidas();
    $menubebidas = $b->GetMenu();

    $c = new Papas();
    $menupapas = $c->GetMenu();

    $v = new FormularioCombos();     //V de vista
    $v->hamburguesas = $menuhamburguesa;
    $v->bebidas = $menubebidas;
    $v->papas = $menupapas;
    $v->render();           //dibujar vista


?>

