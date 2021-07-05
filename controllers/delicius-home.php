<?php

    //controllers/delicius.php

    
require '../fw/fw.php';
require '../models/Combos.php';   //clase hamburguesas en MODEL
require '../views/DeliciusHome.php';   //clase hamburguesas en VIEW


$e = new Combos(); 
$mostrar_indice = $e->GetCombos();

$v = new DeliciusHome();     //V de vista
$v->combos = $mostrar_indice; 
$v->render();           //dibujar vista

?>