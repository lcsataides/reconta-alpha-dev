<?php get_header(); ?>
<!-- container -->
<div class="container">
	<!-- site-content -->
	<div class="search-content">
		<article class="page">
        <section class="category-head">
          <h4>Estas são as notícias que encontramos para:</h4>
          <h1 class="section-category"><?php echo get_search_query(); ?></h1>
          <hr class="reconta-divider"/>
        </section>
			<!-- main-column -->
			<div class="inner <?php if ( ! is_search_has_results() ) { echo 'no-result'; }?>">
				<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part('templates/post/secondary-entry');
						endwhile;
					else :
						get_template_part( 'content', 'none' );
					endif;
				?>
			</div>
			<!-- /main-column -->
			<div class="pagination side">
				<?php echo paginate_links(); ?>
			</div>
		</div>
	</div>
	<!-- /site-content -->
</div>
<!-- /container -->
<?php get_footer(); ?>
