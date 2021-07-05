
<?php

//controllers/cerrar-sesion.php

    session_start();
    unset($_SESSION['logueado']);
    unset($_SESSION['empleado']);
    unset($_SESSION['cliente']);
    unset($_SESSION['email']);
    header("Location: home");
    exit;


?>