<?php get_header(); ?>
<!-- container -->
<div class="container is-desktop">
	<!-- site-content -->
	<div class="site-content page">
    <h1>Página de Sobre</h1>
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'content', 'page' );
			endwhile;
			else :
				get_template_part( 'content', 'none' );
			endif;
			?>
	</div>
	<!-- /site-content -->
</div>
<!-- /container -->
<?php get_footer(); ?>