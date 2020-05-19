<?php if ( has_post_thumbnail() ) {
  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
  }
?>

<div class="news-entry-main">
  <a class="news-img" href="<?php echo get_permalink()?>">
    <figure class="image is-16by9">
      <img class="img" src="<?php echo esc_url( $large_image_url[0] ); ?>"/>
    </figure>
  </a>
  <div class="news-content">
    <a class="news-title" href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
    <div class="news-meta small-txt">
      <?php recontaaialpha_posted_on(); ?>
    </div>
    <div class="news-excerpt"><?php the_excerpt(); ?></div>
    <div class="meta-group">
      <div class="category-group"><?php the_category(); ?></div>
      <?php recontaai_include_tag('share') ?>
    </div>
  </div>
</div>