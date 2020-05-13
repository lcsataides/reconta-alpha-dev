<article class="single-content">

  <figure class="image is-16by9">
    <?php the_post_thumbnail(); ?>
  </figure>

  <header class="article-head">
    <div class="article-breadcrumb is-size-6"><?php the_breadcrumb(); ?></php></div>
    <h1 class="article-title"><?php the_title(); ?></h1>
    <div class="article-categories">
      <div class="category-group is-size-6"><?php the_category(); ?></div>
    </div>
  </header>



<div class="article-content columns">

    <div class="column is-narrow">
      <div class="news-meta small-txt"><?php recontaaialpha_posted_on(); ?></div>
    </div>

    <div class="article-inner column is-6">
      <?php the_content(); ?>
    </div>

    <aside class="column level-right">
      <div class="share-tag is-desktop">
        <?php recontaai_include_tag('share') ?>
      <div>
    </aside>

  </div> <!-- end article-inner-content -->
</article>
