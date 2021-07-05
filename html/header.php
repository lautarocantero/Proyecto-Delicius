

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">    <!--fuente titulo -->
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"> <!--fuente titulo -->
    <script src="https://kit.fontawesome.com/8206a300c4.js" crossorigin="anonymous"></script>   <!--iconos-->
    <link rel="stylesheet" href="static/css/app.css">
    
    
    <title>Delicius</title>
</head>
<body>

    <div class="header">
        <h1 class="header-titulo"><a href="home">Delicius</a></h1>
        <nav class="navegacion">
            <ul class="header-navegacion">
                <li><a href="hamburguesas" class="link">Productos</a></li>
                <li><a href="en-familia" class="link">En familia</a></li>
                <li><a href="nosotros" class="link">Nosotros</a></li>
                <?php if(!isset($_SESSION)) { session_start(); }    //esto comprueba la sesion
                if(!isset($_SESSION['empleado'])): ?>               <!--esto comprueba que mi menu solo le aparezca a los no empleados--->
                    <li><a href="nuevo-pedido" class="link">Mi menu</a></li>
                <?php endif; ?>
                <?php if(isset($_SESSION['empleado'])): ?>          <!--esto comprueba que solo a los empleados les aparezca clientes,pedidos y empleados--->             
                    <li><a href="clientes" class="link">Clientes</a></li> 
                    <li><a href="pedidos" class="link">Pedidos</a></li>   
                    <li><a href="empleados" class="link">Empleados</a></li>  
                <?php endif; ?>
                <?php  if(isset($_SESSION['cliente'])): ?>              <!--esto comprueba que solo a un cliente logeado le aparezcan sus pedidos--->
                    <li><a href="mis_pedidos" class="link">Mis pedidos</a></li>  
                <?php endif; ?>
                <?php
                    
                 if( isset($_SESSION['logueado'])): ?>
                    <li><a href="cerrar-sesion" class="link">Cerrar Sesión</a></li>  
                 <?php else:  ?>
                <li><a href="iniciar-sesion" class="link">Iniciar Sesión <i class="fas fa-user icono"></i> </a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>