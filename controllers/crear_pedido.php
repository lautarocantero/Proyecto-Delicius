
<?php

//controllers/crear_pedido.php

require '../fw/fw.php';
require '../models/Pedidos.php';
require '../models/Combos.php';
require '../models/Hamburguesas.php';
require '../models/Papas.php';
require '../models/Bebidas.php';
require '../models/ValidarExcepsion.php'; 
require '../views/FormularioPedido.php';

session_start();
if(!isset($_SESSION['cliente'])){
    header("Location: iniciar-sesion");
    exit;
}

if(count($_GET) > 0){
    $pedido = new Pedidos() ;

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

    if($_GET['idcombo'] != ""){
        $com = new Combos();
        $valcom = $com->Precio($_GET['idcombo']);
    }else{
        $valcom = 0;
    }

    $monto = $pedido->CrearMonto($valham,$valbeb,$valpap,$valcom);

    $pedido->CrearPedidos($monto,$_GET['nombre_cliente'],$_GET['email_cliente'],$_GET['idhamburguesa'],$_GET['idpapas'],$_GET['idbebidas'],$_GET['idcombo'],$_GET['direccion']);

    header("Location: home");
    
}


$a = new Hamburguesas();   
$menuhamburguesa = $a->GetMenu();

$b = new Bebidas();
$menubebidas = $b->GetMenu();

$c = new Papas();
$menupapas = $c->GetMenu();

$d = new Combos();
$menucombos = $d->getMenu();

$v = new Formulariopedidos();     //V de vista
$v->hamburguesas = $menuhamburguesa;
$v->bebidas = $menubebidas;
$v->papas = $menupapas;
$v->combos = $menucombos;
$v->render();           //dibujar vista




?>