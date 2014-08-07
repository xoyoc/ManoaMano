<?php 
	get_header();
	the_post();
 ?>
 <article class="entrada">
 	<h1 class="post-titulo"><?php the_title() ?></h1>
 	<div class="post-contenido"><?php the_content(); ?></div>
 </article>
 <?php get_footer(); ?>