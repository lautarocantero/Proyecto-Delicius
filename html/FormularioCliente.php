<?php 
    include '../html/header.php';
?>


<div class="contenedor-formulario-crear">
    <div class="crear-formulario form-cliente">
        <div class="crear-imagen-cliente">
            <div class="crear-overlay">
                <h3 class="crear-subtitulo">¿Quieres unirte a Delicius?</h3>
            </div>

                <form action="" method="GET" class="formulario crear-cliente-formulario" id="formulario">

                    <label for="nombre">nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">

                    <label for="email">email</label>
                    <input type="text" id="email" name="email" placeholder="Tu Mail">

                    <label for="contras">contraseña</label>
                    <input type="password" id="pasword" name="pasword" placeholder="Tu Contraseña">

                    <label for="telefono">telefono</label>
                    <input type="number" id="telefono" name="telefono" placeholder="Tu Telefono">

                    <label for="direccion">direccion</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Tu Dirección">


                    
                    <input type="submit" value="Crear" class="formulario-submit" id="crear">
                    <input type="button" value="Limpiar" class="formulario-submit" id="limpiar">
                </form>
        </div>
    </div>
</div>  

<?php
    include '../html/footer.php';
?>