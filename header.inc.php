<header>
	<?php if (in_array(basename($_SERVER['PHP_SELF']), [ 'producto.php', 'receta.php' ])): ?>
		<img src="img/logo-white.png" width="133" alt="Logo Finlandia" class="logo-default">
	<?php else: ?>
		<img src="img/logo-blue.png" width="133" alt="Logo Finlandia" class="logo-default">
	<?php endif ?>
	<img src="img/logo-finlandia.png" width="133" alt="Logo Finlandia" class="logo-active hidden">
	<div class="menu-icon">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</div>
</header>
