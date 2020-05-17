<?php get_header(); ?>

<!-- container -->
<div class="container">
	<!-- site-content -->
	<div class="categories-content">
		<article class="page">
			<?php if ( have_posts() ) : ?>
			<?php
			if ( is_category() ) { ?>
        <section class="category-head">
          <h4>Visualizando as últimas notícias da categoria:</h4>
          <h1 class="section-category"><?php single_Cat_title(); ?></h1>
          <hr class="reconta-divider"/>
        </section>
        <?php
			} elseif ( is_tag() ) {
          single_tag_title();
			} elseif ( is_author() ) {
				the_post();
				echo 'Notícias do autor: ' . get_the_author();
				rewind_posts();
			} else {
				echo 'Arquivos do:';
			}
				?>

			<!-- main-column -->
			<div class="inner <?php if ( ! is_search_has_results() ) { echo 'no-result'; }?>">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part('templates/post/secondary-entry');
					endwhile;
				else : get_template_part( 'content', 'none' ); endif;
				?>
			</div>
			<!-- /main-column -->

			<div class="pagination side">
				<?php echo paginate_links(); ?>
			</div>
		</article>
	</div>
	<!-- /site-content -->
</div>
<!-- /container -->
<?php get_footer(); ?>
