
<?php 
    include '../html/header.php';
?>

    <div class="hero">
        <div class="hero-overlay">
            <div class="hero-texto">
                <p class="hero-texto_parrafo">Nueva Hamburgesa <span class="hero-texto_span">Exta-burger</span></p>
            </div>
        </div>
    </div>

    <section>
        <div class="main">
            <h2 class="main-subtitulo">Conoce nuestros combos</h2>

            <div class="combos-container">

                <?php foreach($this->combos as $comb):  ?>
                    <div class="combo">
                        <img src="static/img/<?=$comb['imagen']?>" alt="imagen-combo" class="combo-imagen">
                        <h3 class="combo-titulo"><?=$comb['nombre']?></h3>
                        <p class="combo-parrafo"><?=$comb['descripcion']?></p>
                        <button class="boton combo-boton"><a href="combos">Conocé más</a></button>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

        <div class="espacio-publicitario">
            <div class="app">
                <div class="app-cuerpo">
                    <img src="static/img/3.jpg" alt="app-imagen" class="app-imagen">
                    <div class="app-texto">
                        <h3 class="app-subtitulo">Descárga nuestra App</h3>
                        <p class="app-parrafo">Descárgate nuestra app y no te pierdas nuestras novedades</p>
                    </div>
                    <button class="boton app-boton"> <a href="#">Descargar Ahora</a> </button>
                </div>
            </div>

            <div class="app-links">

                <div class="links-redes">
                    <i class="fab fa-facebook-square icono"></i>
                    <i class="fab fa-twitter-square icono"></i>
                    <i class="fab fa-instagram-square icono"></i>
                    <i class="fab fa-youtube-square icono"></i>
                </div>

                <div class="link-app">
                    <img src="static/img/disponible-1.png" alt="disponible en playstore" class="link-imagen">
                    <img src="static/img/disponible-2.png" alt="disponible en googleplay" class="link-imagen">
                </div>

            </div>

        </div>
    </section>

<?php

include '../html/footer.php';
    
?>