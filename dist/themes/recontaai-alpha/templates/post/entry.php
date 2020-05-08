<div class="news-entry-default">
  <a class="news-content" href="<?php echo get_permalink()?>">
    <h4 class="news-title"><?php the_title(); ?></h4>
  </a>
  <div class="external-group">
      <div class="category-group is-size-7"><?php the_category(); ?></div>
      <?php recontaai_include_tag('share') ?>
    </div>
</div>