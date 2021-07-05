<!--/html/ListadoClientes.php-->
<?php 
    include '../html/header.php';
?>

    <div class="clientes">
        
        <h3 class="cliente-subtitulo">Clientes</h3>
        <div class="cliente-contenedor">
        <a href="eliminar-cliente">Eliminar Cliente</a>
            <div class="listado-clientes">
                <?php foreach($this->clientes as $clien): ?>
                    <div class="cliente">
                        <p class="cliente-item">Id Cliente: <?=$clien['idcliente']?></p>
                        <p class="cliente-item">Nombre: <?=$clien['nombre']?></p>
                        <p class="cliente-item">Email: <?=$clien['email']?></p>
                        <p class="cliente-item">Telefono: <?=$clien['telefono']?></p>
                        <p class="cliente-item">direccion: <?=$clien['direccion']?></p>
                        <p class="cliente-item">Se unio : <?=$clien['fecha_alta']?></p> 
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    

<?php
    include '../html/footer.php';
?>