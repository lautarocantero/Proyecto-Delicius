<!--/html/ListadoEmpleados.php-->
<?php 
    include '../html/header.php';
?>

    <div class="empleados-hero">
    <h2 class="subtitulo-empleado">Nosotros</h2>
        <div class="empleados">
            <a href="eliminar-empleado">Eliminar Empleado</a>
            <h4 class="staf">Conoce el Staf</h4>
            <div class="lista-empleados">
                <?php foreach($this->empleados as $emp): ?>
                    <div class="empleado">
                        <?php  if(isset($_SESSION['empleado'])): ?>
                            <p class="empleado-item">Id Empleado: <?=$emp['idempleados']?></p>  <!--el id solo lo veran los empleados-->
                        <?php endif; ?>
                        <p class="empleado-item">Nombre: <?=$emp['nombre']?></p>
                        <p class="empleado-item">Apellido: <?=$emp['apellido']?></p>
                        <p class="empleado-item">Email: <?=$emp['email']?></p>
                        <p class="empleado-item">Telefono: <?=$emp['telefono']?> </p>
                        <p class="empleado-item">DNI: <?=$emp['dni']?> </p>
                        <p class="empleado-item">Fecha de alta: <?=$emp['fecha_alta']?></p>
                        <p class="empleado-item">Salario: <?=$emp['salario']?>$</p>
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>

    

<?php
    include '../html/footer.php';
?>