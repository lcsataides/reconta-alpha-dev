<?php
  $args = array(
    'nopaging'               => false,
    'paged'                  => '1',
    'posts_per_page'         => '10',
    'ignore_sticky_posts'    => true,
    'tax_query'              => array(
      array(
        'taxonomy'         => 'tags',
        'terms'            => 'memepedia',
        'field'            => 'slug',
      ),
    ),
  );
  $divertequery = new WP_Query( $args );
?>

<div class="section-title">
  <div class="reconta-title">
    <h1>Reconta Diverte</h1>
    <span class="mdi mdi-emoticon-happy-outline is-large"></span>
  </div>
  <hr class="reconta-divider"/>
</div>

<div class="container">
    <?php
      if ( $divertequery->have_posts() ) {
        $i = 0;
        while ( $divertequery->have_posts() ) {
          $i++;
          $divertequery->the_post();
        ?>
        <?php get_template_part('templates/post/secondary-entry'); ?>
        <?php	}
          } else { ?>
        <?php get_template_part('templates/post/empty') ?>
    <?php }
    wp_reset_postdata();?>
  </div>