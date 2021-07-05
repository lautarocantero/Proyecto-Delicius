<?php

    //controllers/delicius-nosotros.php

    
require '../fw/fw.php';
require '../views/DeliciusNosotros.php';   //clase hamburguesas en VIEW


$v = new DeliciusNosotros();     //V de vista
$v->render();           //dibujar vista

?>