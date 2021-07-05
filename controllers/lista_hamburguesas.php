
<?php

    //controllers//lista_hamburguesas.php
    require '../fw/fw.php';
    require '../models/Hamburguesas.php';
    require '../views/ListadoHamburguesas.php';

    $e = new Hamburguesas();    
    $menu = $e->GetMenu();

    $v = new ListadoHamburguesas();
    $v->hamburguesas = $menu;
    $v->render();


?>