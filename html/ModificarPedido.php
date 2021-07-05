<?php 
    include '../html/header.php';
?>


<div class="contenedor-formulario-eliminar">
    <div class="eliminar-formulario">
        <div class="eliminar-imagen">
            <div class="eliminar-overlay">
                <h3 class="eliminar-subtitulo">¿Qué Deseas Modificar?</h3>
            </div>

                <form action="" method="GET" class="formulario eliminar-comida-formulario">
                    <label for="pedido">Selecciona el Pedido</label>
                    <select name="pedido" id="pedido">
                                <option disabled="disabled" selected>--Seleccionar--</option>
                        <?php foreach($this->pedido as $ped): ?>
                                <option value="<?=$ped['idpedidos']?>">Pedido:<?=$ped['idpedidos']?> Cliente: <?=$ped['nombre']?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="estado">Selecciona el Estado del Pedido</label>
                    <select name="estado" id="estado">
                        <option disabled="disabled" selected>--Seleccionar--</option>
                        <option value="cocinandose">Cocinandose</option>
                        <option value="enviado">Enviado</option>
                        <option value="entregado">Entregado</option>
                    </select>
                    <input type="submit" value="Modificar" class="formulario-submit">
                </form>
                
        </div>
    </div>
</div>  

<?php
    include '../html/footer.php';
?>