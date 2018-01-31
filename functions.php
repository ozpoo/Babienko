<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    add_theme_support('menus');

    add_image_size( 'thumb_micro', 20, 20, true );
    add_image_size( 'thumb_square', 600, 600, true );
    add_image_size( 'thumb_small', 400, 400, true );
    add_image_size( 'thumb_landscape', 600, 400, true );
    add_image_size( 'thumb_portrait', 600, 900, true );
    add_image_size( 'thumb_feature_small', 1200, 800, true );
    add_image_size( 'thumb_feature_medium', 1800, 1200, true );
    add_image_size( 'thumb_feature_large', 2400, 1600, true );
    add_image_size( 'small', 600, "", true );
    add_image_size( 'medium', 1200, "", true );
    add_image_size( 'large', 1800, "", true );
    add_image_size( 'x-large', 2400, "", true );

    add_theme_support('automatic-feed-links');
    load_theme_textdomain('oz', get_template_directory() . '/languages');
}

function header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    	wp_register_script('conditionizr',
        get_template_directory_uri() . '/assets/js/_lib/conditionizr-4.3.0.min.js',
        array(), '4.3.0');
        wp_enqueue_script('conditionizr');

        wp_register_script('modernizr',
          get_template_directory_uri() . '/assets/js/_lib/modernizr-2.7.1.min.js',
          array(), '2.7.1');
        wp_enqueue_script('modernizr');

        wp_register_script('masonry',
          get_template_directory_uri() . '/assets/js/_lib/masonry-master/dist/masonry.pkgd.min.js',
          array('jquery'), '1.0.0');
        wp_enqueue_script('masonry');

        wp_register_script('multiple-filter-masonry',
          get_template_directory_uri() . '/assets/js/_lib/masonry-filter/masonry-filter.js',
          array('jquery'), '1.0.0');
        wp_enqueue_script('multiple-filter-masonry');

        wp_register_script('stickybits',
          get_template_directory_uri() . '/assets/js/_lib/stickybits/dist/stickybits.min.js',
          array(), '2.7.1');
        wp_enqueue_script('stickybits');

        wp_register_script('script',
          get_template_directory_uri() . '/assets/js/build/build.js?v='.time(),
          array('jquery'), '1.0.0');
        wp_enqueue_script('script');
    }
}

function conditional_scripts(){

}

function styles() {
    wp_register_style('font',
      get_template_directory_uri() . '/assets/font/Sofia Pro/style.css',
      array(), '1.0', 'all');
    wp_enqueue_style('font');

    wp_register_style('fontawesome',
      get_template_directory_uri() . '/assets/font/font-awesome-4.7.0/css/font-awesome.min.css',
      array(), '1.0', 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('style',
      get_template_directory_uri() . '/assets/css/build/build.css?v='.time(),
      array(), '1.0', 'all');
    wp_enqueue_style('style');
}

function my_wp_nav_menu_args($args = '') {
    $args['container'] = false;
    return $args;
}

function my_css_attributes_filter($var) {
    return is_array($var) ? array() : '';
}

function remove_category_rel_from_category_list($thelist) {
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

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

function pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

function html5wp_index($length) {
    return 20;
}

function html5wp_custom_post($length) {
    return 40;
}

function html5wp_excerpt($length_callback = '', $more_callback = '') {
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

function view_article($more) {
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

function remove_admin_bar() {
    return false;
}

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

add_action('init', 'header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'conditional_scripts'); // Add Conditional Page Scripts
add_action('wp_enqueue_scripts', 'styles'); // Add Theme Stylesheet
add_action('init', 'pagination'); // Add our HTML5 Pagination

remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

?>
