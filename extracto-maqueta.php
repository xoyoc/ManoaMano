<article class="entrada">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_post_thumbnail("thumbnail"); ?>
	<div class="extracto">
		<p><?php the_excerpt(); ?></p>
	</div>
</article>
<hr class="separador" />