<?php if ( has_post_thumbnail() ) {
  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
  }
?>

<div class="news-entry-primary is-full columns" data-aos="fade-up">
  <a class="news-img column is-half" href="<?php echo get_permalink()?>">
    <figure class="image is-16by9">
      <?php if (get_field('url_home')) {
        $iframe = get_field('url_home');
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
      } else { ?>
        <img class="img" src="<?php echo esc_url( $large_image_url[0] ); ?>"/>
      <?php } ?>
    </figure>
  </a>
  <div class="news-content column is-half is-stretch">
    <a class="news-title" href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <div class="news-meta small-txt">
      <?php recontaaialpha_posted_on(); ?>
    </div>
    <div class="news-excerpt"><?php the_excerpt('<p>', '</p>' ); ?></div>
    <div class="meta-group">
      <div class="category-group"><?php the_category(); ?></div>
      <?php recontaai_include_tag('share') ?>
    </div>
  </div>
</div>