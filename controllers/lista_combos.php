
<?php

    //controllers/lista_combos.php

    require '../fw/fw.php';
    require '../models/Combos.php';
    require '../views/ListadoCombos.php';

    $e = new Combos();
    $menu = $e->GetMenu();

    $v = new ListadoCombos();
    $v->combos = $menu;
    $v->render();