<!doctype html>
<html lang="es">
	<head>
		  <meta charset="UTF-8" />
		  <title><?php bloginfo("name"); ?></title>
		  <meta name="description" content="<?php bloginfo("description"); ?>" />
		  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
		  <!-- Iconos en el nevegador -->
		  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo("template_url"); ?>/manoa.ico" />
		  <link rel="apple-touch-icon" type="apple-touch-icon" href="<?php bloginfo("template_url"); ?>/apple-touch-manoa.png" />
		  <link rel="author" type="text/plain" href="humans.txt" />
		  <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/normalize.css" />
		  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" />
		  <?php wp_head(); ?>
	</head>
	<body>
		<input type="checkbox" id="panel-boton" />
		<label id="panel-etiqueta" for="panel-boton" class="transicion"></label>
		<header class="transicion">
    		<h1 id="logo">
    			<a href="<?php bloginfo("home"); ?>">
    				<img src="<?php bloginfo("template_url"); ?>/img/manoa.png" alt="Mano a Mano">
    			</a>
    		</h1>
		</header>
	<section id="panel" class="transicion">
		<?php
			$atributos_menu = array(
				"theme_location" => "menu_principal",
				"container" => "nav",
				"container_id" => "menu-principal",
				"container_class" => "menu"
			);
			wp_nav_menu($atributos_menu);
			get_sidebar();
		?>
	</section>
	<section id="contenido" class="tamanio-caja transicion">