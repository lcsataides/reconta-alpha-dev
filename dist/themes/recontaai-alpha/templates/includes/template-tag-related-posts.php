<?php
  $orig_post = $post;
  global $post;
  $tags = wp_get_post_tags($post->ID);

  if ($tags) {
    $tag_ids = array();
    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

    $args=array(
    'tag__in' => $tag_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=>4,
    'ignore_sticky_posts'=>1
  );

  $my_query = new wp_query( $args );
  $i = 0;
    if( $my_query->have_posts() ) { ?>
    <div class="container">
      <div class="section-title">
        <h3 class="related-title">Notícias relacionadas</h3>
        <hr class="reconta-divider"></hr>
      </div>

      <div class="related-box">
        <ul class="related-list columns">
    <?php
    while( $my_query->have_posts() ) {
      $my_query->the_post(); ?>
    <li class="related-item col">
      <?php get_template_part('templates/post/tertiary-entry'); ?>
    </li>

  <?php }
    echo '</ul></div></div>';
    }
  }
  $post = $orig_post;
wp_reset_query(); ?>