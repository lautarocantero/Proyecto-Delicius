<?php

    //controllers/lista_bebidas.php

    require '../fw/fw.php';
    require '../models/Bebidas.php';
    require '../views/ListadoBebidas.php';

    $e = new Bebidas();
    $menu = $e->GetMenu();

    $v = new ListadoBebidas();
    $v->bebidas = $menu;
    $v->render();



?>