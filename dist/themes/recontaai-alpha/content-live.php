<?php
$livearray = array(
  'nopaging'               => true,
	'posts_per_page'         => '1',
	'order'                  => 'DESC',
	'orderby'                => 'date',
	'tax_query'              => array(
		'relation' => 'AND',
		array(
			'taxonomy'         => 'category',
			'terms'            => 'especiais',
			'field'            => 'slug',
		),
		array(
			'taxonomy'         => 'category',
			'terms'            => 'live',
			'field'            => 'slug',
		),
	),
);

$livequery = new WP_Query( $livearray );

?>

<?php
  if ( $livequery->have_posts() ) { ?>
  <div class="section reconta-especial">
  <?php $livequery->the_post(); ?>
    <div class="live-section">
      <?php if ( get_field('titulo_durante') ) { ?>
        <h5 class="live-subtitle">Estamos Ao Vivo!</h5>
        <h2 class="live-title"><?php the_field('titulo_durante') ?></h2>
      <?php } ?>

      <div class="live-media">
        <figure class="image is-16by9">
        <?php
          $iframe = get_field('link_do_youtube');
          preg_match('/src="(.+?)"/', $iframe, $matches);
          $src = $matches[1];

          $params = array(
              'controls'  => 0,
              'hd'        => 1,
              'autohide'  => 1
          );
          $new_src = add_query_arg($params, $src);
          $iframe = str_replace($src, $new_src, $iframe);

          $attributes = 'class="has-ratio iframe-live"';
          $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

          echo $iframe;
          ?>
        </figure>
      </div>

      <div class="live-footer columns">
        <div class="column is-4">
          <h5>Nas redes sociais</h5>
          <div class="menu-group menu-social-group">
            <?php wp_nav_menu(
            array(
              'theme_location'  => 'social',
              'container_id'    => 'menu-social',
              'container_class' => 'menu-social-content',
              'fallback_cb'     => '',
              'depth'           => 1,
            )
            ); ?>
          </div>
        </div>
        <?php if (get_field('descricao_live')) { ?>
          <div class="live-desc column">
            <p><?php the_field('descricao_live') ?></p>
          </div>
        <?php } ?>
    </div>
  </div>
<?php }
  wp_reset_postdata();  ?>
</div>