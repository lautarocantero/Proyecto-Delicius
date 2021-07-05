<!--html/crearCombos-->
<?php 
    include '../html/header.php';
?>


<div class="contenedor-formulario-crear">
    <div class="crear-formulario form-comida">
        <div class="crear-imagen">
            <div class="crear-overlay">
                <h3 class="crear-subtitulo">¿Qué estas cocinando?</h3>
            </div>

                <form action="" method="GET" class="formulario crear-comida-formulario">
                    <label for="nombre">nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre del combo">
                    <label for="descripcion">descripcion</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Su descripcion"></textarea>
                    <!-- seleccionar comidas  -->
                        <!--HAMBURGUESA-->
                        <label for="idhamburguesa">hamburguesa</label>
                        <select name="idhamburguesa" id="idhamburguesa">
                            <?php foreach($this->hamburguesas as $ham):  ?>
                                <option value="<?= $ham['idhamburguesa'] ?>"> <?= $ham['nombre'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                        <!--BEBIDA-->
                        <label for="idbebidas">bebidas</label>
                        <select name="idbebidas" id="idbebidas">
                            <?php foreach($this->bebidas as $beb):  ?>
                                <option value="<?=$beb['idbebida']?>"> <?= $beb['nombre'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                        <!--PAPAS-->
                        <label for="idpapas">papas</label>
                        <select name="idpapas" id="idpapas">
                            <?php foreach($this->papas as $pap):  ?>
                                <option value="<?= $pap['idpapas'] ?>"> <?= $pap['nombre'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    <label for="imagen">imagen</label>
                    <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
                    <input type="submit" value="Crear" class="formulario-submit">
                </form>
                
        </div>
    </div>
</div>  

<?php
    include '../html/footer.php';
?>