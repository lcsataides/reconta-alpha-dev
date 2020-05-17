<div class="news-entry-default">
  <a class="news-content" href="<?php echo get_permalink()?>">
    <h4 class="news-title"><?php the_title(); ?></h4>
  </a>
  <div class="meta-group">
      <div class="category-group"><?php the_category(); ?></div>
      <?php recontaai_include_tag('share') ?>
    </div>
</div>