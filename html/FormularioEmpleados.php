<?php 
    include '../html/header.php';
?>


<div class="contenedor-formulario-crear">
    <div class="crear-formulario form-empleado">
        <div class="crear-imagen">
            <div class="crear-overlay">
                <h3 class="crear-subtitulo">Bienvenido a la familia de Delicius!</h3>
            </div>

                <form action="" method="GET" class="formulario crear-cliente-formulario" id="formulario">

                    <label for="nombre">nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">

                    <label for="apellido">apellido</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">

                    <label for="telefono">telefono</label>
                    <input type="number" id="telefono" name="telefono">

                    <label for="dni">dni</label>
                    <input type="number" id="dni" name="dni">

                    <label for="email">email</label>
                    <input type="text" id="email" name="email" placeholder="Tu Mail">

                    <label for="contras">contraseña</label>
                    <input type="password" id="pasword" name="pasword" placeholder="Tu Contraseña">
                    
                    <input type="submit" value="Crear" class="formulario-submit" id="crear">
                    <input type="button" value="Limpiar" class="formulario-submit" id="limpiar">
                </form>
        </div>
    </div>
</div>  

<?php
    include '../html/footer.php';
?>