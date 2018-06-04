<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finlandia</title>

    <!-- Style -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link href="css/vendors/flexslider.css" rel="stylesheet">
        
    <link href="css/above.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    
        
    </head>

    <body class="<?php echo $page_name; ?>">
        <header>
            <?php if ($page_name=="home" || ($page_name=="desayunos")){ ?>
            <img src="img/logo-blue.png" width="133" alt="Logo Finlandia" class="logo-default">
            <?php } else { ?>
            <img src="img/logo-white.png" width="133" alt="Logo Finlandia" class="logo-default">
            <?php }; ?>
            <img src="img/logo-finlandia.png" width="133" alt="Logo Finlandia" class="logo-active hidden">
            <div class="menu-icon">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </header>
        
        <div class="menu">
            <div class="content">
                <ul id="menu-productos" class="inner-content">
                    <li class="salmon">
                        <a href="#">
                        <img src="img/producto2.png" width="110" alt="Finlandia light salmon" class="producto">
                        <div class="title-productos large">Finlandia light salmon</div>
                        </a>
                    </li>
                    <li class="balance">
                        <a href="#">
                        <img src="img/producto3.png" width="110" alt="Finlandia Light Balance" class="producto">
                        <div class="title-productos large">Finlandia light balance</div>
                        </a>
                    </li>
                    <li class="light">
                        <a href="#">
                        <img src="img/producto4.png" width="110" alt="Finlandia Light" class="producto">
                        <div class="title-productos">Finlandia light</div>
                        </a>
                    </li>
                    <li class="salmon">
                        <a href="#">
                        <img src="img/producto5.png" width="110" alt="Finlandia Cheddar Salmon" class="producto">
                        <div class="title-productos large">Finlandia cheddar salmon</div>
                        </a>
                    </li>
                    <li class="clasico">
                        <a href="#">
                        <img src="img/producto1.png" width="110" alt="Finlandia Clasico" class="producto">
                        <div class="title-productos">Finlandia clasico</div>
                        </a>
                    </li>
                    <li class="gruyere">
                        <a href="#">
                        <img src="img/producto6.png" width="110" alt="Finlandia gruyere" class="producto">
                        <div class="title-productos">Finlandia light guryere</div>
                        </a>
                    </li>
                    <li class="salmon">
                        <a href="#">
                        <img src="img/producto2.png" width="110" alt="Finlandia light salmon" class="producto">
                        <div class="title-productos large">Finlandia light salmon</div>
                        </a>
                    </li>
                    <li class="balance">
                        <a href="#">
                        <img src="img/producto3.png" width="110" alt="Finlandia Light Balance" class="producto">
                        <div class="title-productos large">Finlandia light balance</div>
                        </a>
                    </li>
                    <li class="light">
                        <a href="#">
                        <img src="img/producto4.png" width="110" alt="Finlandia Light" class="producto">
                        <div class="title-productos">Finlandia light</div>
                        </a>
                    </li>
                    <li class="salmon">
                        <a href="#">
                        <img src="img/producto5.png" width="110" alt="Finlandia Cheddar Salmon" class="producto">
                        <div class="title-productos large">Finlandia cheddar salmon</div>
                        </a>
                    </li>
                    <li class="clasico">
                        <a href="#">
                        <img src="img/producto1.png" width="110" alt="Finlandia Clasico" class="producto">
                        <div class="title-productos">Finlandia clasico</div>
                        </a>
                    </li>
                    <li class="gruyere">
                        <a href="#">
                        <img src="img/producto6.png" width="110" alt="Finlandia gruyere" class="producto">
                        <div class="title-productos">Finlandia light guryere</div>
                        </a>
                    </li>
                </ul>
                
                <ul id="menu-recetas" class="inner-content hidden">
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                </ul>
                
                <ul id="menu-desayunos" class="inner-content hidden">
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/receta1.png" class="img-responsive background">
                            <div class="menu-title">Finlandia salmon</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="submenu">
                <ul>
                    <li onclick="submenu('#menu-productos', 1);">
                        <img src="img/icon-productos.png" alt="Productos" class="default" >
                        <img src="img/icon-productos-active.png" alt="Productos" class="active" >
                        <div>Productos</div>
                    </li>
                    <li onclick="submenu('#menu-recetas', 2);" class="active">
                        <img src="img/icon-recetas.png" alt="Recetas" class="default">
                        <img src="img/icon-recetas-active.png" alt="Recetas" class="active">
                        <div>Recetas</div>
                    </li>
                    <li onclick="submenu('#menu-desayunos', 3);">
                        <img src="img/icon-desayunos.png" alt="Desayunos" class="default">
                        <img src="img/icon-desayunos-active.png" alt="Desayunos" class="active">
                        <div>Desayunos</div>
                    </li>
                </ul>
            </div>
        </div>