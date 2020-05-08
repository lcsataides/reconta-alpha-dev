<?php
  $args = array(
    'nopaging'               => false,
    'paged'                  => '1',
    'posts_per_page'         => '5',
    'ignore_sticky_posts'    => true,
    'tax_query'              => array(
      array(
        'taxonomy'         => 'category',
        'terms'            => 'ouca-ai',
        'field'            => 'slug',
      ),
    ),
  );
  $oucaaiquery = new WP_Query( $args );
?>


<div class="section-title">
  <div class="reconta-title">
    <h1>Ouça Aí</h1>
    <span class="mdi mdi-podcast"></span>
  </div>
  <hr class="reconta-divider"/>
</div>

<div class="container">
  <div class="columns">
    <?php
      if ( $oucaaiquery->have_posts() ) {
        $i = 0;
        while ( $oucaaiquery->have_posts() ) {
          $i++;
          $oucaaiquery->the_post();
        ?>
          <?php if( $i == 1 ) { ?>
            <div class="column">
              <?php get_template_part('templates/post/main-entry') ?>
            </div>
          <?php } elseif ( $i == 2 ) {?>
            <div class="column">
              <?php get_template_part('templates/post/main-entry') ?>
            </div>
            <div class ="column">
          <?php } else { ?>
              <?php get_template_part('templates/post/entry') ?>
          <?php }; ?>
        <?php	}
        } else { ?>
        <?php get_template_part('templates/post/empty') ?>
    <?php }
    wp_reset_postdata();?>
    </div>
  </div>