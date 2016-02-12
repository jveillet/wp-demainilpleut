<?php
/*
 *  Author: Jérémie Veillet | @jveillet
 *  URL: https://demainilpleut.fr | @demainilpleutfr
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

// Custom Excerpts
function dip_wp_index($length) {
	// Create 150 Word Callback for Index page Excerpts, call using dip_wp_excerpt('dip_wp_index');
  return 150;
}

// Create 40 Word Callback for Custom Post Excerpts, call using dip_wp_excerpt('dip_wp_custom_post');
function dip_wp_custom_post($length) {
  return 40;
}

// Create the Custom Excerpts callback
function dip_wp_excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function dip_view_article($more) {
    global $post;
    return '...<div><a class="article-btn" href="' . get_permalink($post->ID) . '">' . __('Read more...', 'demainilpleut') . '</a></div>';
}

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

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'dip_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_enqueue_scripts', 'dip_styles'); // Add Theme Stylesheet
add_action('init', 'register_dip_menu'); // Add HTML5 Blank Menu
add_action('init', 'dip_wp_pagination'); // Add our HTML5 Pagination
add_action( 'init', 'disable_emojis' ); // Disable emojis

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
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'dip_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_filter('excerpt_more', 'dip_view_article'); // Add 'View Article' button instead of [...] for Excerpts

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether
	
?>
