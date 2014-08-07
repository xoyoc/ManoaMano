<?php 
$the_loop = new WP_Query("category_name=promocion");
if($the_loop->have_posts()):
	while($the_loop->have_posts()):
		$the_loop->the_post();
		get_template_part("extracto-maqueta");
	endwhile;
	wp_reset_postdata();
else:
?>
<p class="error">No hay promociones por el momento</p>
<?php endif; ?>
