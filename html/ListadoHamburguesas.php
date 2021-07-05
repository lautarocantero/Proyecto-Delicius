<!--/html/ListadoHamburguesas.php-->
<?php 
    include '../html/header.php';
?>

<?php  if(isset($_SESSION['empleado'])): ?>     <!--esto solo mostrara las opciones para crear y eliminar si esta logueado un empleado, las opciones estan bloqueadas para-->
    <div class="opciones_comida">               <!--los no empleados desde el controlador-->
    <ul class="lista-opciones">
        <li><a href="nueva-hamburguesa" class="link-opcion opcion-crear">Crear</a></li>
        <li><a href="borrar-hamburguesa" class="link-opcion opcion-eliminar">Eliminar</a></li>
    </ul>
    </div>  
<?php endif; ?>

<div class="productos-expositorio">

    <div class="navegador-productos">
        <ul class="lista-productos">
            <li class="item-navegador-productos">
                <div class="link-productos ham">
                    <a href="hamburguesas">
                        <img src="static/img/hamburguesa-3.png" alt="hamburguesa" class="link-hamburguesa">
                        <p class="link-texto">Hamburguesas</p>
                    </a>
                </div>
            </li>
            <li class="item-navegador-productos">
                <div class="link-productos beb">
                    <a href="bebidas">
                        <img src="static/img/bebida.png" alt="bebida" class="link-bebida">
                        <p class="link-texto">Bebida</p>
                    </a>
                </div>
            </li>
            <li class="item-navegador-productos pap">
                <div class="link-productos">
                    <a href="papas">
                        <img src="static/img/papas.png" alt="papas" class="link-papas">
                        <p class="link-texto">Papas y Complementos</p>
                    </a>
                </div>
            </li>
            <li class="item-navegador-productos pap">
                <div class="link-productos">
                    <a href="combos">
                        <img src="static/img/combo-1.png" alt="papas" class="link-combo">
                        <p class="link-texto">Combos</p>
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <div class="productos">
    <?php foreach($this->hamburguesas as $ham): ?>
        <div class="producto">
            <img src="static/img/<?=$ham['imagen']?>" alt="imagen" class="producto-imagen">
            <div class="producto-informacion">
                <h4 class="producto-nombre"> <?= $ham['nombre'];  ?></h4>
                <p class="producto-precio"> <?= $ham['precio'];  ?>$</p>
                <p class="producto-descripcion"><?=$ham['descripcion']?></p>
                <?php  if(isset($_SESSION['empleado'])): ?>
                    <p class="producto-descripcion"><?=$ham['idhamburguesa']?></p>  <!--el id solo lo veran los empleados-->
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

    
</div>

<?php
    include '../html/footer.php';
?>