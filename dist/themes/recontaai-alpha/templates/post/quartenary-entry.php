<?php if ( has_post_thumbnail() ) {
  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
  }
?>

<div class="news-entry-teritary columns">
  <a class="news-img column is-one-third" href="<?php echo get_permalink()?>">
    <img class="img" src="<?php echo esc_url( $large_image_url[0] ); ?>"/>
  </a>
  <div class="news-content column">
    <a class="news-title" href="<?php echo get_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
    <div class="news-meta small-txt">
      <?php recontaaialpha_posted_on(); ?>
    </div>
    <div class="meta-group">
        <div class="category-group"><?php the_category(); ?></div>
        <?php recontaai_include_tag('share') ?>
      </div>
  </div>
</div>