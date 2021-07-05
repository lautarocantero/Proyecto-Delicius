<?php 
    include '../html/header.php';
?>


<div class="contenedor-formulario-crear">
    <div class="crear-formulario form-crear-empleado">
        <div class="crear-imagen">
            <div class="crear-overlay">
                <h3 class="crear-subtitulo">Iniciar Sesion Empleado</h3>
            </div>

                <form action="" method="GET" class="formulario crear-cliente-formulario" id="formulario">

                    <label for="email">email</label>
                    <input type="text" id="email" name="email" placeholder="Tu Mail">

                    <label for="contras">contraseña</label>
                    <input type="password" id="pasword" name="pasword" placeholder="Tu Contraseña">
                    
                    <input type="submit" value="Iniciar Sesión" class="formulario-submit" id="crear">
                    <input type="button" value="Limpiar" class="formulario-submit" id="limpiar">
                    <a href="nuevo-empleado">Agregar Nuevo Empleado</a>
                    <a href="iniciar-sesion">Eres un cliente? Click aquí</a>
                </form>
        </div>
    </div>
</div>  

<?php
    include '../html/footer.php';
?>