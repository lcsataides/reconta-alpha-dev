<?php
  $args = array(
    'nopaging'               => false,
    'paged'                  => '1',
    'posts_per_page'         => '5',
    'ignore_sticky_posts'    => true,
    'tax_query'              => array(
      array(
        'taxonomy'         => 'category',
        'terms'            => 'atualiza-ai',
        'field'            => 'slug',
      ),
    ),
  );
  $atualizaai = new WP_Query( $args );
?>

<div class="section-title">
  <h1>Atualiza Aí</h1>
  <hr class="reconta-divider"/>
</div>

<div class="container">
  <div class="columns">
    <?php
      if ( $atualizaai->have_posts() ) {
        $i = 0;
        while ( $atualizaai->have_posts() ) {
          $i++;
          $atualizaai->the_post();
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
  </div>