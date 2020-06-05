<?php get_header(); ?>
<!-- container -->
<?php
  $capa_tax = array(
    array(
      'taxonomy'         => 'category',
      'terms'            => 'especiais',
      'field'            => 'slug',
    ),
  );
  $capaquery = new WP_Query( $capa_tax );

  $post_capa = get_posts( array(
    'meta_query' => array(
        array(
            'key'   => 'post_capa',
            'value' => '1',
        )
    )
  ) );

  if ( ($capaquery->have_posts()) && ($post_capa) ) :
    get_template_part('content', 'live');
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
