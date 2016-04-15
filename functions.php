<?php
/*
 *  Author: Jérémie Veillet | @jveillet
 *  URL: https://www.demainilpleut.fr | @demainilpleutfr
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Navigation
function dip_nav() {
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load scripts (header.php)
function dip_header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    	wp_deregister_script('jquery'); // Deregister WordPress jQuery
    	//wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3'); // Google CDN jQuery
    	//wp_enqueue_script('jquery'); // Enqueue it!
    }
}

// Load styles
function dip_styles() {
    wp_register_style('prism', get_template_directory_uri().'/css/prism.min.css', array(), '1.0', 'all');
    wp_enqueue_style('prism'); // Enqueue it!
    wp_register_style('demainilpleut', get_template_directory_uri().'/css/style.min.css', array(), '1.0', 'all');
    wp_enqueue_style('demainilpleut'); // Enqueue it!
}

// Register navigation
function register_dip_menu() {
    register_nav_menus(array( // Using array to specify more menus if needed
        /*'header-menu' => __('Header Menu', 'demainilpleut'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'demainilpleut'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'demainilpleut') // Extra Navigation if needed (duplicate as many as you need!)*/
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '') {
  $args['container'] = false;
  return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var) {
  return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist) {
  return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes) {
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function dip_wp_pagination() {
    global $wp_query;
    $big = 999999999;
    $paginate = paginate_links(array(
        'base'      => str_replace($big, '%#%', get_pagenum_link($big)),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'prev_next' => true,
        'type'      => 'list',
        'total'     => $wp_query->max_num_pages
    ));
    echo $paginate;
}

/**
*
*/
function wpse_allowedtags() {
    // Add custom tags to this string
  return '<script>,<style>,<br>,<em>,<i>,<ul>,<ol>,<li>,<a>,<p>,<img>,<video>,<audio>';
}

if ( ! function_exists( 'dip_custom_wp_trim_excerpt' ) ) :

  function dip_custom_wp_trim_excerpt($wpse_excerpt) {
    $raw_excerpt = $wpse_excerpt;
    if ( '' == $wpse_excerpt ) {

      $wpse_excerpt = get_the_content('');
      $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
      $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
      $wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
      $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

      //Set the excerpt word count and only break after sentence is complete.
      $excerpt_word_count = 75;
      $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
      $tokens = array();
      $excerptOutput = '';
      $count = 0;

      // Divide the string into tokens; HTML tags, or words, followed by any whitespace
      preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

      foreach ($tokens[0] as $token) {

        if ($count >= $excerpt_length && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) {
          // Limit reached, continue until , ; ? . or ! occur at the end
          $excerptOutput .= trim($token);
          break;
        }

        // Add words to complete sentence
        $count++;

        // Append what's left of the token
        $excerptOutput .= $token;
      }

      $wpse_excerpt = trim(force_balance_tags($excerptOutput));

      $excerpt_end = ' <a href="'. esc_url( get_permalink() ) . '">' . '&nbsp;&raquo;&nbsp;' . sprintf(__( 'Read more about: %s &nbsp;&raquo;', 'wpse' ), get_the_title()) . '</a>';
      $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);

      // After the content
      $wpse_excerpt .= $excerpt_more; /*Add read more in new paragraph */

      return $wpse_excerpt;

    }
    return apply_filters('dip_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
  }

  endif;

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'dip_custom_wp_trim_excerpt');

/**
*
*/
function dip_excerpt_more( $more ) {
  return '<div class="article-footer"><a class="article-btn" href="' . get_permalink( get_the_ID() ) . '">' . __('Read more...', 'demainilpleut') . '</a></div>';
}
add_filter( 'excerpt_more', 'dip_excerpt_more' );

function dip_excerpt_length( $length ) {
    return 300;
}
add_filter( 'excerpt_length', 'dip_excerpt_length', 999 );


// Remove Admin bar
function remove_admin_bar() {
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function dip_style_remove($tag) {
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom categories list for the footer
function dip_list_categories() {
	$args = array( '' );
    $terms = get_terms('category', $args);

    $term_list = '<ul>';
    foreach ($terms as $term) {
      $term_list .= '<li><a href="'.home_url().'/category/'.$term->name.'" class="footer-link">'.$term->name.' ('.$term->count.')</a></li>';
    }
    $term_list.= '</ul>';
    return $term_list;
}

function dip_list_posts() {
  $args = array( 'posts_per_page' => 8, 'orderby' => 'rand' );
  $rand_posts = get_posts( $args );
  $post_list = '<ul>';
  foreach ( $rand_posts as $post ){
     setup_postdata( $post );
     $title= $post->post_title;
     if(mb_strlen($title)>22) {
      $title = mb_substr( $post->post_title, 0, 22 ).'...';
     }
     $post_list .= '<li><a href="'.$post->guid.'" class="footer-link">'.$title.'</a></li>';
  }
  $post_list .= '</ul>';
  wp_reset_postdata();
  return $post_list;
}

function dip_reading_time($myContent) {
  $word = str_word_count(strip_tags($myContent));
  $m = floor($word / 100);
  $s = floor($word % 100 / (100 / 60));
  if($s >= 20) {
    $m++;
  }
  $est = $m . ' minute' . ($m == 1 ? '' : 's');
  return $est;
}

function disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}

// custom admin login logo
function wp_custom_login_logo() {
  echo '<style type="text/css">
  .login h1 a {
    background: url('.get_bloginfo('template_directory').'/img/logo2.png) no-repeat left center !important;
    background: url('.get_bloginfo('template_directory').'/img/logo2.svg) no-repeat left center,
    linear-gradient(transparent, transparent) !important;
    background-size: 160px 110px !important;
    height: 110px !important;
    width: 160px !important;
  }
  </style>';
}

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function dip_content_image_sizes_attr( $sizes, $size ) {
  $width = $size[0];

  840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

  if ( 'page' === get_post_type() ) {
    840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
  } else {
    840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
    600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
  }

  return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'dip_content_image_sizes_attr', 10 , 2 );

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'dip_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'dip_styles'); // Add Theme Stylesheet
add_action('init', 'register_dip_menu'); // Add HTML5 Blank Menu
add_action('init', 'dip_wp_pagination'); // Add our HTML5 Pagination
add_action( 'init', 'disable_emojis' ); // Disable emojis
add_action('login_head', 'wp_custom_login_logo'); // Add a custom logo on the login page

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'dip_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

?>
