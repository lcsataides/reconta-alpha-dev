<section class="no-results">
	<h1 class="page-title"><?php _e( 'Não encontramos nada para recontar', 'wordpressify' ); ?></h1>
	<div class="inner-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( __( 'Pronto para publicar um post? <a href="%1$s">Comece por aqui</a>.', 'wordpressify' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p><?php _e( 'Opsies! Não encontramos nada com os termos procurados. Que tal tentar novamente a pesquisa com outros parâmetros?', 'wordpressify' ); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php _e( 'Não fomos capazs de encontrar o que você estava procurando. Que tal tentar novamente?', 'wordpressify' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
</section>
</div>
