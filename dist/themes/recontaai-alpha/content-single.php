<article class="single-content container">
  <header class="article-head">
    <h1 class="single-title"><?php the_title(); ?></h1>
    <?php if (is_single()) : ?>
      <div class="news-meta small-txt">
        <?php recontaaialpha_posted_on(); ?>
      </div>
      <?php endif;
      ?>
  </header>

  <div class="article-content">
    <figure class="image is-16by9">
      <?php the_post_thumbnail(); ?>
    </figure>
    <div class="external-group">
      <div class="category-group is-size-7"><?php the_category(); ?></div>
      <?php recontaai_include_tag('share') ?>
    </div>

    <div class="post-inner-content">
      <div class="columns">
        <div class="column">
          <?php the_content(); ?>
        </div>
        <aside class="column level-right">
          <div class="share-tag is-desktop">
            <?php recontaai_include_tag('share') ?>
          <div>
        </aside>
    </div> <!-- end columns -->
  </div>
</article>
