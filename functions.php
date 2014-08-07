<?php
	add_theme_support("post-thumbnails");
	$menus = array(
		"menu_principal"=>"Menú Principal",
		"menu_social"=>"Menú Social"
	);
	register_nav_menus($menus);
/*	function extracto_mas()
	{
		$enlace = "<a href='".get_permalink()."'><b> leer más...</b></a>";
		return $enlace;
	}
	add_filter("excerpt_more","extracto_mas");*/
?>