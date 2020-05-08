<footer class="footer">
  <div class="container">
    <div class="columns">
      <div class="footer-brand column">
        <?php the_custom_logo(); ?>
      </div>
      <div class="footer-inner column">
        <section class="footer-nav columns">
          <div class="footer-nav-menu column">
            <h3>Reconta</h3>
            <?php wp_nav_menu(
            array(
              'theme_location'  => 'standard',
              'container_id'    => 'menu-padrao',
              'container_class' => 'menu-group',
              'fallback_cb'     => '',
              'depth'           => 1,
              )
            ); ?>
          </div>
          <div class="footer-nav-menu column">
            <h3>Continue navegando</h3>
            <?php wp_nav_menu(
              array(
                'theme_location'  => 'categories',
                'container_id'    => 'menu-categorias',
                'container_class' => 'menu-group',
                'fallback_cb'     => '',
                'depth'           => 1,
                )
              ); ?>
          </div>
        </section> <!-- end footernav -->
      </div> <!-- footer-inner -->
      <div class="column">
        <?php recontaai_include_tag('subscribe') ?>
        <div class="footer-section">
          <?php wp_nav_menu(
          array(
            'theme_location'  => 'social',
            'container_id'    => 'menu-social',
            'container_class' => 'menu-social-group',
            'fallback_cb'     => '',
            'depth'           => 1,
          )
          ); ?>
        </div> <!-- footer-section -->
      </div> <!-- column -->
    </div> <!-- columns -->
  </div> <!-- container -->
</footer>
<div class="footer-copyrights">
  <h6>Reconta Aí, <?php echo date( 'Y' ); ?> &copy; Todos os direitos reservados.</h6>
</div>
</body>
<?php wp_footer(); ?>
</html>
