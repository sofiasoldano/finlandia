<?php $page_name = "desayunos" ?>
<?php include('header.php'); ?>

<div class="splash large">
    <img class="background img-responsive" src="img/splash-desayunos.png" alt="Home image">
    <div class="icon-scroll">
        <img src="img/icon-scroll.png" alt="icon" class="icon">
    </div>
</div>

<div class="slider">
    <div class="flexslider desayunos-slider">
        <ul class="slides">
            <li class="slide">
            <a href="#">
            <div class="img-container">
                <img src="img/desayuno1.png" alt="Waffles con frutos rojos" class="img-responsive">
            </div>
            </a>
          </li>
            <li class="slide">
            <a href="#">
            <div class="img-container">
                <img src="img/desayuno1.png" alt="Waffles con frutos rojos" class="img-responsive">
            </div>
            </a>
          </li>
        </ul>
    </div>
</div>
<div class="slider">
    <div class="flexslider desayunos-slider">
        <ul class="slides">
            <li class="slide">
            <a href="#">
            <div class="img-container">
                <img src="img/desayuno2.png" alt="Bagel integral" class="img-responsive">
            </div>
            </a>
          </li>
            <li class="slide">
            <a href="#">
            <div class="img-container">
                <img src="img/desayuno2.png" alt="Bagel integral" class="img-responsive">
            </div>
            </a>
          </li>
        </ul>
    </div>
</div>

<div class="slider">
    <div class="flexslider desayunos-slider">
        <ul class="slides">
            <li class="slide">
            <a href="#">
            <div class="img-container">
                <img src="img/desayuno3.png" alt="Tostadas con salmon" class="img-responsive">
            </div>
            </a>
          </li>
            <li class="slide">
            <a href="#">
            <div class="img-container">
                <img src="img/desayuno3.png" alt="Tostadas con salmon" class="img-responsive">
            </div>
            </a>
          </li>
        </ul>
    </div>
</div>  
<div class="social-banner">
    <img class="img-responsive banner-image" src="img/social-banner.png" alt="Somos lo que desayunamos">
    <p>Compartí <span class="red">nuestros desayunos</span> con tus amigos</p>
    <ul class="social-media">
        <li>
            <a href="#"><img src="img/facebook-logo.png"></a>
        </li>
        <li>
            <a href="#"><img src="img/twitter-logo.png"></a>
        </li>
        <li>
            <a href="#"><img src="img/google-logo.png"></a>
        </li>
        <li>
            <a href="#"><img src="img/pinterest-logo.png"></a>
        </li>
    </ul>
</div>

<div class="container">
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