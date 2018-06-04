<?php $page_name = "home" ?>
<?php include('header.php'); ?>

<div class="splash large">
    <img class="background img-responsive" src="img/splash-home.png" alt="Home image">
    <div class="icon-scroll">
        <img src="img/icon-scroll.png" alt="icon" class="icon">
    </div>
</div>

<div class="container">
    <div class="slider">
        <h2 class="title">Descubrí <span>nuestras recetas</span></h2>
        <div class="flexslider recetas-slider">
            <ul class="slides">
              <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas1.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
            </ul>
        </div>
        <a href="#" class="green-btn">Ver todas las recetas</a>
    </div>

    <div class="banner">
        <a href="#"><img src="img/banner-desayuna.png" class="img-responsive" alt="Desayuná con Finlandia"></a>
    </div>

    <div class="slider">
        <h2 class="title">Recetas <span>populares</span></h2>
        <div class="flexslider recetas-slider">
            <ul class="slides">
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom">
                        <p>Croquetas de papa</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas1.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/recetas2.png" alt="Finlandia salmon" class="img-responsive">
                    <div class="bottom">
                        <p>Finlandia salmon</p>
                    </div>
                </div>
                </a>
              </li>
            </ul>
        </div>
        <a href="#" class="green-btn">Ver todas las recetas</a>
    </div>

    <div class="slider">
        <h2 class="title">Nuestros <span>productos</span></h2>
        <div class="flexslider productos-slider">
            <ul class="slides">
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/productos1.png" alt="Finlandia light" class="img-responsive">
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/productos1.png" alt="Finlandia light" class="img-responsive">
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/productos1.png" alt="Finlandia light" class="img-responsive">
                </div>
                </a>
              </li>
                <li class="slide">
                <a href="#">
                <div class="img-container">
                    <img src="img/productos1.png" alt="Finlandia light" class="img-responsive">
                </div>
                </a>
              </li>
            </ul>
        </div>
    </div>

    <div class="mailer">
        <p class="desc">Si te interesa saber cuándo hay nuevas recetas, podés dejarnos aquí tu email y te avisaremos:</p>
        <form>
            <input type="email" placeholder="Email">
            <button type="submit" class="green-btn"> Subscribirse </button>
            <button class="green-btn facebook">Subscribirse con facebook</button>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>
