<?php

    //controllers/delicius-familia.php

    
require '../fw/fw.php';
require '../views/DeliciusFamilia.php';   //clase hamburguesas en VIEW


$v = new DeliciusFamilia();     //V de vista
$v->render();           //dibujar vista

?>