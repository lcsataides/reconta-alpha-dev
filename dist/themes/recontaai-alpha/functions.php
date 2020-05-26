<?php
function recontaalpha_resources() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'header_js', get_template_directory_uri() . '/js/header-bundle.js', null, 1.0, false );
	wp_enqueue_script( 'footer_js', get_template_directory_uri() . '/js/footer-bundle.js', null, 1.0, true );
}

add_action( 'wp_enqueue_scripts', 'recontaalpha_resources' );

// Customize excerpt word count length
function custom_excerpt( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt', 999 );

function excerpt_more( $more ) {
  if ( ! is_single() ) {
      $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
          get_permalink( get_the_ID() ),
          __( 'Conta Mais', 'textdomain' )
      );
  }
  return $more;
}
add_filter( 'excerpt_more', 'excerpt_more' );

/**
 * Add HTML5 theme support.
 */
function theme_support_html5() {
  add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'theme_support_html5' );

// Theme setup
function recontaalpha_setup() {
	// Handle Titles
	add_theme_support( 'title-tag' );

	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'small-thumbnail', 720, 720, true );
	add_image_size( 'square-thumbnail', 80, 80, true );
	add_image_size( 'banner-image', 1024, 1024, true );
}

add_action( 'after_setup_theme', 'recontaalpha_setup' );
show_admin_bar( false );

// Checks if there are any posts in the results
function is_search_has_results() {
	return 0 != $GLOBALS['wp_query']->found_posts;
}

// Navigation Menus
register_nav_menus( array(
  'footer' => __( 'Footer Menu', 'recontaalpha' ),
  'standard' => __( 'Standard Menu', 'recontaalpha' ),
  'categories' => __( 'Categorias Menu', 'recontaalpha' ),
  'social' => __( 'Social Menu', 'recontaalpha' ),
) );


// Add class
function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'navbar-item';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

// Add Widget Areas
function recontaalpha_widgets() {
	register_sidebar(
		array(
			'name'          => 'Sidebar',
			'id'            => 'sidebar1',
			'before_widget' => '<div class="widget-item">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'recontaalpha_widgets' );

function recontaai_include_tag($tag){
	require get_parent_theme_file_path( '/templates/includes/template-tag-'.$tag.'.php' );
}

// Set up the WordPress core custom background feature.
add_theme_support( 'custom-background', apply_filters( 'recontaalpha_custom_background_args', array(
  'default-color' => 'ffffff',
  'default-image' => '',
) ) );

// Set up the WordPress Theme logo feature.
add_theme_support( 'custom-logo' );


// Generates a Breadcrumb
function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a> <span class='mdi mdi-chevron-right mdi-18px'></span> ";
		if (is_category() || is_single()) {
			the_category(' <span class="mdi mdi-chevron-right mdi-18px"></span> ');
			if (is_single()) {
				echo " <span class='mdi mdi-chevron-right mdi-18px'></span> ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( 'recontaaialpha_posted_on' ) ) {
	function recontaaialpha_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s"> (%4$s) </time>';
		}
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		$posted_on   = apply_filters(
			'recontaaialpha_posted_on', sprintf(
				'<span class="time-stamp">%1$s <a href="%2$s" rel="bookmark">%3$s</a></span>',
				esc_html_x( 'De', 'post date', 'recontaaialpha' ),
				esc_url( get_permalink() ),
				apply_filters( 'recontaaialpha_posted_on_time', $time_string )
			)
		);
		$byline      = apply_filters(
			'recontaaialpha_posted_by', sprintf(
				'<span class="author-line"> %1$s<span class="author"> <a class="url fn n" href="%2$s">%3$s</a></span></span>',
				$posted_on ? esc_html_x( 'por', 'post author', 'recontaaialpha' ) : esc_html_x( 'Posted by', 'post author', 'recontaaialpha' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_html( get_the_author() )
			)
		);
		echo $posted_on . $byline; // WPCS: XSS OK.
	}
}

/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
if ( ! function_exists( 'recontaaialpha_entry_footer' ) ) {
	function recontaaialpha_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'recontaaialpha' ) );
			if ( $categories_list && recontaaialpha_categorized_blog() ) {
				/* translators: %s: Categories of current post */
				printf( '<span class="cat-links">' . esc_html__( 'Postado em %s', 'recontaaialpha' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'recontaaialpha' ) );
			if ( $tags_list ) {
				/* translators: %s: Tags of current post */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %s', 'recontaaialpha' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}
		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'recontaaialpha' ), esc_html__( '1 Comment', 'recontaaialpha' ), esc_html__( '% Comments', 'recontaaialpha' ) );
			echo '</span>';
		}
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'recontaaialpha' ),
				the_title( '<span class="sr-only">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
}

function wpdev_filter_login_head() {

  if ( has_custom_logo() ) :

      $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
      ?>
      <style type="text/css">
          .login h1 a {
              background-image: url(<?php echo esc_url( $image[0] ); ?>);
              -webkit-background-size: <?php echo absint( $image[1] )?>px;
              background-size: <?php echo absint( $image[1] ) ?>px;
              height: <?php echo absint( $image[2] ) ?>px;
              width: <?php echo absint( $image[1] ) ?>px;
          }
      </style>
      <?php
  endif;
}

add_action( 'login_head', 'wpdev_filter_login_head', 100 );

function new_wp_login_url() {
  return home_url();
}
add_filter('login_headerurl', 'new_wp_login_url');

if ( ! function_exists( 'recontaaialpha_post_nav' ) ) {
	/**
	 * Display navigation to next/previous post when applicable.
	 */
	function recontaaialpha_post_nav() {
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
		?>
		<nav class="container navigation post-navigation">
			<h2 class="sr-only"><?php esc_html_e( 'Post navigation', 'recontaaialpha' ); ?></h2>
			<div class="row nav-links justify-content-between">
				<?php
				if ( get_previous_post_link() ) {
					previous_post_link( '<span class="nav-previous">%link</span>', _x( '<i class="fa fa-angle-left"></i>&nbsp;%title', 'Notícia anterior', 'recontaaialpha' ) );
				}
				if ( get_next_post_link() ) {
					next_post_link( '<span class="nav-next">%link</span>', _x( '%title&nbsp;<i class="fa fa-angle-right"></i>', 'Próxima notícia', 'recontaaialpha' ) );
				}
				?>
			</div><!-- .nav-links -->
		</nav><!-- .navigation -->
		<?php
	}
}

function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0 View";
  }
  return $count.' Views';
}
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
  }else{
      $count++;
      update_post_meta($postID, $count_key, $count);
  }
}

// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);