<footer class="footer">
  <div class="container">
    <div class="columns">
      <div class="footer-brand column">
        <?php the_custom_logo(); ?>
      </div>
      <div class="column">
        <div class="footer-nav-menu">
          <h4>Reconta</h4>
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
      </div>
      <div class="column">
        <div class="footer-nav-menu">
          <h4>Continue navegando</h4>
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
      </div>
      <div class="column">
        <h4>Acompanhe o Reconta Aí também por e-mail</h4>
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
