<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Finlandia</title>
    <link href="css/above.css" rel="stylesheet">
    </head>

    <body class="<?php echo $page_name; ?>">
        <header>
            <?php if ($page_name=="home"){ ?>
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
        