<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="google-site-verification" content="4dLoau2l41mmQesJVnXOxub8XlwZ2Y0jvGQRLPUYEqg" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168202632-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-168202632-1');
  </script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="header" class="container header">
  <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
    <a role="button" class="navbar-noticias" aria-label="menu" aria-expanded="false" data-target="navbarNavDropdown">
        <span class="reconta-alpha menureconta-icon"></span>
        <div class="menu-written is-hidden-mobile">
          <span class="noticias-menu">Menu</span>
          <span class="mdi mdi-chevron-down mdi-18px"></span>
        </div>
    </a>

    <div id='navbarNavDropdown' class="navbar-menu menu-suspenso">
      <div class="menu-suspenso-header">
        <?php the_custom_logo(); ?>
        <a role="button" aria-label="menu" class="close-menu "aria-expanded="true" data-target="navbarNavDropdown"><span class="mdi mdi-close"></span></a>
      </div>
      <div class="menu-suspenso-content">
      <div class="menu-group">
        <div class="menu-section">
            <h3>Navegue pelas Notícias</h3>
            <hr class="reconta-divider"/>
          </div>
          <?php wp_nav_menu(
            array(
              'theme_location'  => 'categories',
              'container_id'    => 'menu-categorias',
              'container_class' => 'menu-content',
              'fallback_cb'     => '',
              'depth'           => 1,
            )
          ); ?>
        </div>

        <div class="menu-group">
          <div class="menu-section">
            <h3>Reconta Tudo</h3>
            <hr class="reconta-divider"/>
          </div>
          <?php wp_nav_menu(
            array(
              'theme_location'  => 'standard',
              'container_id'    => 'menu-padrao',
              'container_class' => 'menu-content',
              'fallback_cb'     => '',
              'depth'           => 1,
            )
          ); ?>
        </div>

        <div class="menu-group menu-social-group">
          <div class="menu-section">
            <h3>Siga-nos</h3>
            <hr class="reconta-divider"/>
          </div>
          <?php wp_nav_menu(
            array(
              'theme_location'  => 'social',
              'container_id'    => 'menu-social',
              'container_class' => 'menu-social-content',
              'fallback_cb'     => '',
              'depth'           => 1,
            )
          ); ?>
        </div>
      </div>
    </div>

    <div class="navbar-brand">
    <?php if ( ! has_custom_logo() ) { ?>
      <?php if ( is_front_page() && is_home() ) : ?>
        <h1 class="navbar-brand">
          <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
              title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
              itemprop="url">
              <?php bloginfo( 'name' ); ?>
            </a>
        </h1>
      <?php else : ?>
        <a  class="navbar-brand"
            rel="home"
            href="<?php echo esc_url( home_url( '/' ) ); ?>"
            title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
          <?php bloginfo( 'name' ); ?>
        </a>
      <?php endif; ?>
      <?php } else {
          the_custom_logo();
        } ?>
      </div>
    <!-- end custom logo -->

    <div class="search-container">
      <a role="button" class="navbar-search" aria-label="menu" aria-expanded="false" data-target="toggleSearch">
          <span class="mdi mdi-magnify mdi-24px"></span>
      </a>
    </div>
  </nav>
</header>
<div id="toggleSearch" class="search-form">
  <?php get_search_form(); ?>
</div>
