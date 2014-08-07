<?php 
get_header(); 
if(have_posts()):
	while(have_posts()):
		the_post();
		get_template_part("extracto-maqueta");
	endwhile;
	wp_reset_query();
else:
?>
	<p class="error">No hay informacion solicitada</p>
<?php 
endif;
get_footer();
?>