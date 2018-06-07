<?php $page_name = "receta" ?>
<?php include('header.php'); ?>

<div class="splash filter">
    <img class="background img-responsive" src="img/splash-productos.png" alt="Product image">
    <h1 class="main-title"><span>Bruschetas <br> Finlandia</span> libres de gluten</h1>
</div>


<div class="container">
    <div class="white-box">
        <div class="top-absolute">
            <div class="product">
                <img src="img/finlandia-clasico.png" alt="Pote Finlandia" width="92">
            </div>
            <ul class="items">
                <li class="unid">
                    24 unid.
                </li>
                <li class="dif">
                    Fácil
                </li>
                <li class="time">
                    30 min.
                </li>
            </ul>
        </div>
        <h3 class="section-title">Ingredientes</h3>
        <ul>
            <li>24 unidades de masa empanaditas de copetín</li>
            <li>1 cebolla mediana picada</li>
            <li>25 g de Manteca La Serenísima</li>
            <li>1 cucharadita de azúcar</li>
            <li>1/4 de cucharadita de sal</li>
            <li>150 g de Queso Finlandia Salmón Light</li>
            <li>50 g de Queserísimos Hebras 4 Quesos. </li>
        </ul>
    </div>

<?php require 'fold.inc.php' ?>

    <div class="steps">
        <div class="step">
            <h3 class="section-title">Paso 1</h3>
            <img src="img/step1.png" alt="Paso 1" class="img-responsive">
            <p>Cortar el pan Libre de Gluten en rodajas de 1 cm. de espesor. Poner sobre una placa para horno. Espolvorear con sal, pimienta y tomillo fresco (opcional).</p>
        </div>
        <div class="step">
            <h3 class="section-title">Paso 2</h3>
            <img src="img/step2.png" alt="Paso 2" class="img-responsive">
            <p>Rociar apenas con aceite de oliva. Tostar en horno medio hasta que estén crocantes. Enfriar.</p>
        </div>
        <div class="step">
            <h3 class="section-title">Paso 3</h3>
            <img src="img/step3.png" alt="Paso 3" class="img-responsive">
            <p>Servir cada rodaja de pan con una cucharadita de <span class="red">Finlandia Clásico La Serenísima</span>, un gajo de tomate cherry y una ramita de tomillo.</p>
        </div>
        <div class="step final">
            <h3 class="section-title">Fin de la receta</h3>
        </div>
    </div>
</div>

<div class="social-banner">
    <p>Compartí la receta con tus amigos</p>
    <ul class="social-media">
        <li>
            <a href="#"><img src="img/facebook-logo.png" alt="Faceboof logo"></a>
        </li>
        <li>
            <a href="#"><img src="img/twitter-logo.png" alt="Twitter logo"></a>
        </li>
        <li>
            <a href="#"><img src="img/google-logo.png" alt="Google+ logo"></a>
        </li>
        <li>
            <a href="#"><img src="img/pinterest-logo.png" alt="Pinterest logo"></a>
        </li>
    </ul>
</div>

<div class="container">
    <?php include('form-suscription.php'); ?>

    <div class="slider">
        <h2 class="title">Descubrí otras <span>recetas</span></h2>
        <div class="flexslider recetas-slider">
            <ul class="slides">
              <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas1.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom clasico">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom clasico">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom clasico">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom clasico">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
            </ul>
        </div>
        <a href="#" class="green-btn">Ver todas las recetas</a>
    </div>
</div>

<?php include('menu.php'); ?>
<?php include('footer.php'); ?>