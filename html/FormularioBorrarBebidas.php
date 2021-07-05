<?php 
    include '../html/header.php';

?>

<div class="contenedor-formulario-eliminar">
    <div class="eliminar-formulario">
        <div class="eliminar-imagen">
            <div class="eliminar-overlay">
                <h3 class="eliminar-subtitulo">¿Qué Deseas Eliminar?</h3>
            </div>

                <form action="" method="GET" class="formulario eliminar-comida-formulario">
                    <label for="nombre">nombre</label>
                    <select name="bebida" id="bebida">
                                <option disabled="disabled" selected>--Seleccionar--</option>
                        <?php foreach($this->bebidas as $beb): ?>
                                <option value="<?=$beb['idbebida']?>">Id: <?=$beb['idbebida']?> Nombre: <?=$beb['nombre']?> </option>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" value="Eliminar" class="formulario-submit">
                </form>
                
        </div>
    </div>
</div>  

<?php
    include '../html/footer.php';
?>