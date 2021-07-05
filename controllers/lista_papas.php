<?php

    //controllers/lista_papas.php

    require '../fw/fw.php';
    require '../models/papas.php';
    require '../views/ListadoPapas.php';

    $e = new Papas();
    $menu = $e->GetMenu();

    $v = new ListadoPapas();
    $v->papas = $menu;
    $v->render();


?>