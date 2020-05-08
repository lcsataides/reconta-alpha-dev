<?php
  $args = array(
    'nopaging'                => false,
    'paged'                   => '1',
    'post_type'               => 'post',
    'post_status'             => 'publish',
    'meta_key'                => 'post_views_count',
    'orderby'                 => 'meta_value_num',
    'order'                   => 'DESC',
    'posts_per_page'          => 3,
    'date_query' => array(
      array(
        'after' => '1 week ago',
      ),
    ),
  );
  $maislidas = new WP_Query( $args );
  ?>


<div class="section-title">
  <h2>As mais lidas</h2>
  <hr class="reconta-divider"/>
</div>
<div class="gray-bg">
  <div class="container is-fluid">
    <?php
      if ( $maislidas->have_posts() ) {
        $i = 0;
        while ( $maislidas->have_posts() ) {
          $i++;
          $maislidas->the_post();
        ?>
        <?php get_template_part('templates/post/secondary-entry'); ?>
        <?php	}
          } else { ?>
        <?php get_template_part('templates/post/empty') ?>
    <?php }
    wp_reset_postdata();?>
  </div>
</div>