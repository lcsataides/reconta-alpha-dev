<?php if ( has_post_thumbnail() ) {
  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
  }
?>

<div class="news-entry-primary is-full columns" data-aos="fade-up">
  <a class="news-img column is-half" href="<?php echo get_permalink()?>">
    <figure class="image is-16by9">
      <img class="img" src="<?php echo esc_url( $large_image_url[0] ); ?>"/>
    </figure>
  </a>
  <div class="news-content column is-half is-stretch">
    <a class="news-title" href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <div class="news-meta small-txt">
      <?php recontaaialpha_posted_on(); ?>
    </div>
    <div class="news-excerpt"><?php the_excerpt('<p>', '</p>' ); ?></div>
    <div class="meta-group">
      <div class="category-group is-size-6"><?php the_category(); ?></div>
      <?php recontaai_include_tag('share') ?>
    </div>
  </div>
</div>