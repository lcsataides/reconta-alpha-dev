<article class="single-content">

  <header class="article-head">
    <div class="article-breadcrumb is-size-6"><?php the_breadcrumb(); ?></php></div>
    <h1 class="article-title"><?php the_title(); ?></h1>
    <div class="article-meta">
      <div class="category-group is-size-6"><?php the_category(); ?></div>
      <div class="news-meta"><?php recontaaialpha_posted_on(); ?></div>
  </div>
  </header>

  <div class="article-media">
    <figure class="image is-16by9">
      <?php the_post_thumbnail(); ?>
    </figure>
  </div>


<div class="article-content columns">
    <div class="article-inner column">
      <?php the_content(); ?>
    </div>

    <aside class="column is-fixed is-narrow">
      <div class="share-tag is-desktop">
        <?php recontaai_include_tag('share-in') ?>
      <div>
    </aside>

  </div> <!-- end article-inner-content -->
</article>

