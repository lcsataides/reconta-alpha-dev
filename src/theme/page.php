<?php get_header(); ?>
<!-- container -->
<?php
$capa_tax = array(
	array(
		'taxonomy'         => 'category',
		'terms'            => 'capa',
		'field'            => 'slug',
	),
);
$capaquery = new WP_Query( $capa_tax );
?>

<?php if ( $capaquery->have_posts() ) :
    get_template_part('content', 'especiais'); ?>
  <?php else: ?>
  <h1>caso contrário</h1>
<?php
  endif;
?>

<div class="container is-desktop">
	<!-- site-content -->
	<div class="site-content page">
		<?php
		if ( have_posts() ) :
				get_template_part( 'content', 'page' );
			else :
				get_template_part( 'content', 'none' );
			endif;
			?>
	</div>
	<!-- /site-content -->
</div>
<!-- /container -->
<?php get_footer(); ?>
