
<!--html/FormularioPedidos-->
<?php 
    include '../html/header.php';

?>


<div class="contenedor-formulario-crear">
    <div class="crear-formulario form-pedido">
        <div class="crear-imagen">
            <div class="crear-overlay">
                <h3 class="crear-subtitulo">¿Qué deséas comer hoy?</h3>
            </div>

                <form action="" method="GET" class="formulario crear-comida-formulario">

                    <label for="nombre_cliente">nombre</label>
                    <input type="text" id="nombre_cliente" name="nombre_cliente" placeholder="Nombre de Quien recibe el pedido">

                    <input type="hidden" id="email_cliente" name="email_cliente" value="<?=$_SESSION['email']?>">

                    <label for="direccion">direccion</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Direccion de destino del pedido">

                    <!--HAMBURGUESA-->
                    <label for="hamburguesa">hamburguesa</label>
                        <select name="idhamburguesa" id="hamburguesa">
                            <option value="" selected>--Ninguno--</option>
                            <?php foreach($this->hamburguesas as $ham):  ?>
                                <option value="<?= $ham['idhamburguesa'] ?>"> <?= $ham['nombre'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    
                    <!--BEBIDA-->
                    <label for="bebidas">bebidas</label>
                        <select name="idbebidas" id="bebidas">
                            <option value="" selected>--Ninguno--</option>
                            <?php foreach($this->bebidas as $beb):  ?>
                                <option value="<?=$beb['idbebida']?>"> <?= $beb['nombre'] ?> </option>
                            <?php endforeach; ?>
                        </select>

                    <!--PAPAS-->
                    <label for="papas">papas</label>
                        <select name="idpapas" id="papas">
                            <option value="" selected>--Ninguno--</option>
                            <?php foreach($this->papas as $pap):  ?>
                                <option value="<?= $pap['idpapas'] ?>"> <?= $pap['nombre'] ?> </option>
                            <?php endforeach; ?>
                        </select>

                     <label for="idcombo">combo</label>
                        <select name="idcombo" id="combo">
                            <option value="" selected>--Ninguno--</option>
                            <?php foreach($this->combos as $com):  ?>
                                <option value="<?= $com['idcombo'] ?>"> <?= $com['nombre'] ?> </option>
                            <?php endforeach; ?>
                        </select> 

                    
                    <input type="submit" value="Crear" class="formulario-submit">
                </form>
                
        </div>
    </div>
</div>  

<?php
    include '../html/footer.php';
?>