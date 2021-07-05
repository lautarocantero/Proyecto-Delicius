<!--/html/ListadoPedidosCliente.php-->
<?php 
    include '../html/header.php';
?>

    <h3 class="pedidos-subtitulo">Pedidos</h2>
    <div class="pedidos">
        <div class="pedido-contenedor">
            <a href="borrar-pedido-cliente">Eliminar Pedido</a>
            <div class="listado-pedidos">
                <?php foreach($this->pedido as $ped): ?>
                    <div class="pedido">
                        <p class="pedido-item">Fecha: <?=$ped['fecha_pedido']?></p>
                        <p class="pedido-item">Monto: <?=$ped['monto']?></p>
                        <p class="pedido-item">Nombre del recibidor: <?=$ped['nombre']?></p>
                        <p class="pedido-item">Direccion: <?=$ped['direccion']?></p>
                        <!--este codigo solo se encarga de poner 'ninguno' si no se  ha pedido dicho producto-->
                        <p class="pedido-item">Hamburguesa: <?php if($ped['idhamburguesa'] != NULL){?> <?=$ped['idhamburguesa']?> <?php }else{ ?> Ninguno <?php } ?></p>
                        <p class="pedido-item">Papas: <?php if($ped['idpapas'] != NULL){?> <?=$ped['idpapas']?> <?php }else{ ?> Ninguno <?php } ?></p>
                        <p class="pedido-item">Bebida:<?php if($ped['idbebidas'] != NULL){?> <?=$ped['idbebidas']?> <?php }else{ ?> Ninguno <?php } ?></p>
                        <p class="pedido-item">Combo: <?php if($ped['idcombo'] != NULL){?> <?=$ped['idcombo']?> <?php }else{ ?> Ninguno <?php } ?>  </p>
                        <p class="pedido-item">Estado: <?=$ped['estado']?></p>
            
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?php
    include '../html/footer.php';
?>