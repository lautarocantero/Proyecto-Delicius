<?php 
    include '../html/header.php';
?>


<div class="contenedor-formulario-crear">
    <div class="crear-formulario form-iniciar-sesion">
        <div class="crear-imagen">
            <div class="crear-overlay">
                <h3 class="crear-subtitulo">Iniciar Sesion</h3>
            </div>

                <form action="" method="GET" class="formulario crear-cliente-formulario" id="formulario">

                    <label for="email">email</label>
                    <input type="text" id="email" name="email" placeholder="Tu Mail">

                    <label for="contras">contraseña</label>
                    <input type="password" id="pasword" name="pasword" placeholder="Tu Contraseña">
                    
                    <input type="submit" value="Iniciar Sesión" class="formulario-submit" id="crear">
                    
                    <a href="nuevo-cliente">No tienes cuenta? Crea Una!</a>
                    <a href="ingresar-trabajo">Eres un empleado? Click aquí</a>
                </form>
        </div>
    </div>
</div>  

<?php
    include '../html/footer.php';
?>