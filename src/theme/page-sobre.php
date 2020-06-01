<?php get_header(); ?>
<!-- container -->
<div class="container is-desktop">
	<!-- site-content -->
	<div class="site-content page">
    <div class="article-content">
      <?php
        if (have_posts()):
          while (have_posts()) : the_post();
            the_content();
          endwhile;
        else:
          echo '<h2>Não encontramos o conteúdo desta página</h2><br/>';
        endif;
    ?>
    </div>
	</div>
	<!-- /site-content -->
</div>
<!-- /container -->
<?php get_footer(); ?>