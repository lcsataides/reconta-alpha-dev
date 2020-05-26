<?php
  $args = array(
    'nopaging'               => false,
    'paged'                  => '1',
    'posts_per_page'         => '5',
    'ignore_sticky_posts'    => true,
    'order'                  => 'DESC',
    'orderby'                => 'date',
  );
  $recentposts = new WP_Query( $args );
  ?>

  <div class="section-title">
    <h1>Últimas notícias</h1>
    <hr class="reconta-divider"/>
  </div>

  <div class="container">
    <?php
      if ( $recentposts->have_posts() ) {
        $i = 0;
        while ( $recentposts->have_posts() ) {
          $i++;
          $recentposts->the_post();
        ?>
          <?php if( $i == 1 ) { ?>
            <?php get_template_part('templates/post/primary-entry') ?>
          <?php } elseif ( $i == 2 ) {?>
            <div class="columns">
              <div class="column is-two-thirds">
                <?php get_template_part('templates/post/secondary-entry') ?>
              </div>
              <div class="column">
          <?php } else { ?>
              <?php get_template_part('templates/post/entry') ?>
          <?php }; ?>
        <?php	}
        } else { ?>
        <h2>Sinto muito, não encontramos nenhum post nessa categoria!</h2>
    <?php }
    wp_reset_postdata();?>
  </div>
  </div>