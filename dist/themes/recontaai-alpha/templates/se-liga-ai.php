<?php
  $args = array(
    'nopaging'               => false,
    'paged'                  => '1',
    'posts_per_page'         => '3',
    'ignore_sticky_posts'    => true,
    'tax_query'              => array(
      array(
        'taxonomy'         => 'category',
        'terms'            => 'se-liga-ai',
        'field'            => 'slug',
      ),
    ),
  );
  $seligaai = new WP_Query( $args ); ?>

<div class="section-title">
  <h1>Se Liga Aí</h1>
  <hr class="reconta-divider"/>
</div>

<div class="container">
  <?php
    if ( $seligaai->have_posts() ) {
      $i = 0;
      while ( $seligaai->have_posts() ) {
        $i++;
        $seligaai->the_post();
      ?>
        <?php if( $i == 1 ) { ?>
          <div class="columns">
          <?php get_template_part('templates/post/primary-entry') ?>
          <div class="column is-one-third">
        <?php } else {?>
          <?php get_template_part('templates/post/entry') ?>
        <?php }; ?>
      <?php	}
      } else { ?>
      <?php get_template_part('templates/post/empty') ?>
  <?php }
  wp_reset_postdata();?>
</div>